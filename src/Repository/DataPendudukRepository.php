<?php

namespace App\Repository;

use App\Entity\DataPenduduk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataPenduduk|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataPenduduk|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataPenduduk[]    findAll()
 * @method DataPenduduk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataPendudukRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataPenduduk::class);
    }

    // /**
    //  * @return DataPenduduk[] Returns an array of DataPenduduk objects
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
    public function findOneBySomeField($value): ?DataPenduduk
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
