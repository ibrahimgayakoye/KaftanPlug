<?php

namespace Symfony\Config\SyliusUi;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigUxConfig 
{
    private $liveComponentTags;
    private $anonymousComponentTemplatePrefixes;
    private $componentDefaultTemplate;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function liveComponentTags(string $name, mixed $value): static
    {
        $this->_usedProperties['liveComponentTags'] = true;
        $this->liveComponentTags[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function anonymousComponentTemplatePrefixes(string $prefix_name, mixed $value): static
    {
        $this->_usedProperties['anonymousComponentTemplatePrefixes'] = true;
        $this->anonymousComponentTemplatePrefixes[$prefix_name] = $value;

        return $this;
    }

    /**
     * @default '@SyliusUi/components/default.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function componentDefaultTemplate($value): static
    {
        $this->_usedProperties['componentDefaultTemplate'] = true;
        $this->componentDefaultTemplate = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('live_component_tags', $value)) {
            $this->_usedProperties['liveComponentTags'] = true;
            $this->liveComponentTags = $value['live_component_tags'];
            unset($value['live_component_tags']);
        }

        if (array_key_exists('anonymous_component_template_prefixes', $value)) {
            $this->_usedProperties['anonymousComponentTemplatePrefixes'] = true;
            $this->anonymousComponentTemplatePrefixes = $value['anonymous_component_template_prefixes'];
            unset($value['anonymous_component_template_prefixes']);
        }

        if (array_key_exists('component_default_template', $value)) {
            $this->_usedProperties['componentDefaultTemplate'] = true;
            $this->componentDefaultTemplate = $value['component_default_template'];
            unset($value['component_default_template']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['liveComponentTags'])) {
            $output['live_component_tags'] = $this->liveComponentTags;
        }
        if (isset($this->_usedProperties['anonymousComponentTemplatePrefixes'])) {
            $output['anonymous_component_template_prefixes'] = $this->anonymousComponentTemplatePrefixes;
        }
        if (isset($this->_usedProperties['componentDefaultTemplate'])) {
            $output['component_default_template'] = $this->componentDefaultTemplate;
        }

        return $output;
    }

}
