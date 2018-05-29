<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Annonce;


class AnnonceController extends Controller
{





    /**
     * @Route("/annonce/details/{id}", name="ShowAnnonce")
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findById($request->get('id'));


        return $this->render('AppBundle:Annonce:show.html.twig', array(
            'annonces' => $annonces,
        ));
    }








    /**
     * @Route("/annonce/add", name="AddAnnonce")
     */
    public function addAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $data = $request->request->all();

        $user =  $this->getUser();
        if(isset($data['submit'])){

            $annonce = new Annonce();
            $annonce->setTitre($data['titre']);
            $annonce->setDate();
            $annonce->setDescription($data['description']);
            $annonce->setIdUser($user->getId());

            $em->persist($annonce);

            $em->flush();

            return $this->redirectToRoute('ShowAnnonce', array('id' => $annonce->getId()));

        }




        return $this->render('AppBundle:Annonce:new.html.twig', array(
            // ...
        ));
    }







    /**
     * @Route("/annonce/edit/{id}", name="EditAnnonce")
     */
    public function ediAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findOneById($request->get('id'));

        $data = $request->request->all();

        $user =  $this->getUser();

        if(isset($data['submit'])){

            $annonces->setTitre($data['titre']);
            $annonces->setDate();
            $annonces->setDescription($data['description']);
            $annonces->setIdUser($user->getId());


                $em->persist($annonces);

                $em->flush();


            return $this->redirectToRoute('ShowAnnonce', array('id' => $annonces->getId()));

        }

        if($user->getId() == $annonces->getIdUser()){

            return $this->render('AppBundle:Annonce:edit.html.twig', array(
                'annonces' => $annonces,
            ));

        }else{
            return $this->redirectToRoute('homepage');
        }
    }




    /**
     * @Route("/annonce/delete/{id}", name="DeleteAnnonce")
     */
    public function deleteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findById($request->get('id'));
        $user =  $this->getUser();
        foreach ($annonces as $annonce) {

            if($user->getId() == $annonce->getIdUser()){
                $em->remove($annonce);
            }else{
                return $this->redirectToRoute('homepage');
            }
        }

        $em->flush();


        return $this->redirectToRoute('account');
    }



}
