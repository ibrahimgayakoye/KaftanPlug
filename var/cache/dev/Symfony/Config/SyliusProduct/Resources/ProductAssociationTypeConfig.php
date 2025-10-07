<?php

namespace Symfony\Config\SyliusProduct\Resources;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProductAssociationType'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProductAssociationType'.\DIRECTORY_SEPARATOR.'TranslationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProductAssociationTypeConfig 
{
    private $classes;
    private $translation;
    private $_usedProperties = [];

    /**
     * @default {"model":"Sylius\\Component\\Product\\Model\\ProductAssociationType","interface":"Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Resource\\Factory\\TranslatableFactory","repository":"Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType"}
    */
    public function classes(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductAssociationType\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationType\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeTranslationRepository","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType"}}
    */
    public function translation(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductAssociationType\TranslationConfig
    {
        if (null === $this->translation) {
            $this->_usedProperties['translation'] = true;
            $this->translation = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationType\TranslationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translation()" has already been initialized. You cannot pass values the second time you call translation().');
        }

        return $this->translation;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationType\ClassesConfig($value['classes']);
            unset($value['classes']);
        }

        if (array_key_exists('translation', $value)) {
            $this->_usedProperties['translation'] = true;
            $this->translation = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationType\TranslationConfig($value['translation']);
            unset($value['translation']);
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
        if (isset($this->_usedProperties['translation'])) {
            $output['translation'] = $this->translation->toArray();
        }

        return $output;
    }

}
