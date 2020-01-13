<?php

namespace App\Repository;

use App\Entity\OrderA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrderA|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderA|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderA[]    findAll()
 * @method OrderA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderARepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrderA::class);
    }

    public function findByUser($idUser){
        return $this->createQueryBuilder('o')
            ->andWhere('o.account = :id')
            ->setParameter('id', $idUser)
            ->orderBy('o.dateOrder', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return OrderA[] Returns an array of OrderA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderA
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
