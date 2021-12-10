<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(EmailService $emailService, Request $request)
    {
        if($request->isMethod('POST')){
            $data=$request->request->all();
            $contact = (new Contact())
                ->setName($data['name'])
                ->setEmail($data['email'])
                ->setMessage($data['message']);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();
        }
        
        // dump($contact);
        // appeler/injecter  Email service 
        $emailService->contact($contact);
        //dans Email service cree function contact

        $response= array(
            'status'=> 1,
            'msg'=> 'Your message has been succesfully sent.'
        );

        return new JsonResponse($response);
    }
}
