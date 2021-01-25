<?php

namespace App\Repository;

use App\Entity\YearData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method YearData|null find($id, $lockMode = null, $lockVersion = null)
 * @method YearData|null findOneBy(array $criteria, array $orderBy = null)
 * @method YearData[]    findAll()
 * @method YearData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YearDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YearData::class);
    }

    // /**
    //  * @return YearData[] Returns an array of YearData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('y.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?YearData
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
