<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\EditPeopleAdminType;
use App\Repository\PeopleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        return $this->render("admin/ListUsers.html.twig", [
            'controller_name' => 'AdminController',
            'users' => $peopleRepository->findAll()
        ]);
    }

    /**
     * Edit a user's role and email address by any administrator.
     * @Route ("/edit/user/{id}", name="edit_user")
     * @param Request $request
     * @param People $people
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function editUsers(Request $request, People $people, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EditPeopleAdminType::class, $people);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $this->addFlash('success', 'data successfully updated');
            return $this->redirectToRoute('admin_users', ['id' => $people->getId()]);
        }
        return $this->render('form_people/index.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }
}
