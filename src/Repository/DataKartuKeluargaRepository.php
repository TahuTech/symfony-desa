<?php

namespace App\Repository;

use App\Entity\DataKartuKeluarga;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataKartuKeluarga|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataKartuKeluarga|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataKartuKeluarga[]    findAll()
 * @method DataKartuKeluarga[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataKartuKeluargaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataKartuKeluarga::class);
    }

    // /**
    //  * @return DataKartuKeluarga[] Returns an array of DataKartuKeluarga objects
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
    public function findOneBySomeField($value): ?DataKartuKeluarga
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
