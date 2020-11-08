<?php


namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumber extends AbstractController
{
    /**
     * @Route("/", name="HomePage", methods={"GET","HEAD"})
     * @throws Exception
     */
    public function sayHiTest()
    {
        $number = random_int(0, 365);
        $pipi = 2;
        $matrix = 2;
        $wawa = $pipi + $matrix;
        $loader = $this->get('twig')->getLoader();
        if ($loader->exists('base.html.twig')) {
            echo 'the base.html.twig template exist';
        } else {
            echo 'the base.html.twig does not exists';
        }
        return $this->render('base.html.twig', ['number' => $number]);
    }

}