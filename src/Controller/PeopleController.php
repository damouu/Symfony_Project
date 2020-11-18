<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\PeopleFormType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class PeopleController
 * @package App\Controller
 * @Route ("/people", name="people_")
 */
class PeopleController extends AbstractController
{
    /**
     * @Route("/register", name="postPeople" ,methods={"GET","POST"})
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return Response
     */
    public function postPeople(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(PeopleFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /**@var People $people */
            $people = $form->getData();
            $people->setPassword($passwordEncoder->encodePassword($people, $form['plainPassword']->getData()));
            if ($form['agreeTerms']->getData() === true) {
                $entityManager->persist($people);
                $entityManager->flush();
                $this->addFlash('success', 'New data inserted into the database successfully');
                return $this->redirectToRoute('HomePage');
            }
        }
        return $this->render('people/form.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/{id}", name="getPeople", methods={"GET"})
     * @param People $people
     * @return Response
     */
    public function getPeople(People $people): Response
    {
        return $this->render('people/index.html.twig', [
            'people' => $people,
        ]);
    }

    /**
     * @Route ("/edit/{id}", name="putPeople", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
     * @param People $people
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return RedirectResponse|Response
     */
    public function putPeople(People $people, Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(PeopleFormType::class, $people);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $this->addFlash('success', 'Data successfully updated');
            return $this->redirectToRoute('people_getPeople', ['id' => $people->getId()]);
        }
        return $this->render('people/form.html.twig', [
            'formPeople' => $form->createView(),
        ]);
    }
}
