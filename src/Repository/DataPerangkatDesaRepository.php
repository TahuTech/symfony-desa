<?php

namespace App\Repository;

use App\Entity\DataPerangkatDesa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataPerangkatDesa|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataPerangkatDesa|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataPerangkatDesa[]    findAll()
 * @method DataPerangkatDesa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataPerangkatDesaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataPerangkatDesa::class);
    }

    // /**
    //  * @return DataPerangkatDesa[] Returns an array of DataPerangkatDesa objects
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
    public function findOneBySomeField($value): ?DataPerangkatDesa
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
