<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\EditPeopleAdminType;
use App\Repository\PeopleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Security("is_granted('ROLE_ADMIN')", statusCode=403, message="Access denied, get out please.")
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * Index for testing
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * Get all peoples
     * @Route("/people", name="get_people", methods={"GET","OPTIONS"})
     * @param PeopleRepository $peopleRepository
     * @return Response
     */
    public function getPeople(PeopleRepository $peopleRepository): Response
    {
        return $this->render("admin/ListUsers.html.twig", [
            'controller_name' => 'AdminController',
            'peoples' => $peopleRepository->findAll()
        ]);
    }

    /**
     * Update people for given id
     * @Route ("/people/{id}", name="update_people")
     * @param People $people
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return RedirectResponse|Response
     */
    public function updatePeople(People $people, Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(EditPeopleAdminType::class, $people);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $this->addFlash('success', 'users role successfully updated');
            return $this->redirectToRoute('admin_get_people');
        }
        return $this->render('admin/form.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }

    /**
     * Get people for given.
     * @Route ("/people/{id}", name="get_people_ID", methods={"GET"})
     * @param People $people
     * @return Response
     */
    public function getIdPeople(People $people): Response
    {
        return $this->render("people/index.html.twig", [
            'people' => $people
        ]);
    }
}
