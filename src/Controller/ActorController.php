<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Form\ActorType;
use App\Repository\ActorRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActorController extends AbstractController
{
    /**
     * @Route("/actors", name="actors")
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
     * @route ("/actor/{id}", name="affiche_acteur")
     */
    public function afficheActeur(Actor $actor): Response
    {
        return $this->render('actor/afficheActeur.html.twig', [
            'actor' => $actor,
        ]);
    }


    /**
     * @route ("/createactor", name="create_acteur")
     * @route ("/modifactor/{id}", name="modif_acteur")
     */
    public function modifActeur (Actor $actor=null ,Request $request, EntityManagerInterface $entity): Response
    {
        if($actor==null){
            $actor = new Actor();
            // print_r ($actor); die();
        }
        
        $form = $this->createForm(ActorType::class, $actor);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $entity->persist($actor);
            $entity->flush($actor);
            return $this->redirectToRoute('actors');
        }     
        return $this->render('actor/modifActeur.html.twig', ['actor' => $actor, 'form' => $form->createView()]);
    }
}
