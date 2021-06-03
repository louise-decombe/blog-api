<?php

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;

class PostPersister implements DataPersisterInterface {

    protected $em;

    public function __construct(EntityManagerInterface $em){

    }

    public function supports($data): bool
    {
        return $data instanceof Post;
    }

    public function persist($data)
    {
        $data->setCreatedAt(new \DateTime());
    }

    public function remove($data)
    {
        // TODO: Implement remove() method.
    }
}
