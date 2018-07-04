<?php

namespace ApiBundle\Controller;

use ApiBundle\Form\Type\AnnonceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;



use AppBundle\Entity\Annonce;

class AnnonceController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/annonces")
     */
    public function getAnnoncesAction(Request $request){

        $annonces = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        if (empty($annonces)) {
            return new JsonResponse(['message' => 'not found'], Response::HTTP_NOT_FOUND);
        }


        return $annonces;

    }

    /**
     * @Rest\View()
     * @Rest\Get("/annonce/{id}")
     */
    public function getAnnonceActionById(Request $request){

        $annonce = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Annonce')
            ->find($request->get('id'));

        if (empty($annonce)) {
            return new JsonResponse(['message' => 'not found'], Response::HTTP_NOT_FOUND);
        }

        return $annonce;
    }



    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/annonce")
     */
    public function postAnnonceAction(Request $request){

        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);

        $form->submit($request->request->all());

        if($form->isValid()){
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($annonce);
            $em->flush();

            return $annonce;
        } else {
            return $form;
        }


    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/annnonce/delete/{id}")
     */
    public function deleteAnnonceAction(Request $request){

        $em = $this->get('doctrine.orm.entity_manager');
        $annonce = $em
            ->getRepository('AppBundle:Annonce')
            ->find($request->get('id'));


        if ($annonce) {
            $em->remove($annonce);
            $em->flush();
        }


    }


    /**
     * @Rest\View()
     * @Rest\Put("/annonce/update/{id}")
     */
    public function putAnnonceAction(Request $request){

        $em = $this->get('doctrine.orm.entity_manager');
        $annonce = $em
            ->getRepository('AppBundle:Annonce')
            ->find($request->get('id'));


        if (empty($place)) {
            return new JsonResponse(['message' => 'Annonce not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(AnnonceType::class, $annonce);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em->merge($annonce);
            $em->flush();
            return $annonce;
        } else {
            return $form;
        }


    }



    /**
     * @Rest\View()
     * @Rest\Patch("/annonce/patch/{id}")
     */
    public function patchAnnonceAction(Request $request)
    {
        $annonce = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Annonce')
            ->find($request->get('id'));


        if (empty($annonce)) {
            return new JsonResponse(['message' => 'Annonce not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(AnnonceType::class, $annonce);

        $form->submit($request->request->all(), false);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');

            $em->merge($annonce);
            $em->flush();
            return $annonce;
        } else {
            return $form;
        }
    }




}
