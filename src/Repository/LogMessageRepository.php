<?php

namespace App\Repository;

use App\Entity\LogMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LogMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogMessage[]    findAll()
 * @method LogMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogMessage::class);
    }

    // /**
    //  * @return LogMessage[] Returns an array of LogMessage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LogMessage
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
