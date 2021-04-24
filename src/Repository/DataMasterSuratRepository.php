<?php

namespace App\Repository;

use App\Entity\DataMasterSurat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataMasterSurat|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataMasterSurat|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataMasterSurat[]    findAll()
 * @method DataMasterSurat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataMasterSuratRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataMasterSurat::class);
    }

    // /**
    //  * @return DataMasterSurat[] Returns an array of DataMasterSurat objects
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
    public function findOneBySomeField($value): ?DataMasterSurat
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
