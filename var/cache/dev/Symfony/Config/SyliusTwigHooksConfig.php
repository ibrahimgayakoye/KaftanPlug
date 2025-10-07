<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusTwigHooks'.\DIRECTORY_SEPARATOR.'HooksConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusTwigHooksConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enableAutoprefixing;
    private $hookNameSectionSeparator;
    private $supportedHookableTypes;
    private $hooks;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableAutoprefixing($value): static
    {
        $this->_usedProperties['enableAutoprefixing'] = true;
        $this->enableAutoprefixing = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hookNameSectionSeparator($value): static
    {
        $this->_usedProperties['hookNameSectionSeparator'] = true;
        $this->hookNameSectionSeparator = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function supportedHookableTypes(string $type, mixed $value): static
    {
        $this->_usedProperties['supportedHookableTypes'] = true;
        $this->supportedHookableTypes[$type] = $value;

        return $this;
    }

    public function hooks(string $_name, array $value = []): \Symfony\Config\SyliusTwigHooks\HooksConfig
    {
        if (!isset($this->hooks[$_name])) {
            $this->_usedProperties['hooks'] = true;
            $this->hooks[$_name] = new \Symfony\Config\SyliusTwigHooks\HooksConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "hooks()" has already been initialized. You cannot pass values the second time you call hooks().');
        }

        return $this->hooks[$_name];
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_twig_hooks';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable_autoprefixing', $value)) {
            $this->_usedProperties['enableAutoprefixing'] = true;
            $this->enableAutoprefixing = $value['enable_autoprefixing'];
            unset($value['enable_autoprefixing']);
        }

        if (array_key_exists('hook_name_section_separator', $value)) {
            $this->_usedProperties['hookNameSectionSeparator'] = true;
            $this->hookNameSectionSeparator = $value['hook_name_section_separator'];
            unset($value['hook_name_section_separator']);
        }

        if (array_key_exists('supported_hookable_types', $value)) {
            $this->_usedProperties['supportedHookableTypes'] = true;
            $this->supportedHookableTypes = $value['supported_hookable_types'];
            unset($value['supported_hookable_types']);
        }

        if (array_key_exists('hooks', $value)) {
            $this->_usedProperties['hooks'] = true;
            $this->hooks = array_map(fn ($v) => new \Symfony\Config\SyliusTwigHooks\HooksConfig($v), $value['hooks']);
            unset($value['hooks']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableAutoprefixing'])) {
            $output['enable_autoprefixing'] = $this->enableAutoprefixing;
        }
        if (isset($this->_usedProperties['hookNameSectionSeparator'])) {
            $output['hook_name_section_separator'] = $this->hookNameSectionSeparator;
        }
        if (isset($this->_usedProperties['supportedHookableTypes'])) {
            $output['supported_hookable_types'] = $this->supportedHookableTypes;
        }
        if (isset($this->_usedProperties['hooks'])) {
            $output['hooks'] = array_map(fn ($v) => $v->toArray(), $this->hooks);
        }

        return $output;
    }

}
