<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\FilmType;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController
{
    /**
     * @Route("/films", name="films")
     */
    public function index(FilmRepository $repository): Response
    {
        // $repository = $this->getDoctrine()->getRepository(Film::class);
        $films = $repository->findAll();
        
        return $this->render('film/index.html.twig', [
            'films' => $films,
        ]);
    }
    /**
     * @Route("/film/{id}", name="unFilm")
     */
    public function afficheFilm(Film $film): Response
    {               
        return $this->render('film/afficheUnFilm.html.twig', [
            'film' => $film,
        ]);
    }
    /**
     * @Route("/modiffilm/{id}", name="modifFilm")
     * @Route("/createfilm", name="createFilm")
     */
    public function createFilm(Film $film=null, Request $request, EntityManagerInterface $entity){

        if ($film == null) {
            $film = new Film();           
        }

        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);        
        if ($form->isSubmitted()) {                      
            $entity->persist($film);              
            $entity->flush($film);
        return $this->redirectToRoute('films');
        } 
        return $this->render('film/createFilm.html.twig', ['film' => $film, 'form' => $form->createView()]);
    } 
}
