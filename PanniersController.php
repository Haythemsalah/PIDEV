<?php


namespace App\Controller;

use App\Entity\Panniers;
use App\Form\PanniersType;
use App\Repository\PanniersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanniersController extends AbstractController
{
    /**
     * @Route("/panniers", name="panniers")
     */
    public function index(): Response
    {
        return $this->render('panniers/index.html.twig', [
            'controller_name' => 'PanniersController',
        ]);
    }

    /**
     * @return Response
     * @Route("/Affp",name="affichee")
     */
    public  function AfficheP()
    {
        $repository=$this->getDoctrine()->getRepository(Panniers::class);
        $pannier= $repository->findAll();
        return $this->render('base-back/panniers/AfficheP.html.twig' , ['pannier' => $pannier]);
    }

    /**
     * @param $id
     * @param PanniersRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/delP/{id}",name="dd")
     */
    function Supprimer($id,PanniersRepository $repository){
        $pannier=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($pannier);
        $em->flush();
        return $this->redirectToRoute('affichee');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/AddP",name="adde")
     */
    function addPannier(Request $request)
    {
        $pannier = new Panniers();
        $form = $this->createForm(PanniersType::class, $pannier);
        /*$form->add('Ajouter' ,SubmitType::class);*/
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pannier);
            $em->flush();
            return $this->redirectToRoute('affichee');
        }
        return $this->render('base-front/panniers/AjoutP.html.twig',
            array('f' => $form->createView()));

    }

    /**
     * @param PanniersRepository $repository
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("panniers/UpdateP/{id}",name="updateP")
     */
    function UpdateP(PanniersRepository $repository,$id,Request $request){
        $pannier=$repository->find($id);
        $form=$this->createForm(PanniersType::class,$pannier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('affichee');
        }
        return $this->render('base-front/panniers/UpdateP.html.twig',
            array('f'=>$form->createView()));

    }
}
