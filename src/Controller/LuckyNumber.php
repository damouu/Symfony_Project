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
        $loader = $this->get('twig')->getLoader();
        if ($loader->exists('base.html.twig')) {
            echo 'does exists';
        } else {
            echo 'does not exists';
        }
        return $this->render('base.html.twig', ['number' => $number]);
    }

}