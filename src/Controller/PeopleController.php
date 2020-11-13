<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\PeopleFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class PeopleController extends AbstractController
{
    /**
     * @Route("/people/{id}", name="get_people")
     * @param People $people
     * @return Response
     */
    public function index(People $people): Response
    {
        return $this->render('people/index.html.twig', [
            'controller_name' => 'PeopleController',
            'people' => $people
        ]);
    }

    /**
     * @Route ("/register/people", name="register_people")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return Response
     */
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(PeopleFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /**@var People $people */
            $people = $form->getData();
            $people->setPassword($passwordEncoder->encodePassword($people, $form['plainPassword']->getData()));
            if ($form['agreeTerms']->getData() === true) {
                $people->agreeTerms();
            }
            $entityManager->persist($people);
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
