<?php

namespace App\Repository;

use App\Entity\ProductSav;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductSav|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductSav|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductSav[]    findAll()
 * @method ProductSav[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductSavRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductSav::class);
    }

    // /**
    //  * @return ProductSav[] Returns an array of ProductSav objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProductSav
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
