<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Entity\DestinationCategory;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DestinationsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(EntityManagerInterface $entityManager)
    {
        $destinationCategories=$entityManager->getRepository(DestinationCategory::class)->findAll();
        return $this->render('index.html.twig',
            [
                'categories'=>$destinationCategories
            ]
        );
    }


    /**
     * @Route("/destinations", name="destinations")
     */
    public function destinations(EntityManagerInterface $em)
    {
        $latestDestinations=$em->getRepository(Destination::class)->matching(Criteria::create()->orderBy(['id'=>Criteria::DESC])->setMaxResults(4));
        $destinations=$em->getRepository(Destination::class)->findAll();
        return $this->render('destinations.html.twig',[
            'latestdestinations'=>$latestDestinations,
            'destinations'=>$destinations
        ]);
    }

    /**
     * @Route("/destinations/{slug}", name="destination")
     */
    public function vatican(EntityManagerInterface $em,$slug)
    {
        $destination=$em->getRepository(Destination::class)->findOneBy(['slug'=>$slug]);
        return $this->render('destination.html.twig',[
            'destination'=>$destination
        ]);
    }
}
