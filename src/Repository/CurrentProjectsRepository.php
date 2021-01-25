<?php

namespace App\Repository;

use App\Entity\CurrentProjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CurrentProjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CurrentProjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CurrentProjects[]    findAll()
 * @method CurrentProjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CurrentProjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CurrentProjects::class);
    }

    public function findLast(){

        return $this->createQueryBuilder('c')
            ->orderBy('c.updatedAt', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return CurrentProjects[] Returns an array of CurrentProjects objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CurrentProjects
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
