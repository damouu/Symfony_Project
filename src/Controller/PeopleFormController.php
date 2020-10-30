<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeopleFormController extends AbstractController
{
    /**
     * @Route("/people/form", name="people_form")
     */
    public function index(): Response
    {
        return $this->render('people_form/index.html.twig', [
            'controller_name' => 'PeopleFormController',
        ]);
    }
}
