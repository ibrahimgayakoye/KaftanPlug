<?php

namespace Symfony\Config\SyliusCore\OrdersStatistics;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IntervalsMapConfig 
{
    private $interval;
    private $periodFormat;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interval($value): static
    {
        $this->_usedProperties['interval'] = true;
        $this->interval = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function periodFormat($value): static
    {
        $this->_usedProperties['periodFormat'] = true;
        $this->periodFormat = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('interval', $value)) {
            $this->_usedProperties['interval'] = true;
            $this->interval = $value['interval'];
            unset($value['interval']);
        }

        if (array_key_exists('period_format', $value)) {
            $this->_usedProperties['periodFormat'] = true;
            $this->periodFormat = $value['period_format'];
            unset($value['period_format']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['interval'])) {
            $output['interval'] = $this->interval;
        }
        if (isset($this->_usedProperties['periodFormat'])) {
            $output['period_format'] = $this->periodFormat;
        }

        return $output;
    }

}
