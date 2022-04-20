<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonces;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="Home_index", methods={"GET"})
     */
    public function index(): Response
    {
        $article = $this->getDoctrine()
            ->getRepository(Annonces::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            'articles' => $article,
        ]);
    }
}