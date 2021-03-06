<?php


namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumber extends AbstractController
{
    /**
     * @Route("/", name="HomePage", methods={"GET","HEAD"})
     * @return Response
     * @throws Exception
     */
    public function sayHiTest(): Response
    {
        $number = random_int(0, 365);
        $loader = $this->get('twig')->getLoader();
        if ($loader->exists('base.html.twig')) {
            echo 'the base.html.twig template exist';
        } else {
            echo 'the base.html.twig does not exists';
        }
        return $this->render('base.html.twig', ['number' => $number]);
    }

}