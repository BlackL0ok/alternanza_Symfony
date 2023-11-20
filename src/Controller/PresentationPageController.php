<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PresentationPageController extends AbstractController
{
    
    /**
     * [Description for presentationPage]
     *
     * @param Request $request
     * change link of files du to variables
     * @return Response
     * 
     */
    public function presentationPage(Request $request): Response
    {   
        
        // $_GET parameters
        $who = $request->query->get('who');
        if($who ==="company"){
            $link = [
                "img1" => "img/img_presentation_intern/img_1.png",
                "img2" => "img/img_presentation_intern/img_2.png",
                "img3" => "img/img_presentation_intern/img_3.png",
                "alt1" => "Préparation des Candidat(e)s",
                "alt2" => "Placement en Alternance",
                "alt3" => "Suivi Continu",
                "text" => "Nous vous aidons à décrocher l'alternant(e) de vos rêves. Notre équipe dédiée offre un accompagnement personnalisé, des ressources pour optimiser votre recrutement et un suivi continu pour assurer le succès de cette collaboration."
            ];
        }
        else if($who === "intern"){
            $link = [
                "img1" => "img/img_presentation_company/img_1.png",
                "img2" => "img/img_presentation_company/img_2.png",
                "img3" => "img/img_presentation_company/img_3.png",
                "alt1" => "Mise en relation avec des candidats qualifiés",
                "alt2" => "Organisation d'entretiens",
                "alt3" => "Placement au sein de votre entreprise rapidement",
                "text" => "Nous vous aidons à décrocher le contrat d'alternance de vos rêves. Notre équipe dédiée offre un accompagnement personnalisé, des ressources pour optimiser votre candidature et un suivi continu pour assurer votre succès"
            ];
        }
        return $this->render('presentationPage\presentation.html.twig',$link);
    
    }
}