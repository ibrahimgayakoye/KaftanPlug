<?php

namespace Symfony\Config\SyliusOrder\Resources;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OrderSequence'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrderSequenceConfig 
{
    private $classes;
    private $_usedProperties = [];

    /**
     * @default {"model":"Sylius\\Component\\Order\\Model\\OrderSequence","interface":"Sylius\\Component\\Order\\Model\\OrderSequenceInterface","factory":"Sylius\\Resource\\Factory\\Factory"}
    */
    public function classes(array $value = []): \Symfony\Config\SyliusOrder\Resources\OrderSequence\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusOrder\Resources\OrderSequence\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusOrder\Resources\OrderSequence\ClassesConfig($value['classes']);
            unset($value['classes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['classes'])) {
            $output['classes'] = $this->classes->toArray();
        }

        return $output;
    }

}
