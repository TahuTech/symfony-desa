<?php

namespace App\Repository;

use App\Entity\DataDesa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataDesa|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataDesa|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataDesa[]    findAll()
 * @method DataDesa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataDesaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataDesa::class);
    }

    // /**
    //  * @return DataDesa[] Returns an array of DataDesa objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DataDesa
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
