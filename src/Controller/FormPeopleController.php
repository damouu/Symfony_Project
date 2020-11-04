<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\PeopleFormType;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FormPeopleController extends AbstractController
{
    /**
     * @Route ("/form/people", name="formulaire_people_get")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
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
     * @Route ("/form/people/{id}", name="form_people_update")
     * @param People $people
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
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

    /**
     * @Route ("/people/{id}", name="get_people", methods={"get"})
     * @param People $people
     * @return Response
     */
    public function getPeopleId(People $people): Response
    {
        return $this->render('people/index.html.twig', [
            'people' => $people,
            'controller_name' => 'FormPeopleController'
        ]);
    }
}
