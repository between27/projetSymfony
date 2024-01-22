<?php

namespace App\Repository;

use App\Entity\CharacterPhotos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CharacterPhotos>
 *
 * @method CharacterPhotos|null find($id, $lockMode = null, $lockVersion = null)
 * @method CharacterPhotos|null findOneBy(array $criteria, array $orderBy = null)
 * @method CharacterPhotos[]    findAll()
 * @method CharacterPhotos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharacterPhotosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CharacterPhotos::class);
    }

//    /**
//     * @return CharacterPhotos[] Returns an array of CharacterPhotos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CharacterPhotos
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
