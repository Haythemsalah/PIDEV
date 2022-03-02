<?php

namespace App\Controller;

use App\Entity\Commandes;
use App\Form\CommandesType;
use App\Repository\CommandesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


class CommandesController extends AbstractController
{
    /**
     * @Route("/commandes", name="commandes")
     */
    public function index(): Response
    {
        return $this->render('commandes/index.html.twig', [
            'controller_name' => 'CommandesController',
        ]);
    }

    /**
     * @return Response
     * @Route("/Affiche" , name="affiche")
     */
    public function AfficheCmd()
    {
        $repository = $this->getDoctrine()->getRepository(Commandes::class);
        $commande = $repository->findAll();
        return $this->render('base-back/commandes/Affiche.html.twig', ['commande' => $commande]);
    }

    /**
     * @param $id
     * @param CommandesRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/del/{id}",name="d")
     */
    function Delete($id, CommandesRepository $repository)
    {
        $commande = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute('affiche');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/AddC",name="add")
     */
    function addcommande(Request $request)
    {
        $commande = new Commandes();
        $form = $this->createForm(CommandesType::class, $commande);
        /*$form->add('Ajouter' ,SubmitType::class);*/
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('affiche');
        }
        return $this->render('base-front/commandes/Ajout.html.twig',
            array('f' => $form->createView()));
    }

    /**
     * @Route("command/Update/{id}",name="update")
     */
    function Update(CommandesRepository $repository,$id,Request $request)
    {
        $commande = $repository->find($id);
        $form = $this->createForm(CommandesType::class, $commande);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('affiche');
        }
        return $this->render('base-front/commandes/Update.html.twig',
            array('f' => $form->createView()));

    }

}
