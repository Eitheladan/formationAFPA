<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Actor();

        $a1->setNom("Hanks")
            ->setPrenom("Tom");

        $manager->persist($a1);

        $a2 = new Actor();

        $a2->setNom("Morgan")
            ->setPrenom("Freeman");

        $manager->persist($a2);

        $a3 = new Actor();

        $a3->setNom("Reeves")
            ->setPrenom("Keanu");

        $manager->persist($a3);

        $a4 = new Actor();

        $a4->setNom("Fishburne")
            ->setPrenom("Laurence");

        $manager->persist($a4);

        $a5 = new Actor();
        $a5->setNom("Pitt")
            ->setPrenom("Brad");
        $manager->persist($a5);

        $a6 = new Actor();
        $a6->setNom("Spacey")
            ->setPrenom("Kevin");
        $manager->persist($a6);

        $a7 = new Actor();
        $a7->setNom("Robbins")
            ->setPrenom("Tim");
        $manager->persist($a7);

        $manager->flush();
    }
}
