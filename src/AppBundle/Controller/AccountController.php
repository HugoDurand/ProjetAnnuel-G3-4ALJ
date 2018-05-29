<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccountController extends Controller
{
    /**
     * @Route("/account", name="account")
     */
    public function indexAction()
    {

        $user =  $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findByIduser($user->getId());
        $user = $em->getRepository('AppBundle:user')->findById($user->getId());



        return $this->render('AppBundle:Account:index.html.twig', array(
            'user' =>$user,
            'annonces' => $annonces,
        ));
    }

}
