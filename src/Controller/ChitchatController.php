<?php
// src/Controller/ChitchatController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


// src/Controller/ChitchatController.php

class ChitchatController extends AbstractController
{

    /**
     * @Route("/chitchat/messanger")
     */
    public function messanger()
    {
       return $this->render('chitchat/messanger.html.twig');
    }

}