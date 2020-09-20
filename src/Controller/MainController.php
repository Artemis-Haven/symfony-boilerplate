<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            //
        ]);
    }

    /**
     * @Route("/page-one", name="page_one")
     */
    public function pageOne()
    {
        return $this->render('main/pageOne.html.twig', [
            //
        ]);
    }

    /**
     * @Route("/page-two", name="page_tow")
     */
    public function pageTwo()
    {
        return $this->render('main/pageTwo.html.twig', [
            //
        ]);
    }
}
