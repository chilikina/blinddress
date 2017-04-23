<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class LookController extends BaseController
{
    /**
     * Matches /look/show
     *
     * @Route("/look/show")
     *
     * @return Response
     * @throws \InvalidArgumentException
     *
     */
    public function showAction(): Response
    {
        $items = [1, 2, 3];
        $serializer = new Serializer([new ObjectNormalizer()], [new XmlEncoder(), new JsonEncoder()]);

        $jsonContent = $serializer->serialize($items, 'json');

        return new Response($jsonContent);
    }
}
