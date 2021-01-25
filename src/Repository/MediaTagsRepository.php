<?php

namespace App\Repository;

use App\Entity\MediaTags;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MediaTags|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaTags|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaTags[]    findAll()
 * @method MediaTags[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaTagsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaTags::class);
    }

    // /**
    //  * @return MediaTags[] Returns an array of MediaTags objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MediaTags
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
