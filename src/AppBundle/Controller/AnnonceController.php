<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Annonce;
use AppBundle\Form\AnnonceType;


class AnnonceController extends Controller
{





    /**
     * @Route("/annonce/details/{id}", name="ShowAnnonce")
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->findById($request->get('id'));

        $user = $em->getRepository('AppBundle:User')->findById($annonces[0]->getIdUser());

        $emailUser = $user[0]->getEmail();
        $emailNom = $user[0]->getUsername();
        $userPhoto = $user[0]->getPhoto();
        $userTel = $user[0]->getTel();

        return $this->render('AppBundle:Annonce:show.html.twig', array(
            'annonces' => $annonces,
            'emailUser' => $emailUser,
            'emailNom' => $emailNom,
            'userPhoto' => $userPhoto,
            'userTel' => $userTel,
        ));
    }








    /**
     * @Route("/annonce/add", name="AddAnnonce")
     */
    public function addAction(Request $request)
    {

        $user =  $this->getUser();

        $annonce = new Annonce();

        $form = $this->createForm(AnnonceType::class, $annonce);

        $form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-right'),
        ))->add('iduser', HiddenType::class, array(
            'data' => $user->getId(),
        ));


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $annonce->getPhoto();
            $fileName = uniqid().'test.'.$file->guessExtension();
            $file->move(
                $this->getParameter('photo_directory'),
                $fileName
            );

            $annonce->setPhoto($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirect($this->generateUrl(
                'ShowAnnonce',
                array('id' => $annonce->getId())
            ));
        }


        return $this->render('AppBundle:Annonce:new.html.twig', array(
           'form' => $form->createView(),
        ));
    }







    /**
     * @Route("/annonce/edit/{id}", name="EditAnnonce")
     */
    public function ediAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('AppBundle:Annonce')->findOneById($request->get('id'));

        $user =  $this->getUser();

        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Edit',
            'attr'  => array('class' => 'btn btn-default pull-right'),
        ))->add('iduser', HiddenType::class, array(
            'data' => $user->getId(),
        ));


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirect($this->generateUrl(
                'ShowAnnonce',
                array('id' => $annonce->getId())
            ));
        }

        if($user->getId() == $annonce->getIdUser()){

            return $this->render('AppBundle:Annonce:edit.html.twig', array(
                'annonces' => $annonce,
                'form' => $form->createView(),
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
