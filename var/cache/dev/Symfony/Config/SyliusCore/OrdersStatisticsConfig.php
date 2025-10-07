<?php

namespace Symfony\Config\SyliusCore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OrdersStatistics'.\DIRECTORY_SEPARATOR.'IntervalsMapConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrdersStatisticsConfig 
{
    private $intervalsMap;
    private $_usedProperties = [];

    public function intervalsMap(string $type, array $value = []): \Symfony\Config\SyliusCore\OrdersStatistics\IntervalsMapConfig
    {
        if (!isset($this->intervalsMap[$type])) {
            $this->_usedProperties['intervalsMap'] = true;
            $this->intervalsMap[$type] = new \Symfony\Config\SyliusCore\OrdersStatistics\IntervalsMapConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "intervalsMap()" has already been initialized. You cannot pass values the second time you call intervalsMap().');
        }

        return $this->intervalsMap[$type];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('intervals_map', $value)) {
            $this->_usedProperties['intervalsMap'] = true;
            $this->intervalsMap = array_map(fn ($v) => new \Symfony\Config\SyliusCore\OrdersStatistics\IntervalsMapConfig($v), $value['intervals_map']);
            unset($value['intervals_map']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['intervalsMap'])) {
            $output['intervals_map'] = array_map(fn ($v) => $v->toArray(), $this->intervalsMap);
        }

        return $output;
    }

}
