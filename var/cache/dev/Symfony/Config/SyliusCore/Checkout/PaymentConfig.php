<?php

namespace Symfony\Config\SyliusCore\Checkout;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PaymentConfig 
{
    private $allowedStates;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function allowedStates(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedStates'] = true;
        $this->allowedStates = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowed_states', $value)) {
            $this->_usedProperties['allowedStates'] = true;
            $this->allowedStates = $value['allowed_states'];
            unset($value['allowed_states']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowedStates'])) {
            $output['allowed_states'] = $this->allowedStates;
        }

        return $output;
    }

}
