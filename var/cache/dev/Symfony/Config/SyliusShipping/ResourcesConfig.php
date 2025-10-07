<?php

namespace Symfony\Config\SyliusShipping;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShipmentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShipmentUnitConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShippingMethodConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShippingMethodRuleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShippingCategoryConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResourcesConfig 
{
    private $shipment;
    private $shipmentUnit;
    private $shippingMethod;
    private $shippingMethodRule;
    private $shippingCategory;
    private $_usedProperties = [];

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Shipping\\Model\\Shipment","interface":"Sylius\\Component\\Shipping\\Model\\ShipmentInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType"}}
    */
    public function shipment(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShipmentConfig
    {
        if (null === $this->shipment) {
            $this->_usedProperties['shipment'] = true;
            $this->shipment = new \Symfony\Config\SyliusShipping\Resources\ShipmentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shipment()" has already been initialized. You cannot pass values the second time you call shipment().');
        }

        return $this->shipment;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShipmentUnit","interface":"Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory"}}
    */
    public function shipmentUnit(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShipmentUnitConfig
    {
        if (null === $this->shipmentUnit) {
            $this->_usedProperties['shipmentUnit'] = true;
            $this->shipmentUnit = new \Symfony\Config\SyliusShipping\Resources\ShipmentUnitConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shipmentUnit()" has already been initialized. You cannot pass values the second time you call shipmentUnit().');
        }

        return $this->shipmentUnit;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingMethod","interface":"Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType"},"translation":{"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation","interface":"Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType"}}}
    */
    public function shippingMethod(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShippingMethodConfig
    {
        if (null === $this->shippingMethod) {
            $this->_usedProperties['shippingMethod'] = true;
            $this->shippingMethod = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shippingMethod()" has already been initialized. You cannot pass values the second time you call shippingMethod().');
        }

        return $this->shippingMethod;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingMethodRule","interface":"Sylius\\Component\\Shipping\\Model\\ShippingMethodRuleInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodRuleType"}}
    */
    public function shippingMethodRule(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShippingMethodRuleConfig
    {
        if (null === $this->shippingMethodRule) {
            $this->_usedProperties['shippingMethodRule'] = true;
            $this->shippingMethodRule = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodRuleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shippingMethodRule()" has already been initialized. You cannot pass values the second time you call shippingMethodRule().');
        }

        return $this->shippingMethodRule;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Shipping\\Model\\ShippingCategory","interface":"Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType"}}
    */
    public function shippingCategory(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShippingCategoryConfig
    {
        if (null === $this->shippingCategory) {
            $this->_usedProperties['shippingCategory'] = true;
            $this->shippingCategory = new \Symfony\Config\SyliusShipping\Resources\ShippingCategoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "shippingCategory()" has already been initialized. You cannot pass values the second time you call shippingCategory().');
        }

        return $this->shippingCategory;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('shipment', $value)) {
            $this->_usedProperties['shipment'] = true;
            $this->shipment = new \Symfony\Config\SyliusShipping\Resources\ShipmentConfig($value['shipment']);
            unset($value['shipment']);
        }

        if (array_key_exists('shipment_unit', $value)) {
            $this->_usedProperties['shipmentUnit'] = true;
            $this->shipmentUnit = new \Symfony\Config\SyliusShipping\Resources\ShipmentUnitConfig($value['shipment_unit']);
            unset($value['shipment_unit']);
        }

        if (array_key_exists('shipping_method', $value)) {
            $this->_usedProperties['shippingMethod'] = true;
            $this->shippingMethod = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodConfig($value['shipping_method']);
            unset($value['shipping_method']);
        }

        if (array_key_exists('shipping_method_rule', $value)) {
            $this->_usedProperties['shippingMethodRule'] = true;
            $this->shippingMethodRule = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodRuleConfig($value['shipping_method_rule']);
            unset($value['shipping_method_rule']);
        }

        if (array_key_exists('shipping_category', $value)) {
            $this->_usedProperties['shippingCategory'] = true;
            $this->shippingCategory = new \Symfony\Config\SyliusShipping\Resources\ShippingCategoryConfig($value['shipping_category']);
            unset($value['shipping_category']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['shipment'])) {
            $output['shipment'] = $this->shipment->toArray();
        }
        if (isset($this->_usedProperties['shipmentUnit'])) {
            $output['shipment_unit'] = $this->shipmentUnit->toArray();
        }
        if (isset($this->_usedProperties['shippingMethod'])) {
            $output['shipping_method'] = $this->shippingMethod->toArray();
        }
        if (isset($this->_usedProperties['shippingMethodRule'])) {
            $output['shipping_method_rule'] = $this->shippingMethodRule->toArray();
        }
        if (isset($this->_usedProperties['shippingCategory'])) {
            $output['shipping_category'] = $this->shippingCategory->toArray();
        }

        return $output;
    }

}
