<?php

/*
 * This file is part of the Sylius Mollie Plugin package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Sylius\MolliePlugin\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Doctrine\ORM\EntityManager;
use Payum\Core\Payum;
use Payum\Core\Registry\RegistryInterface;
use Sylius\Abstraction\StateMachine\StateMachineInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\PaymentMethodInterface;
use Sylius\Component\Payment\PaymentTransitions;
use Sylius\MolliePlugin\Payum\Checker\MollieGatewayFactoryCheckerInterface;
use Sylius\MolliePlugin\Provider\DivisorProviderInterface;
use Webmozart\Assert\Assert;

final class OrderContext implements Context
{
    public function __construct(
        private readonly EntityManager $entityManager,
        private readonly StateMachineInterface $stateMachine,
        private readonly RegistryInterface $payum,
        private readonly MollieGatewayFactoryCheckerInterface $mollieGatewayFactoryChecker,
        private readonly DivisorProviderInterface $divisorProvider,
    ) {
    }

    /**
     * @Given /^(this order) with mollie payment is already paid$/
     */
    public function thisOrderWithMolliePaymentIsAlreadyPaid(OrderInterface $order): void
    {
        $this->applyMolliePaymentTransitionOnOrder($order, PaymentTransitions::TRANSITION_COMPLETE);

        $this->entityManager->flush();
    }

    private function applyMolliePaymentTransitionOnOrder(OrderInterface $order, string $transition): void
    {
        foreach ($order->getPayments() as $payment) {
            /** @var PaymentMethodInterface $paymentMethod */
            $paymentMethod = $payment->getMethod();

            $gatewayConfig = $paymentMethod->getGatewayConfig();

            Assert::notNull($gatewayConfig);

            if ($this->mollieGatewayFactoryChecker->isMollieGateway($gatewayConfig)) {
                Assert::isInstanceOf($this->payum, Payum::class);
                $refundToken = $this->payum->getTokenFactory()->createRefundToken('mollie', $payment);

                $metadata = [];
                $model = [];
                $metadata['refund_token'] = $refundToken->getHash();

                $model['metadata'] = $metadata;

                Assert::notNull($payment->getAmount());
                $model['amount'] = $payment->getAmount() / $this->divisorProvider->getDivisor();
                $model['payment_mollie_id'] = 'test';

                $payment->setDetails($model);
            }

            $this->stateMachine->apply($payment, PaymentTransitions::GRAPH, $transition);
        }
    }
}
