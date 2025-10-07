<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'PromotionActionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'PromotionRuleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'CatalogPromotionActionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'CatalogPromotionScopeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusPromotionConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $promotionAction;
    private $promotionRule;
    private $catalogPromotionAction;
    private $catalogPromotionScope;
    private $driver;
    private $resources;
    private $_usedProperties = [];

    /**
     * @default {"validation_groups":[]}
    */
    public function promotionAction(array $value = []): \Symfony\Config\SyliusPromotion\PromotionActionConfig
    {
        if (null === $this->promotionAction) {
            $this->_usedProperties['promotionAction'] = true;
            $this->promotionAction = new \Symfony\Config\SyliusPromotion\PromotionActionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "promotionAction()" has already been initialized. You cannot pass values the second time you call promotionAction().');
        }

        return $this->promotionAction;
    }

    /**
     * @default {"validation_groups":[]}
    */
    public function promotionRule(array $value = []): \Symfony\Config\SyliusPromotion\PromotionRuleConfig
    {
        if (null === $this->promotionRule) {
            $this->_usedProperties['promotionRule'] = true;
            $this->promotionRule = new \Symfony\Config\SyliusPromotion\PromotionRuleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "promotionRule()" has already been initialized. You cannot pass values the second time you call promotionRule().');
        }

        return $this->promotionRule;
    }

    /**
     * @default {"validation_groups":[]}
    */
    public function catalogPromotionAction(array $value = []): \Symfony\Config\SyliusPromotion\CatalogPromotionActionConfig
    {
        if (null === $this->catalogPromotionAction) {
            $this->_usedProperties['catalogPromotionAction'] = true;
            $this->catalogPromotionAction = new \Symfony\Config\SyliusPromotion\CatalogPromotionActionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "catalogPromotionAction()" has already been initialized. You cannot pass values the second time you call catalogPromotionAction().');
        }

        return $this->catalogPromotionAction;
    }

    /**
     * @default {"validation_groups":[]}
    */
    public function catalogPromotionScope(array $value = []): \Symfony\Config\SyliusPromotion\CatalogPromotionScopeConfig
    {
        if (null === $this->catalogPromotionScope) {
            $this->_usedProperties['catalogPromotionScope'] = true;
            $this->catalogPromotionScope = new \Symfony\Config\SyliusPromotion\CatalogPromotionScopeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "catalogPromotionScope()" has already been initialized. You cannot pass values the second time you call catalogPromotionScope().');
        }

        return $this->catalogPromotionScope;
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
     * @default {"promotion":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\Promotion","interface":"Sylius\\Component\\Promotion\\Model\\PromotionInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionType"},"translation":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\PromotionTranslation","interface":"Sylius\\Component\\Promotion\\Model\\PromotionTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionTranslationType"}}},"catalog_promotion":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\CatalogPromotion","interface":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionType"},"translation":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslation","interface":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionTranslationType"}}},"catalog_promotion_scope":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionScope","interface":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionScopeInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ResourceBundle\\Form\\Type\\DefaultResourceType"}},"catalog_promotion_action":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionAction","interface":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionActionInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ResourceBundle\\Form\\Type\\DefaultResourceType"}},"promotion_rule":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\PromotionRule","interface":"Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleType"}},"promotion_action":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\PromotionAction","interface":"Sylius\\Component\\Promotion\\Model\\PromotionActionInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType"}},"promotion_coupon":{"classes":{"model":"Sylius\\Component\\Promotion\\Model\\PromotionCoupon","interface":"Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface","controller":"Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponType"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusPromotion\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPromotion\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_promotion';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('promotion_action', $value)) {
            $this->_usedProperties['promotionAction'] = true;
            $this->promotionAction = new \Symfony\Config\SyliusPromotion\PromotionActionConfig($value['promotion_action']);
            unset($value['promotion_action']);
        }

        if (array_key_exists('promotion_rule', $value)) {
            $this->_usedProperties['promotionRule'] = true;
            $this->promotionRule = new \Symfony\Config\SyliusPromotion\PromotionRuleConfig($value['promotion_rule']);
            unset($value['promotion_rule']);
        }

        if (array_key_exists('catalog_promotion_action', $value)) {
            $this->_usedProperties['catalogPromotionAction'] = true;
            $this->catalogPromotionAction = new \Symfony\Config\SyliusPromotion\CatalogPromotionActionConfig($value['catalog_promotion_action']);
            unset($value['catalog_promotion_action']);
        }

        if (array_key_exists('catalog_promotion_scope', $value)) {
            $this->_usedProperties['catalogPromotionScope'] = true;
            $this->catalogPromotionScope = new \Symfony\Config\SyliusPromotion\CatalogPromotionScopeConfig($value['catalog_promotion_scope']);
            unset($value['catalog_promotion_scope']);
        }

        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPromotion\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['promotionAction'])) {
            $output['promotion_action'] = $this->promotionAction->toArray();
        }
        if (isset($this->_usedProperties['promotionRule'])) {
            $output['promotion_rule'] = $this->promotionRule->toArray();
        }
        if (isset($this->_usedProperties['catalogPromotionAction'])) {
            $output['catalog_promotion_action'] = $this->catalogPromotionAction->toArray();
        }
        if (isset($this->_usedProperties['catalogPromotionScope'])) {
            $output['catalog_promotion_scope'] = $this->catalogPromotionScope->toArray();
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
