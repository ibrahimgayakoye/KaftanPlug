<?php

namespace Symfony\Config\SyliusShop\OrderPay;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RetryRouteParametersConfig 
{
    private $tokenValue;
    private $_usedProperties = [];

    /**
     * @default 'order.getTokenValue()'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tokenValue($value): static
    {
        $this->_usedProperties['tokenValue'] = true;
        $this->tokenValue = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('tokenValue', $value)) {
            $this->_usedProperties['tokenValue'] = true;
            $this->tokenValue = $value['tokenValue'];
            unset($value['tokenValue']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tokenValue'])) {
            $output['tokenValue'] = $this->tokenValue;
        }

        return $output;
    }

}
