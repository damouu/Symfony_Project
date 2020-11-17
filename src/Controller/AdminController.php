<?php

namespace App\Controller;

use App\Repository\PeopleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * List all the users
     * @Route("/users", name="users", methods={"GET","OPTIONS"})
     * @param PeopleRepository $peopleRepository
     * @return Response
     */
    public function listUsers(PeopleRepository $peopleRepository)
    {
        return $this->render("admin/index.html.twig", [
            'controller_name' => 'AdminController',
            'users' => $peopleRepository->findAll()
        ]);
    }
}
