<?php

/*
 * This file is part of the Sylius Mollie Plugin package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\MolliePlugin\Repository;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Sylius\MolliePlugin\Entity\GatewayConfigInterface;
use Sylius\MolliePlugin\Entity\MollieGatewayConfigInterface;

class MollieGatewayConfigRepository extends EntityRepository implements MollieGatewayConfigRepositoryInterface
{
    public function findAllEnabledByGateway(GatewayConfigInterface $gateway): array
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.amountLimits', 'al')
            ->addSelect('al.minimumAmount')
            ->addSelect('al.maximumAmount')
            ->where('m.enabled = true')
            ->andWhere('m.gateway = :gateway')
            ->setParameter('gateway', $gateway)
            ->orderBy('m.position', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneActiveByGatewayNameAndMethod(string $gatewayName, string $methodId): ?MollieGatewayConfigInterface
    {
        return $this->createQueryBuilder('m')
            ->innerJoin('m.gateway', 'g')
            ->where('m.enabled = true')
            ->andWhere('g.gatewayName = :gatewayName')
            ->andWhere('m.methodId = :methodId')
            ->setParameter('gatewayName', $gatewayName)
            ->setParameter('methodId', $methodId)
            ->getQuery()
            ->setMaxResults(1)
            ->getOneOrNullResult()
        ;
    }

    public function getExistingAmountLimitsById(int $id): array
    {
        return $this->createQueryBuilder('m')
            ->select('m.minimumAmount')
            ->addSelect('m.maximumAmount')
            ->where('m.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
