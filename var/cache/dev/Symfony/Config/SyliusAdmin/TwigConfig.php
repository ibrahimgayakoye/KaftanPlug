<?php

namespace Symfony\Config\SyliusAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'PaymentMethodConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigConfig 
{
    private $paymentMethod;
    private $_usedProperties = [];

    /**
     * @default {"excluded_gateways":[]}
    */
    public function paymentMethod(array $value = []): \Symfony\Config\SyliusAdmin\Twig\PaymentMethodConfig
    {
        if (null === $this->paymentMethod) {
            $this->_usedProperties['paymentMethod'] = true;
            $this->paymentMethod = new \Symfony\Config\SyliusAdmin\Twig\PaymentMethodConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentMethod()" has already been initialized. You cannot pass values the second time you call paymentMethod().');
        }

        return $this->paymentMethod;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('payment_method', $value)) {
            $this->_usedProperties['paymentMethod'] = true;
            $this->paymentMethod = new \Symfony\Config\SyliusAdmin\Twig\PaymentMethodConfig($value['payment_method']);
            unset($value['payment_method']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['paymentMethod'])) {
            $output['payment_method'] = $this->paymentMethod->toArray();
        }

        return $output;
    }

}
