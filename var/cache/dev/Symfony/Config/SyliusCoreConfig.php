<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'OrdersStatisticsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'CatalogPromotionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'PriceHistoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'CheckoutConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusCore'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusCoreConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $prependDoctrineMigrations;
    private $shippingAddressBasedTaxation;
    private $orderByIdentifier;
    private $processShipmentsBeforeRecalculatingPrices;
    private $orderTokenLength;
    private $maxIntValue;
    private $ordersStatistics;
    private $catalogPromotions;
    private $priceHistory;
    private $filesystem;
    private $allowedImagesMimeTypes;
    private $checkout;
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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function prependDoctrineMigrations($value): static
    {
        $this->_usedProperties['prependDoctrineMigrations'] = true;
        $this->prependDoctrineMigrations = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function shippingAddressBasedTaxation($value): static
    {
        $this->_usedProperties['shippingAddressBasedTaxation'] = true;
        $this->shippingAddressBasedTaxation = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function orderByIdentifier($value): static
    {
        $this->_usedProperties['orderByIdentifier'] = true;
        $this->orderByIdentifier = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated The "sylius_core.process_shipments_before_recalculating_prices" parameter is deprecated and will be removed in 2.0.
     * @return $this
     */
    public function processShipmentsBeforeRecalculatingPrices($value): static
    {
        $this->_usedProperties['processShipmentsBeforeRecalculatingPrices'] = true;
        $this->processShipmentsBeforeRecalculatingPrices = $value;

        return $this;
    }

    /**
     * @default 64
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function orderTokenLength($value): static
    {
        $this->_usedProperties['orderTokenLength'] = true;
        $this->orderTokenLength = $value;

        return $this;
    }

    /**
     * @default 2147483647
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxIntValue($value): static
    {
        $this->_usedProperties['maxIntValue'] = true;
        $this->maxIntValue = $value;

        return $this;
    }

    public function ordersStatistics(array $value = []): \Symfony\Config\SyliusCore\OrdersStatisticsConfig
    {
        if (null === $this->ordersStatistics) {
            $this->_usedProperties['ordersStatistics'] = true;
            $this->ordersStatistics = new \Symfony\Config\SyliusCore\OrdersStatisticsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "ordersStatistics()" has already been initialized. You cannot pass values the second time you call ordersStatistics().');
        }

        return $this->ordersStatistics;
    }

    /**
     * @default {"batch_size":100}
    */
    public function catalogPromotions(array $value = []): \Symfony\Config\SyliusCore\CatalogPromotionsConfig
    {
        if (null === $this->catalogPromotions) {
            $this->_usedProperties['catalogPromotions'] = true;
            $this->catalogPromotions = new \Symfony\Config\SyliusCore\CatalogPromotionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "catalogPromotions()" has already been initialized. You cannot pass values the second time you call catalogPromotions().');
        }

        return $this->catalogPromotions;
    }

    /**
     * @default {"batch_size":100}
    */
    public function priceHistory(array $value = []): \Symfony\Config\SyliusCore\PriceHistoryConfig
    {
        if (null === $this->priceHistory) {
            $this->_usedProperties['priceHistory'] = true;
            $this->priceHistory = new \Symfony\Config\SyliusCore\PriceHistoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "priceHistory()" has already been initialized. You cannot pass values the second time you call priceHistory().');
        }

        return $this->priceHistory;
    }

    /**
     * @default {"adapter":"default"}
    */
    public function filesystem(array $value = []): \Symfony\Config\SyliusCore\FilesystemConfig
    {
        if (null === $this->filesystem) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = new \Symfony\Config\SyliusCore\FilesystemConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
        }

        return $this->filesystem;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function allowedImagesMimeTypes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedImagesMimeTypes'] = true;
        $this->allowedImagesMimeTypes = $value;

        return $this;
    }

    /**
     * @default {"payment":{"allowed_states":["new","cart"]}}
    */
    public function checkout(array $value = []): \Symfony\Config\SyliusCore\CheckoutConfig
    {
        if (null === $this->checkout) {
            $this->_usedProperties['checkout'] = true;
            $this->checkout = new \Symfony\Config\SyliusCore\CheckoutConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "checkout()" has already been initialized. You cannot pass values the second time you call checkout().');
        }

        return $this->checkout;
    }

    /**
     * @default {"product_image":{"classes":{"model":"Sylius\\Component\\Core\\Model\\ProductImage","interface":"Sylius\\Component\\Core\\Model\\ProductImageInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory"}},"avatar_image":{"classes":{"model":"Sylius\\Component\\Core\\Model\\AvatarImage","interface":"Sylius\\Component\\Core\\Model\\AvatarImageInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory"}},"taxon_image":{"classes":{"model":"Sylius\\Component\\Core\\Model\\TaxonImage","interface":"Sylius\\Component\\Core\\Model\\TaxonImageInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory"}},"product_taxon":{"classes":{"model":"Sylius\\Component\\Core\\Model\\ProductTaxon","interface":"Sylius\\Component\\Core\\Model\\ProductTaxonInterface","controller":"Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController","factory":"Sylius\\Resource\\Factory\\Factory"}},"channel_pricing":{"classes":{"model":"Sylius\\Component\\Core\\Model\\ChannelPricing","interface":"Sylius\\Component\\Core\\Model\\ChannelPricingInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ChannelPricingType"}},"channel_pricing_log_entry":{"classes":{"model":"Sylius\\Component\\Core\\Model\\ChannelPricingLogEntry","interface":"Sylius\\Component\\Core\\Model\\ChannelPricingLogEntryInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ChannelPricingLogEntryRepository","factory":"Sylius\\Component\\Core\\Factory\\ChannelPricingLogEntryFactory","form":"Sylius\\Bundle\\ResourceBundle\\Form\\Type\\DefaultResourceType"}},"shop_billing_data":{"classes":{"model":"Sylius\\Component\\Core\\Model\\ShopBillingData","interface":"Sylius\\Component\\Core\\Model\\ShopBillingDataInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShopBillingDataType"}},"channel_price_history_config":{"classes":{"model":"Sylius\\Component\\Core\\Model\\ChannelPriceHistoryConfig","interface":"Sylius\\Component\\Core\\Model\\ChannelPriceHistoryConfigInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ResourceBundle\\Form\\Type\\DefaultResourceType"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusCore\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusCore\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_core';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('prepend_doctrine_migrations', $value)) {
            $this->_usedProperties['prependDoctrineMigrations'] = true;
            $this->prependDoctrineMigrations = $value['prepend_doctrine_migrations'];
            unset($value['prepend_doctrine_migrations']);
        }

        if (array_key_exists('shipping_address_based_taxation', $value)) {
            $this->_usedProperties['shippingAddressBasedTaxation'] = true;
            $this->shippingAddressBasedTaxation = $value['shipping_address_based_taxation'];
            unset($value['shipping_address_based_taxation']);
        }

        if (array_key_exists('order_by_identifier', $value)) {
            $this->_usedProperties['orderByIdentifier'] = true;
            $this->orderByIdentifier = $value['order_by_identifier'];
            unset($value['order_by_identifier']);
        }

        if (array_key_exists('process_shipments_before_recalculating_prices', $value)) {
            $this->_usedProperties['processShipmentsBeforeRecalculatingPrices'] = true;
            $this->processShipmentsBeforeRecalculatingPrices = $value['process_shipments_before_recalculating_prices'];
            unset($value['process_shipments_before_recalculating_prices']);
        }

        if (array_key_exists('order_token_length', $value)) {
            $this->_usedProperties['orderTokenLength'] = true;
            $this->orderTokenLength = $value['order_token_length'];
            unset($value['order_token_length']);
        }

        if (array_key_exists('max_int_value', $value)) {
            $this->_usedProperties['maxIntValue'] = true;
            $this->maxIntValue = $value['max_int_value'];
            unset($value['max_int_value']);
        }

        if (array_key_exists('orders_statistics', $value)) {
            $this->_usedProperties['ordersStatistics'] = true;
            $this->ordersStatistics = new \Symfony\Config\SyliusCore\OrdersStatisticsConfig($value['orders_statistics']);
            unset($value['orders_statistics']);
        }

        if (array_key_exists('catalog_promotions', $value)) {
            $this->_usedProperties['catalogPromotions'] = true;
            $this->catalogPromotions = new \Symfony\Config\SyliusCore\CatalogPromotionsConfig($value['catalog_promotions']);
            unset($value['catalog_promotions']);
        }

        if (array_key_exists('price_history', $value)) {
            $this->_usedProperties['priceHistory'] = true;
            $this->priceHistory = new \Symfony\Config\SyliusCore\PriceHistoryConfig($value['price_history']);
            unset($value['price_history']);
        }

        if (array_key_exists('filesystem', $value)) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = new \Symfony\Config\SyliusCore\FilesystemConfig($value['filesystem']);
            unset($value['filesystem']);
        }

        if (array_key_exists('allowed_images_mime_types', $value)) {
            $this->_usedProperties['allowedImagesMimeTypes'] = true;
            $this->allowedImagesMimeTypes = $value['allowed_images_mime_types'];
            unset($value['allowed_images_mime_types']);
        }

        if (array_key_exists('checkout', $value)) {
            $this->_usedProperties['checkout'] = true;
            $this->checkout = new \Symfony\Config\SyliusCore\CheckoutConfig($value['checkout']);
            unset($value['checkout']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusCore\ResourcesConfig($value['resources']);
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
        if (isset($this->_usedProperties['prependDoctrineMigrations'])) {
            $output['prepend_doctrine_migrations'] = $this->prependDoctrineMigrations;
        }
        if (isset($this->_usedProperties['shippingAddressBasedTaxation'])) {
            $output['shipping_address_based_taxation'] = $this->shippingAddressBasedTaxation;
        }
        if (isset($this->_usedProperties['orderByIdentifier'])) {
            $output['order_by_identifier'] = $this->orderByIdentifier;
        }
        if (isset($this->_usedProperties['processShipmentsBeforeRecalculatingPrices'])) {
            $output['process_shipments_before_recalculating_prices'] = $this->processShipmentsBeforeRecalculatingPrices;
        }
        if (isset($this->_usedProperties['orderTokenLength'])) {
            $output['order_token_length'] = $this->orderTokenLength;
        }
        if (isset($this->_usedProperties['maxIntValue'])) {
            $output['max_int_value'] = $this->maxIntValue;
        }
        if (isset($this->_usedProperties['ordersStatistics'])) {
            $output['orders_statistics'] = $this->ordersStatistics->toArray();
        }
        if (isset($this->_usedProperties['catalogPromotions'])) {
            $output['catalog_promotions'] = $this->catalogPromotions->toArray();
        }
        if (isset($this->_usedProperties['priceHistory'])) {
            $output['price_history'] = $this->priceHistory->toArray();
        }
        if (isset($this->_usedProperties['filesystem'])) {
            $output['filesystem'] = $this->filesystem->toArray();
        }
        if (isset($this->_usedProperties['allowedImagesMimeTypes'])) {
            $output['allowed_images_mime_types'] = $this->allowedImagesMimeTypes;
        }
        if (isset($this->_usedProperties['checkout'])) {
            $output['checkout'] = $this->checkout->toArray();
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}
