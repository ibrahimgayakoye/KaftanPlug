<?php

namespace Symfony\Config\SyliusTwigExtra;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigUxConfig 
{
    private $anonymousComponentTemplatePrefixes;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function anonymousComponentTemplatePrefixes(string $prefix_name, mixed $value): static
    {
        $this->_usedProperties['anonymousComponentTemplatePrefixes'] = true;
        $this->anonymousComponentTemplatePrefixes[$prefix_name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('anonymous_component_template_prefixes', $value)) {
            $this->_usedProperties['anonymousComponentTemplatePrefixes'] = true;
            $this->anonymousComponentTemplatePrefixes = $value['anonymous_component_template_prefixes'];
            unset($value['anonymous_component_template_prefixes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['anonymousComponentTemplatePrefixes'])) {
            $output['anonymous_component_template_prefixes'] = $this->anonymousComponentTemplatePrefixes;
        }

        return $output;
    }

}
