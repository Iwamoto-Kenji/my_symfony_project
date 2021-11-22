<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoController
{
    /**
     * @Route("/todo", name="todo") # ※1
     */
    public function index() # ※2
    {
        return new Response('hello world'); # ※3
    }
}