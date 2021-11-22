<?php

namespace App\DataFixtures;

use App\Entity\Director;
use App\Entity\Film;
use App\Entity\Genre;
use DateTimeInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $f1 = new Film();
        $g1 = new Genre();
        $d1 = new Director();
        $g1->getId(1);
        $d1->getId(1);
        $f1->setTitre("Seven")
            ->setDescription("Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.")
            ->setDuree("1H30")
            ->setDate(new \DateTime("1996-01-31"))
            ->setAffiche("https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/91/33/19255605.jpg");
        // ->setGenre($g1)
        // ->SetDirector($d1);

        $manager->persist($f1);


        $f2 = new Film();
        $g3 = new Genre();
        $d2 = new Director();
        $g1->getId(1);
        $d1->getId(1);
        $f2->setTitre("Les bronzés")
            ->setDescription("Un groupe de vingt personnes arrive extenué dans un club situé en Afrique pour passer quelques jours de repos. Et ils sont bien décidés a rentabiliser au maximum leurs vacances. C'est ainsi que nous suivrons les aventures tragi-comiques de la colérique Nathalie, de Gigi, de Jerôme le sûr-de-lui, Christiane, le malchanceux Jean-Claude, et bien-sûr celles des G.O (gentils organisateurs). Nouvelles rencontres, liaisons momentanées, petits et grands drames seront au programme...")
            ->setDuree("1H30")
            ->setDate(new \DateTime("1978-11-01"))
            ->setAffiche("https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/00/02/47/20/affiche1.jpg");
        // ->setGenre($g1)
        // ->SetDirector($d1);

        $manager->persist($f2);

        $manager->flush();
    }
}
