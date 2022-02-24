<?php

namespace App\Controller;

use App\Form\RegistrationType;
//use http\Client;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

//use Symfony\Component\Security\Core\Encoder
//use Symfony\Component\Security\Core\Encoder\ClientPasswordEncoderInterface;


class SecurityController extends AbstractController
{
    /**
     * @Route ("/inscription",name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager/*,
    ClientPasswordEncoderInterface $encoder*/)
    {
       $client=new Client();
     $form= $this->createForm(RegistrationType::class,$client);
     $form->handleRequest($request);
     if($form->isSubmitted()&& $form->isValid())
     {
        // $hash=$encoder->encoderPassword($client , $client->getPassword());
        // $client->setPassword($hash);
         $manager->persist($client);
         $manager->flush();
         return $this->redirectToRoute('security_login');
     }
     return $this ->render('security/registration.html.twig',[
         'form' => $form->createView()
     ]);
   }

    /**
     * @return Response
     * @Route("/connexion",name="security_login")
     */
   public function login(Request $request,AuthenticationUtils $utils): Response
   {
       $error = $utils->getLastAuthenticationError();
       $lastUsername= $utils ->getLastUsername();
       return $this->render('security/login.html.twig',[
           'error'     => $error,
           'last_username' => $lastUsername
       ]);
   }

   /**
    * @Route("/logout",name="logout")
    */
   public function logout()
   {

   }

}
