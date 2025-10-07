<?php

namespace Symfony\Config\SyliusShop\OrderPay;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AfterPayRouteParametersConfig 
{
    private $hash;
    private $_usedProperties = [];

    /**
     * @default 'paymentRequest.getHash()'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hash($value): static
    {
        $this->_usedProperties['hash'] = true;
        $this->hash = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('hash', $value)) {
            $this->_usedProperties['hash'] = true;
            $this->hash = $value['hash'];
            unset($value['hash']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hash'])) {
            $output['hash'] = $this->hash;
        }

        return $output;
    }

}
