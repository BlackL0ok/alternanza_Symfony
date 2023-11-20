<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\LoginFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthPageController extends AbstractController{
    public function login(Request $request): Response{
        
        $formLogin = $this->createForm(LoginFormType::class);
        dd($formLogin);
        return$this->render('AuthPage/loginUser.html.twig',[
            'formLogin' => $formLogin->createView()
        ]);
    }
}