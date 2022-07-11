<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    /**
     * @Route("/",name="index")
     * 
     * @return Response
     */
    
    public function index(): Response
    {
        return new Response('Hello world!');
    }
    public function contact(): Response
    {
      return $this->render('default/contact.html.twig', [
            'title' => 'Ma page de contact',
        ]);
    }
}