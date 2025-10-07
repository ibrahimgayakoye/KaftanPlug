<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayment'.\DIRECTORY_SEPARATOR.'EncryptionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayment'.\DIRECTORY_SEPARATOR.'GatewayConfigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayment'.\DIRECTORY_SEPARATOR.'PaymentRequestConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayment'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusPaymentConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $encryption;
    private $gateways;
    private $gatewayConfig;
    private $paymentRequest;
    private $resources;
    private $_usedProperties = [];

    /**
     * @default 'doctrine/orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): static
    {
        $this->_usedProperties['driver'] = true;
        $this->driver = $value;

        return $this;
    }

    /**
     * @default {"enabled":true,"disabled_for_factories":[]}
    */
    public function encryption(array $value = []): \Symfony\Config\SyliusPayment\EncryptionConfig
    {
        if (null === $this->encryption) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\SyliusPayment\EncryptionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "encryption()" has already been initialized. You cannot pass values the second time you call encryption().');
        }

        return $this->encryption;
    }

    /**
     * @return $this
     */
    public function gateways(string $name, mixed $value): static
    {
        $this->_usedProperties['gateways'] = true;
        $this->gateways[$name] = $value;

        return $this;
    }

    /**
     * @default {"validation_groups":[]}
    */
    public function gatewayConfig(array $value = []): \Symfony\Config\SyliusPayment\GatewayConfigConfig
    {
        if (null === $this->gatewayConfig) {
            $this->_usedProperties['gatewayConfig'] = true;
            $this->gatewayConfig = new \Symfony\Config\SyliusPayment\GatewayConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gatewayConfig()" has already been initialized. You cannot pass values the second time you call gatewayConfig().');
        }

        return $this->gatewayConfig;
    }

    /**
     * @default {"states_to_be_cancelled_when_payment_method_changed":[]}
    */
    public function paymentRequest(array $value = []): \Symfony\Config\SyliusPayment\PaymentRequestConfig
    {
        if (null === $this->paymentRequest) {
            $this->_usedProperties['paymentRequest'] = true;
            $this->paymentRequest = new \Symfony\Config\SyliusPayment\PaymentRequestConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentRequest()" has already been initialized. You cannot pass values the second time you call paymentRequest().');
        }

        return $this->paymentRequest;
    }

    /**
     * @default {"gateway_config":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\GatewayConfig","interface":"Sylius\\Component\\Payment\\Model\\GatewayConfigInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\GatewayConfigType"}},"payment_method":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentMethod","interface":"Sylius\\Component\\Payment\\Model\\PaymentMethodInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\PaymentBundle\\Doctrine\\ORM\\PaymentMethodRepository","factory":"Sylius\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType"},"translation":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation","interface":"Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType"}}},"payment":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\Payment","interface":"Sylius\\Component\\Payment\\Model\\PaymentInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType"}},"payment_request":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentRequest","interface":"Sylius\\Component\\Payment\\Model\\PaymentRequestInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\PaymentBundle\\Doctrine\\ORM\\PaymentRequestRepository","factory":"Sylius\\Component\\Payment\\Factory\\PaymentRequestFactory","form":null}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusPayment\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPayment\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_payment';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('encryption', $value)) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\SyliusPayment\EncryptionConfig($value['encryption']);
            unset($value['encryption']);
        }

        if (array_key_exists('gateways', $value)) {
            $this->_usedProperties['gateways'] = true;
            $this->gateways = $value['gateways'];
            unset($value['gateways']);
        }

        if (array_key_exists('gateway_config', $value)) {
            $this->_usedProperties['gatewayConfig'] = true;
            $this->gatewayConfig = new \Symfony\Config\SyliusPayment\GatewayConfigConfig($value['gateway_config']);
            unset($value['gateway_config']);
        }

        if (array_key_exists('payment_request', $value)) {
            $this->_usedProperties['paymentRequest'] = true;
            $this->paymentRequest = new \Symfony\Config\SyliusPayment\PaymentRequestConfig($value['payment_request']);
            unset($value['payment_request']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPayment\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['encryption'])) {
            $output['encryption'] = $this->encryption->toArray();
        }
        if (isset($this->_usedProperties['gateways'])) {
            $output['gateways'] = $this->gateways;
        }
        if (isset($this->_usedProperties['gatewayConfig'])) {
            $output['gateway_config'] = $this->gatewayConfig->toArray();
        }
        if (isset($this->_usedProperties['paymentRequest'])) {
            $output['payment_request'] = $this->paymentRequest->toArray();
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}
