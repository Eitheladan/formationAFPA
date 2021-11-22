<?php

namespace App\DataFixtures;

use App\Entity\Director;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DirectorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Director();
        $a1->setNom("Fisher")
            ->setPrenom("David");
        $manager->persist($a1);

        $a2 = new Director();
        $a2->setNom("Zemechis")
            ->setPrenom("Robert");
        $manager->persist($a2);

        $a3 = new Director();
        $a3->setNom("Darabont")
            ->setPrenom("Franck");
        $manager->persist($a3);

        $a4 = new Director();
        $a4->setNom("Wachowski")
            ->setPrenom("Lana");
        $manager->persist($a4);


        $a5 = new Director();
        $a5->setNom("Smith")
            ->setPrenom("Jhonn");
        $manager->persist($a5);


        $a6 = new Director();
        $a6->setNom("Lecomte")
            ->setPrenom("Patrice");
        $manager->persist($a6);

        $manager->flush();
    }
}
