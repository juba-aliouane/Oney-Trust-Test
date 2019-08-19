<?php

namespace App\Repository;

use App\Entity\FullAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FullAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method FullAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method FullAddress[]    findAll()
 * @method FullAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FullAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FullAddress::class);
    }

    // /**
    //  * @return FullAddress[] Returns an array of FullAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FullAddress
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
