<?php

namespace Symfony\Config\SyliusCore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Checkout'.\DIRECTORY_SEPARATOR.'PaymentConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CheckoutConfig 
{
    private $payment;
    private $_usedProperties = [];

    /**
     * @default {"allowed_states":["new","cart"]}
    */
    public function payment(array $value = []): \Symfony\Config\SyliusCore\Checkout\PaymentConfig
    {
        if (null === $this->payment) {
            $this->_usedProperties['payment'] = true;
            $this->payment = new \Symfony\Config\SyliusCore\Checkout\PaymentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "payment()" has already been initialized. You cannot pass values the second time you call payment().');
        }

        return $this->payment;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('payment', $value)) {
            $this->_usedProperties['payment'] = true;
            $this->payment = new \Symfony\Config\SyliusCore\Checkout\PaymentConfig($value['payment']);
            unset($value['payment']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['payment'])) {
            $output['payment'] = $this->payment->toArray();
        }

        return $output;
    }

}
