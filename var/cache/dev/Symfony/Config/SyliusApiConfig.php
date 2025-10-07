<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusApi'.\DIRECTORY_SEPARATOR.'FilterEagerLoadingExtensionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusApiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabled;
    private $orderStatesToFilterOut;
    private $operationsToRemove;
    private $defaultImageFilter;
    private $filterEagerLoadingExtension;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function orderStatesToFilterOut(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['orderStatesToFilterOut'] = true;
        $this->orderStatesToFilterOut = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function operationsToRemove(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['operationsToRemove'] = true;
        $this->operationsToRemove = $value;

        return $this;
    }

    /**
     * @default 'sylius_original'
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function defaultImageFilter(mixed $value = 'sylius_original'): static
    {
        $this->_usedProperties['defaultImageFilter'] = true;
        $this->defaultImageFilter = $value;

        return $this;
    }

    /**
     * @default {"restricted_resources":[]}
    */
    public function filterEagerLoadingExtension(array $value = []): \Symfony\Config\SyliusApi\FilterEagerLoadingExtensionConfig
    {
        if (null === $this->filterEagerLoadingExtension) {
            $this->_usedProperties['filterEagerLoadingExtension'] = true;
            $this->filterEagerLoadingExtension = new \Symfony\Config\SyliusApi\FilterEagerLoadingExtensionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filterEagerLoadingExtension()" has already been initialized. You cannot pass values the second time you call filterEagerLoadingExtension().');
        }

        return $this->filterEagerLoadingExtension;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_api';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('order_states_to_filter_out', $value)) {
            $this->_usedProperties['orderStatesToFilterOut'] = true;
            $this->orderStatesToFilterOut = $value['order_states_to_filter_out'];
            unset($value['order_states_to_filter_out']);
        }

        if (array_key_exists('operations_to_remove', $value)) {
            $this->_usedProperties['operationsToRemove'] = true;
            $this->operationsToRemove = $value['operations_to_remove'];
            unset($value['operations_to_remove']);
        }

        if (array_key_exists('default_image_filter', $value)) {
            $this->_usedProperties['defaultImageFilter'] = true;
            $this->defaultImageFilter = $value['default_image_filter'];
            unset($value['default_image_filter']);
        }

        if (array_key_exists('filter_eager_loading_extension', $value)) {
            $this->_usedProperties['filterEagerLoadingExtension'] = true;
            $this->filterEagerLoadingExtension = new \Symfony\Config\SyliusApi\FilterEagerLoadingExtensionConfig($value['filter_eager_loading_extension']);
            unset($value['filter_eager_loading_extension']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['orderStatesToFilterOut'])) {
            $output['order_states_to_filter_out'] = $this->orderStatesToFilterOut;
        }
        if (isset($this->_usedProperties['operationsToRemove'])) {
            $output['operations_to_remove'] = $this->operationsToRemove;
        }
        if (isset($this->_usedProperties['defaultImageFilter'])) {
            $output['default_image_filter'] = $this->defaultImageFilter;
        }
        if (isset($this->_usedProperties['filterEagerLoadingExtension'])) {
            $output['filter_eager_loading_extension'] = $this->filterEagerLoadingExtension->toArray();
        }

        return $output;
    }

}
