<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BraveElephantController extends AbstractController
{
    #[Route('/brave/elephant', name: 'app_brave_elephant')]
    public function index(): Response
    {
        return $this->render('brave_elephant/index.html.twig', [
            'controller_name' => 'BraveElephantController',
        ]);
    }
}
