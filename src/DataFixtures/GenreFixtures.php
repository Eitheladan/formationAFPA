<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $g1 = new Genre();
        $g1->setNom("Sience-fiction");
        $manager->persist($g1);

        $g2 = new Genre();
        $g2->setNom("Humour");
        $manager->persist($g2);

        $g3 = new Genre();
        $g3->setNom("Horreur");
        $manager->persist($g3);

        $g4 = new Genre();
        $g4->setNom("Drame");
        $manager->persist($g4);

        $manager->flush();
    }
}
