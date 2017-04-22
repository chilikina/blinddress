<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ItemController extends Controller
{
    /**
     * @Route("/item/create")
     * @param Request $request
     *
     * @return Response
     * @throws \InvalidArgumentException
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @throws \LogicException
     */
    public function createAction(Request $request): Response
    {
        $item = new Item();
        if (!$request->query->get('name')) {
            throw $this->createAccessDeniedException(
                'You have no access to the api'
            );
        }

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
     * Matches /item/show/*
     *
     * @Route("/item/show/{item}", name="item", requirements={"item": "\d+"})
     * @param $item
     *
     * @return Response
     * @throws \InvalidArgumentException
     * @throws \LogicException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @internal param $itemId
     *
     */
    public function showAction($item): Response
    {
        /** @var Item $itemObject */
        $itemObject = $this->getDoctrine()
            ->getRepository('AppBundle:Item')
            ->find($item);

        if (!$itemObject) {
            throw $this->createNotFoundException(
                'No product found for id '.$item
            );
        }

        $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);

        $jsonContent = $serializer->serialize($itemObject, 'json');

        return new Response($jsonContent);
    }
}
