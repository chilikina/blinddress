<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException as NotFoundHttpException;

class ItemController extends Controller
{
    /**
     * @Route("/item/create")
     * @param Request $request
     *
     * @return Response
     * @throws \LogicException
     */
    public function createAction(Request $request): Response
    {
        $item = new Item();
        $item->setName($request->query->get('name'))
            ->setType($request->query->get('type'))
            ->setColor($request->query->get('color'))
            ->setStyle($request->query->get('style'))
            ->setTags($request->query->get('tags'))
            ->setIsBase($request->query->get('base'))
            ->setIsWashing(0)
            ->setIsDelete(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return new Response($item->getId()?:0);
    }

    /**
     * @Route("/item/show")
     * @param $itemId
     *
     * @return Item|object
     * @throws \LogicException
     * @throws NotFoundHttpException
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

        return $item;
    }
}
