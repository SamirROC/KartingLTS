<?php

namespace App\Repository;

use App\Entity\Soortactiviteiten;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Soortactiviteiten|null find($id, $lockMode = null, $lockVersion = null)
 * @method Soortactiviteiten|null findOneBy(array $criteria, array $orderBy = null)
 * @method Soortactiviteiten[]    findAll()
 * @method Soortactiviteiten[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoortactiviteitenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Soortactiviteiten::class);
    }

    // /**
    //  * @return Soortactiviteiten[] Returns an array of Soortactiviteiten objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Soortactiviteiten
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
