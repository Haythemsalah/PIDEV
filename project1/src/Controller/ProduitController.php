<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProduitType;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }


    /**
     * @Route("/afficheP", name="afficheP")
     */
    public function afficheP(): Response
    {
        //rÃ©cupÃ©rer le repository pour utiliser la fonction findAll
        $r=$this->getDoctrine()->getRepository(Produit::class);
        //faire appel Ã  la fonction findAll()
        $produits=$r->findAll();

        //ou $r=$this->getDoctrine()->getRepository(Classroom::class)->findAll();
        return $this->render('produit/afficheP.html.twig', [
            'p' => $produits,
        ]);
    }


    /**
     * @Route("/afficheproduit", name="afficheproduit")
     */
    public function afficheproduit(): Response
    {
        //rÃ©cupÃ©rer le repository pour utiliser la fonction findAll
        $r=$this->getDoctrine()->getRepository(Produit::class);
        //faire appel Ã  la fonction findAll()
        $produits=$r->findAll();

        //ou $r=$this->getDoctrine()->getRepository(Classroom::class)->findAll();
        return $this->render('produit/affichefrontP.html.twig', [
            'p' => $produits,
        ]);
    }


    /**
     * @Route("/suppP/{id}", name="suppP")
     */
    public function supp($id): Response

    {
        //récupérer le classroom à supprimer
        $produits=$this->getDoctrine()->getRepository(Produit::class)->find($id);
        //on passe à la suppression
        $em=$this->getDoctrine()->getManager();
        $em->remove($produits);
        $em->flush();

        return $this->redirectToRoute('afficheP');
    }
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/ajoutP", name="ajoutP")
     */
    public function ajoutP(Request $request): Response
    {
        //crÃ©ation du formulaire
        $p= new Produit();
        $form = $this->createForm(ProduitType::class, $p);
        //rÃ©cupÃ©rer les donnÃ©es saisies depuis la requete http
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()) {
            $file = $form->get('image')->getData();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );

            $p->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();
            return $this->redirectToRoute('afficheP');
        }

        return $this->render('produit/ajoutP.html.twig', [
            'f' => $form->createView(),
        ]);

    }


    /**
     * @Route("/modifP/{id}", name="modifP")
     */
    public function modifP(Request $request,$id): Response
    {
        //rÃ©cupÃ©rer le classroom Ã  modifier
        $produit=$this->getDoctrine()->getRepository(Produit::class)->find($id);
        //crÃ©ation du formulaire rempli
        $form=$this->createForm(ProduitType::class,$produit);
        //rÃ©cupÃ©rer les donnÃ©es saisies depuis la requete http
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('afficheP');
        }

        return $this->render('Produit/ajoutP.html.twig', [
            'f' => $form->createView(),
        ]);
    }


}