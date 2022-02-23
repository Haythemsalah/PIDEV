<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface ;
use Symfony\Component\HttpFoundation\File\File;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Form\FormBuilderInterface;




class EvenementController extends AbstractController
{
    /**
     * @Route("/evenement", name="evenement")
     */
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    /**
     * @Route("/EvSalle", name="EvSalle")
     */
    public function EvSalle(Request $request){
        $repository=$this->getDoctrine()->getRepository(Evenement::class);
        $Evenement=$repository->findAll();

        return $this->render('evenement/AfficheEFront.html.twig',
            ['ev'=>$Evenement]);
    }
    /**
     * @Route("/afficheE", name="afficheE")
     */
    public function afficheEvenement(Request $request): Response
    {   //récuperer le repository pour utiliser la fonction findall
        $Evenement=$this->getDoctrine()->getRepository(Evenement::class)->findAll();

        return $this->render('evenement/afficheE.html.twig', [
            'e' => $Evenement
        ]);
    }

    /**
     * @Route("/ajoutE/", name="ajoutE")
     */
    public function ajoutE(Request  $request): Response
    {   //Création du formulaire
        $e=new Evenement();
        $form=$this->createForm(EvenementType::class,$e);
        //recupérer les données saisies depuis la requete http
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {   $em=$this->getDoctrine()->getManager();
            $uploadedFile = $form['Image']->getData();
            $fileName=md5(uniqid()).'.'.$uploadedFile->guessExtension();
            try {
                $uploadedFile->move(
                    $this->getParameter('Uploads_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $e->setImage($fileName);
            $em->persist($e);
            $em->flush();
            return $this->redirectToRoute('afficheE');

        }
        return $this->render('evenement/ajoutE.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/supp/{id}", name="suppE")
     */
    public function supp($id): Response
    {   //récuperer le classroom à supprimer en utilisant la fonction find($id)
        $Evenement=$this->getDoctrine()->getRepository(Evenement::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        //on passe à la supression
        $em->remove($Evenement);
        // pour que la suppression soit faite au niveau de la base de donnée
        $em->flush();
        return $this->redirectToRoute( 'afficheE');
    }

    /**
     * @Route("/modifE/{id}", name="modifE")
     */
    public function modifE(Request $request,$id)
    {
//je récupère la classe à modifier
        $Evenement=$this->getDoctrine()
            ->getRepository(Evenement::class)->find($id);
//récupération du formulaire
        $form = $this->createForm(EvenementType::class, $Evenement);
//récupérer les données saisies dans les champs
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficheE');
        }
        return $this->render("evenement/ajoutE.html.twig",
            array('f'=>$form->createView()));


    }

}
