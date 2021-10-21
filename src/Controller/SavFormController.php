<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SavFormController extends AbstractController
{
    
    /**
     * @Route("/savform", name="sav_form")
    */
    public function index(): Response
    {
        return $this->render('sav_form/index.html.twig', [
            'controller_name' => 'SavFormController',
        ]);
    }
}
