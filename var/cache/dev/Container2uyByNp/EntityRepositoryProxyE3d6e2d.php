<?php

namespace Container2uyByNp;

class EntityRepositoryProxyE3d6e2d extends \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'Doctrine\\ORM\\EntityRepository'."\0".'class' => ['Doctrine\\ORM\\EntityRepository', 'class', null, 530],
        "\0".'Doctrine\\ORM\\EntityRepository'."\0".'em' => ['Doctrine\\ORM\\EntityRepository', 'em', null, 530],
        "\0".'Doctrine\\ORM\\EntityRepository'."\0".'entityName' => ['Doctrine\\ORM\\EntityRepository', 'entityName', null, 530],
        'class' => ['Doctrine\\ORM\\EntityRepository', 'class', null, 530],
        'em' => ['Doctrine\\ORM\\EntityRepository', 'em', null, 530],
        'entityName' => ['Doctrine\\ORM\\EntityRepository', 'entityName', null, 530],
    ];

    public function createQueryBuilder(string $alias, ?string $indexBy = null): \Doctrine\ORM\QueryBuilder
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->createQueryBuilder(...\func_get_args());
        }

        return parent::createQueryBuilder(...\func_get_args());
    }

    public function createResultSetMappingBuilder(string $alias): \Doctrine\ORM\Query\ResultSetMappingBuilder
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->createResultSetMappingBuilder(...\func_get_args());
        }

        return parent::createResultSetMappingBuilder(...\func_get_args());
    }

    public function findAll(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->findAll(...\func_get_args());
        }

        return parent::findAll(...\func_get_args());
    }

    public function findBy(array $criteria, ?array $orderBy = null, ?int $limit = null, ?int $offset = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->findBy(...\func_get_args());
        }

        return parent::findBy(...\func_get_args());
    }

    public function count(array $criteria = []): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->count(...\func_get_args());
        }

        return parent::count(...\func_get_args());
    }

    public function __call(string $method, array $arguments): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__call(...\func_get_args());
        }

        return parent::__call(...\func_get_args());
    }

    public function getClassName(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getClassName(...\func_get_args());
        }

        return parent::getClassName(...\func_get_args());
    }

    public function add(\Sylius\Resource\Model\ResourceInterface $resource): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->add(...\func_get_args());
        } else {
            parent::add(...\func_get_args());
        }
    }

    public function remove(\Sylius\Resource\Model\ResourceInterface $resource): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->remove(...\func_get_args());
        } else {
            parent::remove(...\func_get_args());
        }
    }

    public function createPaginator(array $criteria = [], array $sorting = []): iterable
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->createPaginator(...\func_get_args());
        }

        return parent::createPaginator(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EntityRepositoryProxyE3d6e2d', false)) {
    \class_alias(__NAMESPACE__.'\\EntityRepositoryProxyE3d6e2d', 'EntityRepositoryProxyE3d6e2d', false);
}
