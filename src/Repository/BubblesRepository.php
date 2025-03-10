<?php

namespace App\Repository;

use App\Entity\Bubbles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Bubbles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bubbles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bubbles[]    findAll()
 * @method Bubbles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BubblesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bubbles::class);
    }

    // /**
    //  * @return Bubbles[] Returns an array of Bubbles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bubbles
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
