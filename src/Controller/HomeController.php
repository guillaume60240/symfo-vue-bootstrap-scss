<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Symfony, Bootstrap, SCSS and Vue.js',
        ]);
    }
    #[Route('/products/{id}/{slug}', name: 'home_products')]
    public function show(int $id, string $slug): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Products for category #'.$id.' - '.$slug,
        ]);
    }
}
