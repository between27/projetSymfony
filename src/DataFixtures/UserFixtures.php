<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setEmail('a@gmail.com');
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'demonstration'
        ));
        $manager->persist($user);

        $user2 = new User();
        $user2->setEmail('b@gmail.com');
        $user2->setPassword($this->passwordHasher->hashPassword(
            $user2,
            '123456'
        ));
        $user2->setRoles(['ROLE_ADMIN']);
        $manager->persist($user2);
        $manager->flush();
    }
}
