<?php

declare(strict_types=1);

namespace AppBundle\Service;


use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class UserService extends AbstractService
{
    /**
     * UserService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $repository = $entityManager->getRepository(User::class);
        parent::__construct($entityManager, $repository);
    }

    /**
     * @param User $user
     */
    public function save(User $user)
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    /**
     * @param User $user
     * @param User $newUser
     * @return User
     */
    public function update(User $user, User $newUser)
    {
        $user->setEmail($newUser->getEmail());
        $user->setPassword($newUser->getPassword());
        $this->save($user);

        return $user;
    }
}
