<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\PeopleFormType;
use App\Repository\PeopleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeopleController extends AbstractController
{
    /**
     * @Route("/people/{id}", name="get_people")
     * @param People $people
     * @param PeopleRepository $peopleRepository
     * @return Response
     */
    public function index(PeopleRepository $peopleRepository, People $people): Response
    {
        //$people = $peopleRepository->findByFirstName(61);
        return $this->render('people/index.html.twig', [
            'controller_name' => 'PeopleController',
            'people' => $people
        ]);
    }

    /**
     * @Route ("/register/people", name="register_people")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PeopleFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $this->addFlash('success', 'new data inserted into the database');
            return $this->redirectToRoute('HomePage');
        }
        return $this->render('form_people/index.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/edit/people/{id}", name="edit_people")
     * @param People $people
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return RedirectResponse|Response
     */
    public function edit(People $people, Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(PeopleFormType::class, $people);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $this->addFlash('success', 'data successfully updated');
            return $this->redirectToRoute('get_people', ['id' => $people->getId()]);
        }
        return $this->render('form_people/index.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }
}
