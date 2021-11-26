<?php

namespace App\Controller;

use App\Entity\Director;
use App\Form\DirectorType;
use App\Repository\DirectorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DirectorController extends AbstractController
{
    /**
     * @Route("/director", name="directors")
     */
    public function index(DirectorRepository $repository): Response
    {        
        $directors = $repository->findAll();
        return $this->render('director/index.html.twig', [
            'directors' => $directors,
        ]);
    }

    /**
     * @route ("/director/{id}", name="affiche_director")
     */
    public function afficheActeur(Director $director): Response
    {
        return $this->render('director/afficheDirector.html.twig', [
            'director' => $director,
        ]);
    }

    /**
     * @route ("/createdirector", name="create_director")
     * @route ("/modifdirector/{id}", name="modif_director")
     */
    public function modifActeur(Director $director = null, Request $request, EntityManagerInterface $entity): Response
    {
        if ($director == null) {
            $director = new Director();
            // print_r ($director); die();
        }

        $form = $this->createForm(DirectorType::class, $director);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entity->persist($director);
            $entity->flush($director);
            return $this->redirectToRoute('directors');
        }
        return $this->render('director/modifDirector.html.twig', ['director' => $director, 'form' => $form->createView()]);
    }
}


