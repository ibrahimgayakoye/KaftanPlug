<?php

namespace Container2uyByNp;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Provider/ProvinceNamingProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Provider/ProvinceNamingProvider.php';

class ProvinceNamingProviderGhost333c086 extends \Sylius\Component\Addressing\Provider\ProvinceNamingProvider implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'provinceRepository' => [parent::class, 'provinceRepository', null, 16],
        'provinceRepository' => [parent::class, 'provinceRepository', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ProvinceNamingProviderGhost333c086', false)) {
    \class_alias(__NAMESPACE__.'\\ProvinceNamingProviderGhost333c086', 'ProvinceNamingProviderGhost333c086', false);
}
