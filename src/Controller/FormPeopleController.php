<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormPeopleController extends AbstractController
{
    /**
     * @Route("/form/people", name="form_people")
     */
    public function index(): Response
    {
        return $this->render('form_people/index.html.twig', [
            'controller_name' => 'FormPeopleController',
        ]);
    }
}
