<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
/**
 * Description of my_projectController
 *
 * @author Pierre
 */
class my_projectController extends Controller {
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction() {
        $uneVariable = new \stdClass();
        $uneVariable->v1 ='Harry';
        $uneVariable->v2 ='Potter';
        return $this->render('my_projectutilisateur/index.html.twig' );
    }
      /**
     * @Route("/contact")
     * @return Response
     */
    
    public function contactAction() {
        return $this->render('my_projectutilisateur/bite.html.twig' );
        
    }
}
