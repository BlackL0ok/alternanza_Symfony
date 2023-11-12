<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationPageController extends AbstractController
{
    /**
     * @Route("/{page}", name="presentation_page")
     * page == intern || page == company
     * @param string $page
     * @return Response
     */
    public function presentationPage(string $page): Response
    {
        return $this->render('templates/presentationPage/presentation.html.twig',["whatSite" => $page]);
    }
}
