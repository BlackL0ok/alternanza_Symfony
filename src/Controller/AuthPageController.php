<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthPageController extends AbstractController{

    public function home(Request $request): Response
    {
        return $this->render("AuthPage/loginUser.html.twig");
    }
}