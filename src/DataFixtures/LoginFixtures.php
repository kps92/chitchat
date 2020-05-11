<?php

namespace App\DataFixtures;

use App\Entity\login;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class LoginFixtures extends Fixture
{
    Private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new Login();
        // ...

        $user->setEmail('konurocks@gmail.com');
        
        $user->setPassword($this->passwordEncoder->encodePassword($user,'kps@1992'));
        
        $user->setRoles(array("path"=>"^/login$","roles"=>"IS_AUTHENTICATED_ANONYMOUSLY"));

         //$product = new Product();
         $manager->persist($user);

        $manager->flush();
    }
}
