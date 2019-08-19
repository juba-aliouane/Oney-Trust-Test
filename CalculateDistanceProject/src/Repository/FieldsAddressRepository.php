<?php

namespace App\Repository;

use App\Entity\FieldsAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FieldsAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method FieldsAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method FieldsAddress[]    findAll()
 * @method FieldsAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FieldsAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FieldsAddress::class);
    }

    // /**
    //  * @return FieldsAddress[] Returns an array of FieldsAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FieldsAddress
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
