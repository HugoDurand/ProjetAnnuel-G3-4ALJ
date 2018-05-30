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
     * @Rest\Get("/api/annonces")
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
     * @Rest\Get("/api/annonce/{id}")
     */
    public function getAnnonceAction(Request $request){

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
     * @Rest\Post("/api/annonce")
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


}
