<?php

namespace App\Controller;

use App\Repository\AboutMeRepository;
use App\Repository\PublicationsRepository;
use App\Repository\SoftwareRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SoftwareController extends AbstractController
{
    /**
     * @Route("/software", name="software")
     */
    public function index(SoftwareRepository $softwareRepository)
    {
        $software = $softwareRepository->findAll();
        $names = $softwareRepository->getNames();

//        dump($names);
//        die();

        return $this->render('software.html.twig',
            [
                "software" => $software,
                "names" => $names
            ]);

    }
}