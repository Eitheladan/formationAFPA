<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Repository\ActorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActorController extends AbstractController
{
    /**
     * @Route("/actor", name="actor")
     */
    public function index(ActorRepository $repository): Response
    {
        // $repository = $this->getDoctrine()->getRepository(Actor::class);
        $actors = $repository->findAll();
        return $this->render('actor/index.html.twig', [
            'actors' => $actors,
        ]);
    }
    /**
     * @route ("/actor/{id}", name="modif_actor")
     */
    public function modif(ActorRepository $repository, Actor $id){
        $actor = $repository->find($id);
        return $this->render('actor/modif.html.twig', [
            'actor' => $actor,
        ]);
    }
}
