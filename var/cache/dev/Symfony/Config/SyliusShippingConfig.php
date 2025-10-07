<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusShipping'.\DIRECTORY_SEPARATOR.'ShippingMethodRuleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusShipping'.\DIRECTORY_SEPARATOR.'ShippingMethodCalculatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusShipping'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusShippingConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $shippingMethodRule;
    private $shippingMethodCalculator;
    private $driver;
    private $resources;
    private $_usedProperties = [];

    /**
     * @default {"validation_groups":[]}
    */
    public function shippingMethodRule(array $value = []): \Symfony\Config\SyliusShipping\ShippingMethodRuleConfig
    {
        if (null === $this->shippingMethodRule) {
            $this->_usedProperties['shippingMethodRule'] = true;
            $this->shippingMethodRule = new \Symfony\Config\SyliusShipping\ShippingMethodRuleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shippingMethodRule()" has already been initialized. You cannot pass values the second time you call shippingMethodRule().');
        }

        return $this->shippingMethodRule;
    }

    /**
     * @default {"validation_groups":[]}
    */
    public function shippingMethodCalculator(array $value = []): \Symfony\Config\SyliusShipping\ShippingMethodCalculatorConfig
    {
        if (null === $this->shippingMethodCalculator) {
            $this->_usedProperties['shippingMethodCalculator'] = true;
            $this->shippingMethodCalculator = new \Symfony\Config\SyliusShipping\ShippingMethodCalculatorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shippingMethodCalculator()" has already been initialized. You cannot pass values the second time you call shippingMethodCalculator().');
        }

        return $this->shippingMethodCalculator;
    }

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
     * @default {"shipment":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\Shipment","interface":"Sylius\\Component\\Shipping\\Model\\ShipmentInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType"}},"shipment_unit":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShipmentUnit","interface":"Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory"}},"shipping_method":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingMethod","interface":"Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType"},"translation":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation","interface":"Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType"}}},"shipping_method_rule":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingMethodRule","interface":"Sylius\\Component\\Shipping\\Model\\ShippingMethodRuleInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodRuleType"}},"shipping_category":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingCategory","interface":"Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusShipping\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusShipping\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_shipping';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('shipping_method_rule', $value)) {
            $this->_usedProperties['shippingMethodRule'] = true;
            $this->shippingMethodRule = new \Symfony\Config\SyliusShipping\ShippingMethodRuleConfig($value['shipping_method_rule']);
            unset($value['shipping_method_rule']);
        }

        if (array_key_exists('shipping_method_calculator', $value)) {
            $this->_usedProperties['shippingMethodCalculator'] = true;
            $this->shippingMethodCalculator = new \Symfony\Config\SyliusShipping\ShippingMethodCalculatorConfig($value['shipping_method_calculator']);
            unset($value['shipping_method_calculator']);
        }

        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusShipping\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['shippingMethodRule'])) {
            $output['shipping_method_rule'] = $this->shippingMethodRule->toArray();
        }
        if (isset($this->_usedProperties['shippingMethodCalculator'])) {
            $output['shipping_method_calculator'] = $this->shippingMethodCalculator->toArray();
        }
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}
