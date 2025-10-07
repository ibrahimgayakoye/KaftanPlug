<?php

namespace Symfony\Config\SyliusPayment;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PaymentRequestConfig 
{
    private $statesToBeCancelledWhenPaymentMethodChanged;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function statesToBeCancelledWhenPaymentMethodChanged(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['statesToBeCancelledWhenPaymentMethodChanged'] = true;
        $this->statesToBeCancelledWhenPaymentMethodChanged = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('states_to_be_cancelled_when_payment_method_changed', $value)) {
            $this->_usedProperties['statesToBeCancelledWhenPaymentMethodChanged'] = true;
            $this->statesToBeCancelledWhenPaymentMethodChanged = $value['states_to_be_cancelled_when_payment_method_changed'];
            unset($value['states_to_be_cancelled_when_payment_method_changed']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['statesToBeCancelledWhenPaymentMethodChanged'])) {
            $output['states_to_be_cancelled_when_payment_method_changed'] = $this->statesToBeCancelledWhenPaymentMethodChanged;
        }

        return $output;
    }

}
