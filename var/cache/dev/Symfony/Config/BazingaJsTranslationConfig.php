<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BazingaJsTranslationConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $localeFallback;
    private $defaultDomain;
    private $httpCacheTime;
    private $activeLocales;
    private $activeDomains;
    private $_usedProperties = [];

    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function localeFallback($value): static
    {
        $this->_usedProperties['localeFallback'] = true;
        $this->localeFallback = $value;

        return $this;
    }

    /**
     * @default 'messages'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultDomain($value): static
    {
        $this->_usedProperties['defaultDomain'] = true;
        $this->defaultDomain = $value;

        return $this;
    }

    /**
     * @default '86400'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function httpCacheTime($value): static
    {
        $this->_usedProperties['httpCacheTime'] = true;
        $this->httpCacheTime = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function activeLocales(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['activeLocales'] = true;
        $this->activeLocales = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function activeDomains(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['activeDomains'] = true;
        $this->activeDomains = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'bazinga_js_translation';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('locale_fallback', $value)) {
            $this->_usedProperties['localeFallback'] = true;
            $this->localeFallback = $value['locale_fallback'];
            unset($value['locale_fallback']);
        }

        if (array_key_exists('default_domain', $value)) {
            $this->_usedProperties['defaultDomain'] = true;
            $this->defaultDomain = $value['default_domain'];
            unset($value['default_domain']);
        }

        if (array_key_exists('http_cache_time', $value)) {
            $this->_usedProperties['httpCacheTime'] = true;
            $this->httpCacheTime = $value['http_cache_time'];
            unset($value['http_cache_time']);
        }

        if (array_key_exists('active_locales', $value)) {
            $this->_usedProperties['activeLocales'] = true;
            $this->activeLocales = $value['active_locales'];
            unset($value['active_locales']);
        }

        if (array_key_exists('active_domains', $value)) {
            $this->_usedProperties['activeDomains'] = true;
            $this->activeDomains = $value['active_domains'];
            unset($value['active_domains']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['localeFallback'])) {
            $output['locale_fallback'] = $this->localeFallback;
        }
        if (isset($this->_usedProperties['defaultDomain'])) {
            $output['default_domain'] = $this->defaultDomain;
        }
        if (isset($this->_usedProperties['httpCacheTime'])) {
            $output['http_cache_time'] = $this->httpCacheTime;
        }
        if (isset($this->_usedProperties['activeLocales'])) {
            $output['active_locales'] = $this->activeLocales;
        }
        if (isset($this->_usedProperties['activeDomains'])) {
            $output['active_domains'] = $this->activeDomains;
        }

        return $output;
    }

}
