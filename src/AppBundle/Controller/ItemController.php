<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ItemController extends Controller
{
    /**
     * @Route("/item/create")
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function createAction()
    {
        $item = new Item();
        $item->setName('Keyboard')
            ->setType(1)
            ->setColor(2)
            ->setStyle(1)
            ->setTags('')
            ->setIsBase(1)
            ->setIsWashing(0)
            ->setIsDelete(0);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($item);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new product with id '.$item->getId());
    }

    /**
     * @Route("/item/show")
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @throws \LogicException
     */
    public function showAction($itemId)
    {
        $item = $this->getDoctrine()
            ->getRepository('AppBundle:Item')
            ->find($itemId);

        if (!$item) {
            throw $this->createNotFoundException(
                'No product found for id '.$itemId
            );
        }
    }
}
