<?php

namespace Container2uyByNp;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Repository/ChannelRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Doctrine/ORM/ChannelRepository.php';

class ChannelRepositoryGhost6f0e3ef extends \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'Doctrine\\ORM\\EntityRepository'."\0".'class' => ['Doctrine\\ORM\\EntityRepository', 'class', null, 530],
        "\0".'Doctrine\\ORM\\EntityRepository'."\0".'em' => ['Doctrine\\ORM\\EntityRepository', 'em', null, 530],
        "\0".'Doctrine\\ORM\\EntityRepository'."\0".'entityName' => ['Doctrine\\ORM\\EntityRepository', 'entityName', null, 530],
        'class' => ['Doctrine\\ORM\\EntityRepository', 'class', null, 530],
        'em' => ['Doctrine\\ORM\\EntityRepository', 'em', null, 530],
        'entityName' => ['Doctrine\\ORM\\EntityRepository', 'entityName', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ChannelRepositoryGhost6f0e3ef', false)) {
    \class_alias(__NAMESPACE__.'\\ChannelRepositoryGhost6f0e3ef', 'ChannelRepositoryGhost6f0e3ef', false);
}
