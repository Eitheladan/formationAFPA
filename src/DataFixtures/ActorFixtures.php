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
            ->setPrenom("Tom")
            ->setImage("http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQQEm8_HDtjPqgJK8zoKWC-nAgvs89gTEQrKyHcLilSEaqO-bBES20GJphMKaID");

        $manager->persist($a1);

        $a2 = new Actor();

        $a2->setNom("Morgan")
            ->setPrenom("Freeman")
            ->setImage("https://www.ecranlarge.com/media/cache/160x213/uploads/image/000/966/ogjqhopt8s1m56tvssbebepv5o1-468.jpg");

        $manager->persist($a2);

        $a3 = new Actor();

        $a3->setNom("Reeves")
            ->setPrenom("Keanu")
            ->setImage("https://fr.web.img5.acsta.net/c_310_420/pictures/17/02/06/17/01/343859.jpg");

        $manager->persist($a3);

        $a4 = new Actor();

        $a4->setNom("Fishburne")
            ->setPrenom("Laurence")
            ->setImage("https://fr.web.img2.acsta.net/pictures/17/01/31/12/28/259103.jpg");

        $manager->persist($a4);

        $a5 = new Actor();
        $a5->setNom("Pitt")
            ->setPrenom("Brad")
            ->setImage("https://fr.web.img2.acsta.net/pictures/20/02/10/10/37/1374948.jpg");
        $manager->persist($a5);

        $a6 = new Actor();
        $a6->setNom("Spacey")
            ->setPrenom("Kevin")
            ->setImage("https://fr.web.img5.acsta.net/pictures/16/01/26/16/53/576774.jpg");
        $manager->persist($a6);

        $a7 = new Actor();
        $a7->setNom("Robbins")
            ->setPrenom("Tim")
            ->setImage("https://fr.web.img3.acsta.net/pictures/19/09/04/10/55/5664718.jpg");
        $manager->persist($a7);

        $manager->flush();
    }
}
