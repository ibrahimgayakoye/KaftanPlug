<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusUi'.\DIRECTORY_SEPARATOR.'TwigUxConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusUiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $twigUx;
    private $_usedProperties = [];

    /**
     * @default {"live_component_tags":[],"anonymous_component_template_prefixes":[],"component_default_template":"@SyliusUi\/components\/default.html.twig"}
    */
    public function twigUx(array $value = []): \Symfony\Config\SyliusUi\TwigUxConfig
    {
        if (null === $this->twigUx) {
            $this->_usedProperties['twigUx'] = true;
            $this->twigUx = new \Symfony\Config\SyliusUi\TwigUxConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "twigUx()" has already been initialized. You cannot pass values the second time you call twigUx().');
        }

        return $this->twigUx;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_ui';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('twig_ux', $value)) {
            $this->_usedProperties['twigUx'] = true;
            $this->twigUx = new \Symfony\Config\SyliusUi\TwigUxConfig($value['twig_ux']);
            unset($value['twig_ux']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['twigUx'])) {
            $output['twig_ux'] = $this->twigUx->toArray();
        }

        return $output;
    }

}
