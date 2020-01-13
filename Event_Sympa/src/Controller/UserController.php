<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\OrderA;
use App\Form\EmptyType;
use App\Form\EventQuantityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Validator\Constraints\Date;

/**
 *
 * @IsGranted("ROLE_USER")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/user/orders", name="myOrders")
     */
    public function myOrders(){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $orders = $em->getRepository(OrderA::class)->findByUser($user->getId());
        return $this->render('user/myOrders.html.twig', [
                'orders' => $orders,
            ]
        );
    }

    /**
     * @Route("/user/order/{idEvent}", name="order")
     */
    public function order(Request $request, $idEvent){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($idEvent);
        $order = new OrderA();
        $form = $this->createForm(EventQuantityType::class, $order);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $order->setAccount($user);
            $order->setDateOrder(new \DateTime('now'));
            $order->setEvent($event);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->redirectToRoute('myOrders');
        }
        return $this->render('user/order.html.twig', [
                'event' => $event,
                'form' => $form->createView(),
            ]
        );
    }
}
