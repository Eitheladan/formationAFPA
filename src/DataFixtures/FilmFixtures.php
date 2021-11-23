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
        $f1->setTitre("Seven")
            ->setDescription("Pour conclure sa carrière, l'inspecteur Somerset, vieux flic blasé, tombe à sept jours de la retraite sur un criminel peu ordinaire. John Doe, c'est ainsi que se fait appeler l'assassin, a decidé de nettoyer la societé des maux qui la rongent en commettant sept meurtres basés sur les sept pechés capitaux: la gourmandise, l'avarice, la paresse, l'orgueil, la luxure, l'envie et la colère.")
            ->setDuree("1H30")
            ->setDate(new \DateTime("1996-01-31"))
            ->setAffiche("https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/91/33/19255605.jpg");
            // ->setGenre($g1->getId(1))
            // ->SetDirector($d1->getId(1));

        $manager->persist($f1);


        $f2 = new Film();        
        $f2->setTitre("Les bronzés")
            ->setDescription("Un groupe de vingt personnes arrive extenué dans un club situé en Afrique pour passer quelques jours de repos. Et ils sont bien décidés a rentabiliser au maximum leurs vacances. C'est ainsi que nous suivrons les aventures tragi-comiques de la colérique Nathalie, de Gigi, de Jerôme le sûr-de-lui, Christiane, le malchanceux Jean-Claude, et bien-sûr celles des G.O (gentils organisateurs). Nouvelles rencontres, liaisons momentanées, petits et grands drames seront au programme...")
            ->setDuree("1H30")
            ->setDate(new \DateTime("1978-11-01"))
            ->setAffiche("https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/00/02/47/20/affiche1.jpg");
            
        $manager->persist($f2);

        $f3 = new Film();
        $f3->setTitre("Matrix")
            ->setDescription("Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ? Nul ne le sait, et aucun homme n'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l'Elu, le libérateur mythique de l'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...")
            ->setDuree("2H15")
            ->setDate(new \DateTime("1999-05-24"))
            ->setAffiche("https://fr.web.img4.acsta.net/c_310_420/medias/04/34/49/043449_af.jpg");

        $manager->persist($f3);

        $f4 = new Film();
        $f4->setTitre("Gladiator")
            ->setDescription("Le général romain Maximus est le plus fidèle soutien de l'empereur Marc Aurèle, qu'il a conduit de victoire en victoire avec une bravoure et un dévouement exemplaires. Jaloux du prestige de Maximus, et plus encore de l'amour que lui voue l'empereur, le fils de MarcAurèle, Commode, s'arroge brutalement le pouvoir, puis ordonne l'arrestation du général et son exécution. Maximus échappe à ses assassins mais ne peut empêcher le massacre de sa famille. Capturé par un marchand d'esclaves, il devient gladiateur et prépare sa vengeance.")
            ->setDuree("2H35")
            ->setDate(new \DateTime("2000-06-20"))
            ->setAffiche("https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/68/64/41/19254510.jpg");

        $manager->persist($f4);

        $f5 = new Film();
        $f5->setTitre("Braveheart")
            ->setDescription("Evocation de la vie tumultueuse de William Wallace, héros et symbole de l'indépendance écossaise, qui à la fin du XIIIe siècle affronta les troupes du roi d'Angleterre Edward I qui venaient d'envahir son pays.")
            ->setDuree("2H45")
            ->setDate(new \DateTime("1995-10-04"))
            ->setAffiche("https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/18/73/51/89/19209164.jpg");

        $manager->persist($f4);

        $manager->flush();
    }
}
