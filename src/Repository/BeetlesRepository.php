<?php

namespace App\Repository;

use App\Entity\Beetles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Beetles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Beetles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Beetles[]    findAll()
 * @method Beetles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BeetlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Beetles::class);
    }

    // /**
    //  * @return Beetles[] Returns an array of Beetles objects
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
    public function findOneBySomeField($value): ?Beetles
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
