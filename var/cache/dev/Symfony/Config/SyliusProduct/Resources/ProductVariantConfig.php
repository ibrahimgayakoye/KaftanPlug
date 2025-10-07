<?php

namespace Symfony\Config\SyliusProduct\Resources;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProductVariant'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProductVariant'.\DIRECTORY_SEPARATOR.'TranslationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProductVariantConfig 
{
    private $classes;
    private $translation;
    private $_usedProperties = [];

    /**
     * @default {"model":"Sylius\\Component\\Product\\Model\\ProductVariant","interface":"Sylius\\Component\\Product\\Model\\ProductVariantInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductVariantRepository","factory":"Sylius\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType"}
    */
    public function classes(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductVariant\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusProduct\Resources\ProductVariant\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductVariantTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","repository":"Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductVariantTranslationRepository","factory":"Sylius\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType"}}
    */
    public function translation(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductVariant\TranslationConfig
    {
        if (null === $this->translation) {
            $this->_usedProperties['translation'] = true;
            $this->translation = new \Symfony\Config\SyliusProduct\Resources\ProductVariant\TranslationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translation()" has already been initialized. You cannot pass values the second time you call translation().');
        }

        return $this->translation;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusProduct\Resources\ProductVariant\ClassesConfig($value['classes']);
            unset($value['classes']);
        }

        if (array_key_exists('translation', $value)) {
            $this->_usedProperties['translation'] = true;
            $this->translation = new \Symfony\Config\SyliusProduct\Resources\ProductVariant\TranslationConfig($value['translation']);
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
