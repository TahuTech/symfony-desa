<?php

namespace App\Repository;

use App\Entity\DataJenisLembagaDesa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataJenisLembagaDesa|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataJenisLembagaDesa|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataJenisLembagaDesa[]    findAll()
 * @method DataJenisLembagaDesa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataJenisLembagaDesaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataJenisLembagaDesa::class);
    }

    // /**
    //  * @return DataJenisLembagaDesa[] Returns an array of DataJenisLembagaDesa objects
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
    public function findOneBySomeField($value): ?DataJenisLembagaDesa
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
