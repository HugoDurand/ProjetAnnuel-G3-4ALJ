<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    /**
     * @Route("/account", name="account")
     */
    public function indexAction(Request $request)
    {

        $user =  $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findByIduser($user->getId());
        $user = $em->getRepository('AppBundle:user')->findOneById($user->getId());


        return $this->render('AppBundle:Account:index.html.twig', array(
            'user' =>$user,
            'annonces' => $annonces,
        ));
    }

}
