<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use AppBundle\Entity\Annonce;

class AnnonceController extends Controller
{
    /**
     * @Get("/api/annonces")
     */
    public function getAnnoncesAction(Request $request){

        $annonces = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        if (empty($annonces)) {
            return new JsonResponse(['message' => 'not found'], Response::HTTP_NOT_FOUND);
        }

        $FormatAnnonces = [];

        foreach ($annonces as $annonce){
            $FormatAnnonces[] = [
                'id' => $annonce->getId(),
                'titre' => $annonce->getTitre(),
                'date' => $annonce->getDate(),
                'description' => $annonce->getDescription(),
                'iduser' => $annonce->getIdUser(),
                'photo' => $annonce->getPhoto(),
            ];
        }

        return new JsonResponse($FormatAnnonces);

    }

    /**
     * @Get("/api/annonce/{id}")
     */
    public function getAnnonceAction(Request $request){

        $annonce = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Annonce')
            ->find($request->get('id'));

        if (empty($annonce)) {
            return new JsonResponse(['message' => 'not found'], Response::HTTP_NOT_FOUND);
        }

        $FormatAnnonces = [
            'id' => $annonce->getId(),
            'titre' => $annonce->getTitre(),
            'date' => $annonce->getDate(),
            'description' => $annonce->getDescription(),
            'iduser' => $annonce->getIdUser(),
            'photo' => $annonce->getPhoto(),
        ];


        return new JsonResponse($FormatAnnonces);

    }


}
