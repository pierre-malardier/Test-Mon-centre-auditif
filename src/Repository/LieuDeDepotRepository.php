<?php

namespace App\Repository;

use App\Entity\LieuDeDepot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LieuDeDepot|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuDeDepot|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuDeDepot[]    findAll()
 * @method LieuDeDepot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuDeDepotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuDeDepot::class);
    }

    // /**
    //  * @return LieuDeDepot[] Returns an array of LieuDeDepot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LieuDeDepot
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
