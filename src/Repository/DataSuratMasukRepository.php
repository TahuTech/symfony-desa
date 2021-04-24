<?php

namespace App\Repository;

use App\Entity\DataSuratMasuk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataSuratMasuk|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataSuratMasuk|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataSuratMasuk[]    findAll()
 * @method DataSuratMasuk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataSuratMasukRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataSuratMasuk::class);
    }

    // /**
    //  * @return DataSuratMasuk[] Returns an array of DataSuratMasuk objects
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
    public function findOneBySomeField($value): ?DataSuratMasuk
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
