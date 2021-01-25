<?php

namespace App\Controller;

use App\Repository\AboutMeRepository;
use App\Repository\PublicationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublishController extends AbstractController
{
    /**
     * @Route("/publications", name="publications")
     */
    public function index(PublicationsRepository $publicationsRepository)
    {
        $publications = $publicationsRepository->findAllGeneral();
        $publications_other = $publicationsRepository->findAllOthers();

        return $this->render('publications.html.twig',
            [
                "publications_principal" => $publications,
                "publications_other" => $publications_other,
                "count_principal" => count($publications),
                "count_other" => count($publications_other)
            ]);

    }
}