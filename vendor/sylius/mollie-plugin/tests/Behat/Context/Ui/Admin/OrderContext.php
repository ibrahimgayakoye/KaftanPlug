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

namespace Tests\Sylius\MolliePlugin\Behat\Context\Ui\Admin;

use Behat\Behat\Context\Context;
use Sylius\Component\Core\Repository\PaymentRepositoryInterface;
use Sylius\Component\Payment\Model\PaymentInterface;
use Sylius\MolliePlugin\Entity\OrderInterface;
use Tests\Sylius\MolliePlugin\Behat\Page\Admin\Order\IndexPageInterface;
use Webmozart\Assert\Assert;

final class OrderContext implements Context
{
    public function __construct(
        private readonly IndexPageInterface $indexPage,
        private readonly PaymentRepositoryInterface $paymentRepository,
    ) {
    }

    /**
     * @Then all orders have same total set to :total
     */
    public function bothOrdersShouldHaveSameTotal(string $total): void
    {
        Assert::true($this->indexPage->allOrdersHaveSameTotal($total));
    }

    /**
     * @When /^(this order) is incomplete$/
     */
    public function thisOrderIsIncomplete(OrderInterface $order): void
    {
        /** @var PaymentInterface $firstPayment */
        $firstPayment = $order->getPayments()->first();
        $firstPayment->setDetails([]);

        $this->paymentRepository->add($firstPayment);
    }
}
