<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 15/07/2018
 * Time: 01:06
 */

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;

use AppBundle\Entity\User;

class UserController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/users")
     */
    public function getUsersAction(Request $request)
    {

        $users = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:User')
            ->findAll();

        if (empty($users)) {
            return new JsonResponse(['message' => 'not found'], Response::HTTP_NOT_FOUND);
        }

        return $users;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/user/{id}")
     */
    public function getUserAction(Request $request)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($request->get('id'));

        if (!$user) {
            throw $this->createNotFoundException();
        }

        return $user;
    }

}