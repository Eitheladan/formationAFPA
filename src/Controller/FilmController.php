<?php

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
