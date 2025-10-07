<?php

namespace Container2uyByNp;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

class XliffFileLoaderGhost9372c86 extends \Symfony\Component\Translation\Loader\XliffFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('XliffFileLoaderGhost9372c86', false)) {
    \class_alias(__NAMESPACE__.'\\XliffFileLoaderGhost9372c86', 'XliffFileLoaderGhost9372c86', false);
}
