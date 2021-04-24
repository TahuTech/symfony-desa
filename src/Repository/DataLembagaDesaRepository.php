<?php

namespace App\Repository;

use App\Entity\DataLembagaDesa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataLembagaDesa|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataLembagaDesa|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataLembagaDesa[]    findAll()
 * @method DataLembagaDesa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataLembagaDesaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataLembagaDesa::class);
    }

    // /**
    //  * @return DataLembagaDesa[] Returns an array of DataLembagaDesa objects
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
    public function findOneBySomeField($value): ?DataLembagaDesa
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
