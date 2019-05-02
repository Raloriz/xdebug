<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $hello = "Hello world";

        return $this->render('base.html.twig', [
            'hello' => $hello
        ]);

    }

}