<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request)
    {
        $form = $this->createForm(ContactFormType::class);

        $form->handleRequest($request);

    

  
       return $this->render('contact/contact.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}
