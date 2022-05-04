<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodolistController extends AbstractController
{
    #[Route('/', name: 'app_todolist')]
    public function index(): Response
    {
        return $this->render('todolist/todo.html.twig', [
            'controller_name' => 'TodolistController',
        ]);
    }
}
