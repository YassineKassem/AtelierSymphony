<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 class StudentController extends AbstractController{
    #[Route("/welcome", name:'appStudent')]
    public function index(){
        return new Response("bonjour tous les étudiants");
    }

    public function index2(){
        return new Response("bonjour2");
    }
 }



?>