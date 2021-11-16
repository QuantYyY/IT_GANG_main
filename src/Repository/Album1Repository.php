<?php

namespace App\Repository;

use App\Entity\Album1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Album1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Album1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Album1[]    findAll()
 * @method Album1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Album1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Album1::class);
    }

    // /**
    //  * @return Album1[] Returns an array of Album1 objects
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
    public function findOneBySomeField($value): ?Album1
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
