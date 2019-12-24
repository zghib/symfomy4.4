<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    /**
     * @Route("/index", methods={"GET"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function index()
    {
        return new JsonResponse(['message' => 'Success']);
    }
}
