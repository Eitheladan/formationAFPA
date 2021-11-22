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
            ->setPrenom("David")
            ->setImage("https://fr.web.img5.acsta.net/pictures/16/04/14/21/18/538614.jpg");
        $manager->persist($a1);

        $a2 = new Director();
        $a2->setNom("Zemeckis")
            ->setPrenom("Robert")
            ->setImage("https://fr.web.img6.acsta.net/pictures/16/11/10/15/18/427241.jpg");
        $manager->persist($a2);

        $a3 = new Director();
        $a3->setNom("Darabont")
            ->setPrenom("Franck")
            ->setImage("https://fr.web.img5.acsta.net/pictures/17/03/14/11/21/235114.jpg");
        $manager->persist($a3);

        $a4 = new Director();
        $a4->setNom("Wachowski")
            ->setPrenom("Lana")
            ->setImage("https://fr.web.img4.acsta.net/pictures/16/03/09/16/29/317444.jpg");
        $manager->persist($a4);


        $a5 = new Director();
        $a5->setNom("Smith")
            ->setPrenom("Jhonn")
            ->setImage("https://static.wikia.nocookie.net/lemondededisney/images/5/5e/Profile_-_John_Smith.png/revision/latest?cb=20200401083207&path-prefix=fr");
        $manager->persist($a5);


        $a6 = new Director();
        $a6->setNom("Lecomte")
            ->setPrenom("Patrice")
            ->setImage("https://fr.web.img6.acsta.net/pictures/17/06/06/13/58/451187.jpg");
        $manager->persist($a6);

        $manager->flush();
    }
}
