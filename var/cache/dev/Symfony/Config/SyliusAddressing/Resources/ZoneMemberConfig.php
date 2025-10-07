<?php

namespace Symfony\Config\SyliusAddressing\Resources;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ZoneMember'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ZoneMemberConfig 
{
    private $classes;
    private $_usedProperties = [];

    /**
     * @default {"model":"Sylius\\Component\\Addressing\\Model\\ZoneMember","interface":"Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\AddressingBundle\\Doctrine\\ORM\\ZoneMemberRepository","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType"}
    */
    public function classes(array $value = []): \Symfony\Config\SyliusAddressing\Resources\ZoneMember\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusAddressing\Resources\ZoneMember\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusAddressing\Resources\ZoneMember\ClassesConfig($value['classes']);
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
