<?php

namespace App\Controller;

use App\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    /**
     * @Route("/genre", name="genre")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Genre::class);
        $genres = $repository->findAll();
        return $this->render('genre/index.html.twig', [
            'genres' => $genres,
        ]);
    }
}
