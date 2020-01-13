<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Place;
use App\Form\AddEventType;
use App\Form\AddPlaceType;
use App\Form\DeleteEventType;
use App\Form\EmptyType;
use App\Form\UpdateEventType;
use App\Repository\PlaceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 *
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{


    /**
     * @Route("/admin/addEvent", name="addEvent")
     */
    public function addEvent(Request $request){
        $event= new Event();
        $em = $this->getDoctrine()->getManager();
        $places = $em->getRepository((Place::class))->findAll();
        $form = $this->createForm(AddEventType::class, $event,array(
            'places' => $places
        ));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $event->setPlaceRemain($event->getPlaceMax());
            $file = $form->get('image')->getData();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {

            }

            $event->setImage($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('allEvent');
        }

        return $this->render('admin/addEvent.html.twig', [
            'form' => $form->createView(),
            'places' => $places
        ]);
    }

    /**
     * @Route("/admin/addPlace", name="addPlace")
     */
    public function addPlace(Request $request){
        $place= new Place();

        $form = $this->createForm(AddPlaceType::class, $place);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($place);
            $entityManager->flush();

            return $this->redirectToRoute('allEvent');
        }
        return $this->render('admin/addPlace.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/deleteEvent/{idEvent}", name="deleteEvent")
     */
    public function deleteEvent(Request $request, $idEvent){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($idEvent);
        $form = $this->createForm(EmptyType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($event);
            $entityManager->flush();

            return $this->redirectToRoute('allEvent');
        }
        return $this->render('admin/deleteEvent.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/admin/updateEvent/{idEvent}", name="updateEvent")
     */
    public function updateEvent(Request $request, $idEvent){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository((Event::class))->find($idEvent);
        $places = $em->getRepository((Place::class))->findAll();
        $placeSelected = $event->getPlaceNamePlace();
        $oldNbPlace = $event->getPlaceMax();
        $form = $this->createForm(UpdateEventType::class, $event,array(
            'places' => $places,
            'placeSelected' => $placeSelected,
        ));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($event->getPlaceMax()<$oldNbPlace){
                $event->setPlaceRemain($event->getPlaceRemain()-($event->getPlaceMax()-$oldNbPlace));
            }elseif($event->getPlaceMax()>$oldNbPlace){
                $event->setPlaceRemain($event->getPlaceRemain()+($event->getPlaceMax()-$oldNbPlace));
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('allEvent');
        }
        return $this->render('admin/updateEvent.html.twig', [
                'form' => $form->createView(),
            ]
        );
    }
}
