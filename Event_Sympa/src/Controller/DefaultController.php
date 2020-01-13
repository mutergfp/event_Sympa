<?php

namespace App\Controller;

use App\Entity\Event;
use phpDocumentor\Reflection\DocBlock\Description;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="allEvent")
     */
    public function allEvent()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository((Event::class))->findAll();
        return $this->render('default/index.html.twig',
            ['events' => $events]
        );
    }

    /**
     * @Route("/allEvent/{idEvent}", name="detailEvent")
     */
    public function detailEvent($idEvent){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($idEvent);
        return $this->render('default/detailEvent.html.twig',
            ['event' => $event]
        );
    }
}
