<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusAdmin'.\DIRECTORY_SEPARATOR.'NotificationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusAdmin'.\DIRECTORY_SEPARATOR.'TwigConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusAdminConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $notifications;
    private $twig;
    private $_usedProperties = [];

    /**
     * @default {"enabled":true,"hub_enabled":true,"frequency":60}
    */
    public function notifications(array $value = []): \Symfony\Config\SyliusAdmin\NotificationsConfig
    {
        if (null === $this->notifications) {
            $this->_usedProperties['notifications'] = true;
            $this->notifications = new \Symfony\Config\SyliusAdmin\NotificationsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "notifications()" has already been initialized. You cannot pass values the second time you call notifications().');
        }

        return $this->notifications;
    }

    /**
     * @default {"payment_method":{"excluded_gateways":[]}}
    */
    public function twig(array $value = []): \Symfony\Config\SyliusAdmin\TwigConfig
    {
        if (null === $this->twig) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\SyliusAdmin\TwigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }

        return $this->twig;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_admin';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('notifications', $value)) {
            $this->_usedProperties['notifications'] = true;
            $this->notifications = new \Symfony\Config\SyliusAdmin\NotificationsConfig($value['notifications']);
            unset($value['notifications']);
        }

        if (array_key_exists('twig', $value)) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\SyliusAdmin\TwigConfig($value['twig']);
            unset($value['twig']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['notifications'])) {
            $output['notifications'] = $this->notifications->toArray();
        }
        if (isset($this->_usedProperties['twig'])) {
            $output['twig'] = $this->twig->toArray();
        }

        return $output;
    }

}
