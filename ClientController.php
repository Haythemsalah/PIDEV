<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/client", name="client")
     */
    public function index(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    /**
     * @param ClientRepository $repository
     * @return Response
     * @Route("/AfficheClient",name="AfficheClient")
     */
    public function Affiche(ClientRepository $repository)
    {
        // $repo=$this->getDoctrine()->getRepository(Client::class);

        $client = $repository->findAll();
        return $this->render('client/Affiche.html.twig',
            ['Client' => $client]);
    }

    /**
     * @Route("/Supp/{id}",name="d")
     */
    function Delete($id, ClientRepository $repository)
    {
        $Client = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($Client);
        $em->flush();
        return $this->redirectToRoute('AfficheClient');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/Add",name="add")
     */

    function Add(Request $request)
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        //$form->add('ajouter',SubmitType::class);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            return $this->redirectToRoute('AfficheClient');
        }
        return $this->render('client/Add.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route ("/Update/{id}",name="update")
     */
    function Update(ClientRepository $repository,$id, Request $request)
    {
         $client=$repository->find($id);
         $form=$this->createForm(ClientType::class,$client);
         $form->add('Update',SubmitType::class);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid())
         {
             $em=$this->getDoctrine()->getManager();
             $em->flush();
             return $this->redirectToRoute('AfficheClient');
         }
         return $this->render('client/Update.html.twig',
         [
             'f'=>$form->createView()
         ]);
    }
}

