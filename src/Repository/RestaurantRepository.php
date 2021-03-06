<?php

namespace App\Repository;

use App\Entity\Restaurant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Restaurant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Restaurant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Restaurant[]    findAll()
 * @method Restaurant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurant::class);
    }

    // public function ticketsForOneRestaurant($tickets)
    // {
    //     $entityManager = $this->getEntityManager();
    //     $statement = $entityManager->getConnection()->prepare(
    //         'SELECT r.id AS ID_Restaurant, t.id AS ID_Ticket
    //         FROM restaurant AS r
    //         INNER JOIN ticket AS t
    //         ON r.ticket_id = t.id
    //         WHERE t.id = :val
    //         ORDER BY r.id ASC');
    //     $statement->execute([
    //         'val' => $tickets->getId()
    //     ]);
    //     // returns an array of User objects
    //     return $statement->fetchAll();
    // }
}
