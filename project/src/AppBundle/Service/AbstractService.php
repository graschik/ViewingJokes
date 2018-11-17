<?php

declare(strict_types=1);

namespace AppBundle\Service;


use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractService
{
    protected $repository;

    protected $entityManager;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $entityManager
     * @param ObjectRepository $repository
     */
    public function __construct(EntityManagerInterface $entityManager, ObjectRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    /**
     * @param int $id
     * @return null|object
     */
    public function findOneById(int $id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param string $field
     * @param string $value
     * @return null|object
     */
    public function findOneBy(string $field, string $value)
    {
        return $this->repository->findOneBy([$field => $value]);
    }

    public function delete(Object $object)
    {
        $this->entityManager->remove($object);
        $this->entityManager->flush();
    }
}
