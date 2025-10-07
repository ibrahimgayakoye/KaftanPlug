<?php

namespace Symfony\Config\SyliusPayment;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'GatewayConfigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentMethodConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PaymentRequestConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResourcesConfig 
{
    private $gatewayConfig;
    private $paymentMethod;
    private $payment;
    private $paymentRequest;
    private $_usedProperties = [];

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Payment\\Model\\GatewayConfig","interface":"Sylius\\Component\\Payment\\Model\\GatewayConfigInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\GatewayConfigType"}}
    */
    public function gatewayConfig(array $value = []): \Symfony\Config\SyliusPayment\Resources\GatewayConfigConfig
    {
        if (null === $this->gatewayConfig) {
            $this->_usedProperties['gatewayConfig'] = true;
            $this->gatewayConfig = new \Symfony\Config\SyliusPayment\Resources\GatewayConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gatewayConfig()" has already been initialized. You cannot pass values the second time you call gatewayConfig().');
        }

        return $this->gatewayConfig;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentMethod","interface":"Sylius\\Component\\Payment\\Model\\PaymentMethodInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\PaymentBundle\\Doctrine\\ORM\\PaymentMethodRepository","factory":"Sylius\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType"},"translation":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation","interface":"Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType"}}}
    */
    public function paymentMethod(array $value = []): \Symfony\Config\SyliusPayment\Resources\PaymentMethodConfig
    {
        if (null === $this->paymentMethod) {
            $this->_usedProperties['paymentMethod'] = true;
            $this->paymentMethod = new \Symfony\Config\SyliusPayment\Resources\PaymentMethodConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentMethod()" has already been initialized. You cannot pass values the second time you call paymentMethod().');
        }

        return $this->paymentMethod;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Payment\\Model\\Payment","interface":"Sylius\\Component\\Payment\\Model\\PaymentInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType"}}
    */
    public function payment(array $value = []): \Symfony\Config\SyliusPayment\Resources\PaymentConfig
    {
        if (null === $this->payment) {
            $this->_usedProperties['payment'] = true;
            $this->payment = new \Symfony\Config\SyliusPayment\Resources\PaymentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "payment()" has already been initialized. You cannot pass values the second time you call payment().');
        }

        return $this->payment;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentRequest","interface":"Sylius\\Component\\Payment\\Model\\PaymentRequestInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\PaymentBundle\\Doctrine\\ORM\\PaymentRequestRepository","factory":"Sylius\\Component\\Payment\\Factory\\PaymentRequestFactory","form":null}}
    */
    public function paymentRequest(array $value = []): \Symfony\Config\SyliusPayment\Resources\PaymentRequestConfig
    {
        if (null === $this->paymentRequest) {
            $this->_usedProperties['paymentRequest'] = true;
            $this->paymentRequest = new \Symfony\Config\SyliusPayment\Resources\PaymentRequestConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentRequest()" has already been initialized. You cannot pass values the second time you call paymentRequest().');
        }

        return $this->paymentRequest;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('gateway_config', $value)) {
            $this->_usedProperties['gatewayConfig'] = true;
            $this->gatewayConfig = new \Symfony\Config\SyliusPayment\Resources\GatewayConfigConfig($value['gateway_config']);
            unset($value['gateway_config']);
        }

        if (array_key_exists('payment_method', $value)) {
            $this->_usedProperties['paymentMethod'] = true;
            $this->paymentMethod = new \Symfony\Config\SyliusPayment\Resources\PaymentMethodConfig($value['payment_method']);
            unset($value['payment_method']);
        }

        if (array_key_exists('payment', $value)) {
            $this->_usedProperties['payment'] = true;
            $this->payment = new \Symfony\Config\SyliusPayment\Resources\PaymentConfig($value['payment']);
            unset($value['payment']);
        }

        if (array_key_exists('payment_request', $value)) {
            $this->_usedProperties['paymentRequest'] = true;
            $this->paymentRequest = new \Symfony\Config\SyliusPayment\Resources\PaymentRequestConfig($value['payment_request']);
            unset($value['payment_request']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['gatewayConfig'])) {
            $output['gateway_config'] = $this->gatewayConfig->toArray();
        }
        if (isset($this->_usedProperties['paymentMethod'])) {
            $output['payment_method'] = $this->paymentMethod->toArray();
        }
        if (isset($this->_usedProperties['payment'])) {
            $output['payment'] = $this->payment->toArray();
        }
        if (isset($this->_usedProperties['paymentRequest'])) {
            $output['payment_request'] = $this->paymentRequest->toArray();
        }

        return $output;
    }

}
