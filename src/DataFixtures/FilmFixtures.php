<?php

namespace App\DataFixtures;

use App\Entity\Actor;
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

        $d1 = new Director();
        $d1->setNom("Fisher")
        ->setPrenom("David")
        ->setImage("https://fr.web.img5.acsta.net/pictures/16/04/14/21/18/538614.jpg");
        $manager->persist($d1);

        $d2 = new Director();
        $d2->setNom("Zemeckis")
        ->setPrenom("Robert")
        ->setImage("https://fr.web.img6.acsta.net/pictures/16/11/10/15/18/427241.jpg");
        $manager->persist($d2);

        $d3 = new Director();
        $d3->setNom("Darabont")
        ->setPrenom("Franck")
        ->setImage("https://fr.web.img5.acsta.net/pictures/17/03/14/11/21/235114.jpg");
        $manager->persist($d3);

        $d4 = new Director();
        $d4->setNom("Wachowski")
        ->setPrenom("Lana")
        ->setImage("https://fr.web.img4.acsta.net/pictures/16/03/09/16/29/317444.jpg");
        $manager->persist($d4);

        $d5 = new Director();
        $d5->setNom("Lecomte")
        ->setPrenom("Patrice")
        ->setImage("https://fr.web.img6.acsta.net/pictures/17/06/06/13/58/451187.jpg");
        $manager->persist($d5);

        $f1 = new Film();

        $f1->setTitre("Seven")
            ->setDescription("Pour conclure sa carrière, l'inspecteur Somerset, vieux flic blasé, tombe à sept jours de la retraite sur un criminel peu ordinaire. John Doe, c'est ainsi que se fait appeler l'assassin, a decidé de nettoyer la societé des maux qui la rongent en commettant sept meurtres basés sur les sept pechés capitaux: la gourmandise, l'avarice, la paresse, l'orgueil, la luxure, l'envie et la colère.")
            ->setDuree("1H30")
            ->setDate(new \DateTime("1996-01-31"))            
            ->setDirector($d3)
            ->setGenre($g3);
            
        $manager->persist($f1);

        $f2 = new Film();        
        $f2->setTitre("Les bronzés")
            ->setDescription("Un groupe de vingt personnes arrive extenué dans un club situé en Afrique pour passer quelques jours de repos. Et ils sont bien décidés a rentabiliser au maximum leurs vacances. C'est ainsi que nous suivrons les aventures tragi-comiques de la colérique Nathalie, de Gigi, de Jerôme le sûr-de-lui, Christiane, le malchanceux Jean-Claude, et bien-sûr celles des G.O (gentils organisateurs). Nouvelles rencontres, liaisons momentanées, petits et grands drames seront au programme...")
            ->setDuree("1H30")
            ->setDate(new \DateTime("1978-11-01"))            
            ->setDirector($d5)
            ->setGenre($g2);
            
        $manager->persist($f2);

        $f3 = new Film();
        $f3->setTitre("Matrix")
            ->setDescription("Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ? Nul ne le sait, et aucun homme n'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l'Elu, le libérateur mythique de l'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...")
            ->setDuree("2H15")
            ->setDate(new \DateTime("1999-05-24"))            
            ->setDirector($d2)
            ->setGenre($g1);

        $manager->persist($f3);

        $f4 = new Film();
        $f4->setTitre("Gladiator")
            ->setDescription("Le général romain Maximus est le plus fidèle soutien de l'empereur Marc Aurèle, qu'il a conduit de victoire en victoire avec une bravoure et un dévouement exemplaires. Jaloux du prestige de Maximus, et plus encore de l'amour que lui voue l'empereur, le fils de MarcAurèle, Commode, s'arroge brutalement le pouvoir, puis ordonne l'arrestation du général et son exécution. Maximus échappe à ses assassins mais ne peut empêcher le massacre de sa famille. Capturé par un marchand d'esclaves, il devient gladiateur et prépare sa vengeance.")
            ->setDuree("2H35")
            ->setDate(new \DateTime("2000-06-20"))            
            ->setDirector($d1)
            ->setGenre($g4);

        $manager->persist($f4);

        $f5 = new Film();
        $f5->setTitre("Braveheart")
            ->setDescription("Evocation de la vie tumultueuse de William Wallace, héros et symbole de l'indépendance écossaise, qui à la fin du XIIIe siècle affronta les troupes du roi d'Angleterre Edward I qui venaient d'envahir son pays.")
            ->setDuree("2H45")
            ->setDate(new \DateTime("1995-10-04"))           
            ->setDirector($d3)
            ->setGenre($g4);

        $manager->persist($f5);

        $a1 = new Actor();

        $a1->setNom("Hanks")
            ->setPrenom("Tom")
            ->setImage("http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQQEm8_HDtjPqgJK8zoKWC-nAgvs89gTEQrKyHcLilSEaqO-bBES20GJphMKaID")
            ->addFilm($f1)
            ->addFilm($f4);

        $manager->persist($a1);

        $a2 = new Actor();

        $a2->setNom("Morgan")
            ->setPrenom("Freeman")
            ->setImage("https://www.ecranlarge.com/media/cache/160x213/uploads/image/000/966/ogjqhopt8s1m56tvssbebepv5o1-468.jpg")
            ->addFilm($f2)
            ->addFilm($f5);

        $manager->persist($a2);

        $a3 = new Actor();

        $a3->setNom("Reeves")
            ->setPrenom("Keanu")
            ->setImage("https://fr.web.img5.acsta.net/c_310_420/pictures/17/02/06/17/01/343859.jpg")
            ->addFilm($f3)
            ->addFilm($f4);

        $manager->persist($a3);

        $a4 = new Actor();

        $a4->setNom("Fishburne")
        ->setPrenom("Laurence")
        ->setImage("https://fr.web.img2.acsta.net/pictures/17/01/31/12/28/259103.jpg")
            ->addFilm($f4);

        $manager->persist($a4);

        $a5 = new Actor();
        $a5->setNom("Pitt")
            ->setPrenom("Brad")
            ->setImage("https://fr.web.img2.acsta.net/pictures/20/02/10/10/37/1374948.jpg")
            ->addFilm($f2)
            ->addFilm($f4);
        $manager->persist($a5);

        $a6 = new Actor();
        $a6->setNom("Spacey")
            ->setPrenom("Kevin")
            ->setImage("https://fr.web.img5.acsta.net/pictures/16/01/26/16/53/576774.jpg")
            ->addFilm($f1)
            ->addFilm($f5);

        $manager->persist($a6);

        $a7 = new Actor();
        $a7->setNom("Robbins")
            ->setPrenom("Tim")
            ->setImage("https://fr.web.img3.acsta.net/pictures/19/09/04/10/55/5664718.jpg")
            ->addFilm($f3)
            ->addFilm($f4);

        $manager->persist($a7);

        $manager->flush();
    }
}
