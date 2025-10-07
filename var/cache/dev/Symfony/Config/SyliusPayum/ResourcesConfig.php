<?php

namespace Symfony\Config\SyliusPayum;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentSecurityTokenConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResourcesConfig 
{
    private $paymentSecurityToken;
    private $_usedProperties = [];

    /**
     * @default {"classes":{"model":"Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken","interface":"Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityTokenInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory"}}
    */
    public function paymentSecurityToken(array $value = []): \Symfony\Config\SyliusPayum\Resources\PaymentSecurityTokenConfig
    {
        if (null === $this->paymentSecurityToken) {
            $this->_usedProperties['paymentSecurityToken'] = true;
            $this->paymentSecurityToken = new \Symfony\Config\SyliusPayum\Resources\PaymentSecurityTokenConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentSecurityToken()" has already been initialized. You cannot pass values the second time you call paymentSecurityToken().');
        }

        return $this->paymentSecurityToken;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('payment_security_token', $value)) {
            $this->_usedProperties['paymentSecurityToken'] = true;
            $this->paymentSecurityToken = new \Symfony\Config\SyliusPayum\Resources\PaymentSecurityTokenConfig($value['payment_security_token']);
            unset($value['payment_security_token']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['paymentSecurityToken'])) {
            $output['payment_security_token'] = $this->paymentSecurityToken->toArray();
        }

        return $output;
    }

}
