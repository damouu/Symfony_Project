<?php

namespace App\Controller;

use App\Entity\People;
use App\Repository\PeopleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeopleController extends AbstractController
{
    /**
     * @Route("/people/{age}", name="people")
     * @param People $people
     * @param PeopleRepository $peopleRepository
     * @return Response
     */
    public function index(PeopleRepository $peopleRepository): Response
    {
        $people = $peopleRepository->findByFirstName(61);
        return $this->render('people/index.html.twig', [
            'controller_name' => 'PeopleController',
            'people' => $people
        ]);
    }
}
