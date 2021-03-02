<?php

namespace Project\SubProject\Common\Interfaces\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController extends AbstractController
{
    #[Route('/health/check', name: 'health_check')]
    public function index(): Response
    {
        return $this->render('health_check/index.html.twig', [
            'controller_name' => 'HealthCheckController',
        ]);
    }
}
