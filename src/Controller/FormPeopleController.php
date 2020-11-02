<?php

namespace App\Controller;

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
     * @Route("/form/people", name="form_people")
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
            $this->addFlash('success', 'mashallah la Franca');
            return $this->redirectToRoute('HomePage');
        }
        return $this->render('form_people/index.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }
}
