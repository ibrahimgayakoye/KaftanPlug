<?php

namespace Symfony\Config\SyliusAdmin\Twig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PaymentMethodConfig 
{
    private $excludedGateways;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function excludedGateways(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['excludedGateways'] = true;
        $this->excludedGateways = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('excluded_gateways', $value)) {
            $this->_usedProperties['excludedGateways'] = true;
            $this->excludedGateways = $value['excluded_gateways'];
            unset($value['excluded_gateways']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['excludedGateways'])) {
            $output['excluded_gateways'] = $this->excludedGateways;
        }

        return $output;
    }

}
