<?php

namespace Symfony\Config\SyliusAttribute\ResourcesConfig\Attribute;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TranslationConfig 
{
    private $classes;
    private $_usedProperties = [];

    /**
     * @default {"model":"Sylius\\Component\\Attribute\\Model\\AttributeTranslation","interface":"Sylius\\Component\\Attribute\\Model\\AttributeTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\AttributeBundle\\Doctrine\\ORM\\AttributeTranslationRepository","factory":"Sylius\\Resource\\Factory\\Factory"}
    */
    public function classes(array $value = []): \Symfony\Config\SyliusAttribute\ResourcesConfig\Attribute\Translation\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusAttribute\ResourcesConfig\Attribute\Translation\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusAttribute\ResourcesConfig\Attribute\Translation\ClassesConfig($value['classes']);
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
