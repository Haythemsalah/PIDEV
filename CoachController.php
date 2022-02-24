<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Form\CoachType;
use App\Repository\CoachRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CoachController extends AbstractController
{
    /**
     * @Route("/coach", name="coach")
     */
    public function index(): Response
    {
        return $this->render('coach/index.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }
    /**
     * @param CoachRepository $repository
     * @return Response
     * @Route("/AfficheCoach",name="AfficheCoach")
     */
    public function Affiche(CoachRepository $repository)
    {
        // $repo=$this->getDoctrine()->getRepository(Client::class);

        $coach = $repository->findAll();
        return $this->render('coach/AfficheCoach.html.twig',
            ['Coach' => $coach]);
    }
    /**
     * @Route("/Supprime/{id}",name="c")
     */
    function Delete($id, CoachRepository $repository)
    {
        $Coach = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($Coach);
        $em->flush();
        return $this->redirectToRoute('AfficheCoach');
    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/Addcoach",name="Addcoach")
     */
     function AddCoach (Request $request)
    {
        $coach= new Coach();
        $form=$this->createForm(CoachType::class , $coach);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
          $em=$this->getDoctrine()->getManager();
          $em->persist($coach);
          $em->flush();
          return $this->redirectToRoute('AfficheCoach');
        }
        return $this->render('coach/Addcoach.html.twig',[
            'f'=>$form->createView()
        ]);

    }

    /**
     * @Route (" /UpdateCoach/{id}",name="updatecoach")
     */
   public function Updatecoach (CoachRepository $repository,$id,Request $request)
   {
      $coach=$repository->find($id);
      $form=$this->createForm(CoachType::class,$coach);
      $form->add('Updatecoach',SubmitType::class);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
          $em=$this->getDoctrine()->getManager();
          $em->flush();
          return $this->redirectToRoute("AfficheCoach");

      }
      return $this->render('coach/Updatecoach.html.twig',[
          'fo'=>$form->createView()
      ]);
   }
}
