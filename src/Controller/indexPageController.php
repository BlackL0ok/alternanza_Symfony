<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class indexPageController extends AbstractController
{
    /**
     * [Description for homePage]
     * @Route("/", name="home") 
     * First function who @return Response for index
     * 
     */
    public function homePage(): Response
    {
        return $this->render('homePage/index.html.twig');
    }
}