<?php

namespace App\Controller;

use App\Entity\CurrentProjects;
use App\Entity\Publications;
use App\Entity\User;
use App\Repository\AboutMeRepository;
use App\Repository\BeetlesRepository;
use App\Repository\CurrentProjectsRepository;
use App\Repository\PublicationsRepository;
use App\Repository\UserRepository;
use App\Repository\YearDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class BeetlesController extends AbstractController
{
    /**
     * @Route("/beetles", name="beetles")
     */
    public function index( BeetlesRepository $beetlesRepository, PublicationsRepository $publicationsRepository,
                           TranslatorInterface $translator, $locales, $defaultLocale)
    {

        $beetles = $beetlesRepository->findAll()[0];

        if($translator->getLocale() == "es"){
            $beetles->setText($beetles->getTextEs());

        } else if($translator->getLocale() == "en"){
            $beetles->setText($beetles->getTextEn());
        }

        return $this->render('beetles.html.twig',
            [
                "beetles" => $beetles
            ]);

    }


//    function listarArchivos(PublicationsRepository $publicationsRepository){
//
////        dump($path);
////        die();
//
//        // Abrimos la carpeta que nos pasan como parámetro
//        $dir = opendir("trabajospdf/");
//
//        // Leo todos los ficheros de la carpeta
//        while ($elemento = readdir($dir)){
//
//            dump($elemento);
//
//            $publication = new Publications();
//            $publication->setTitle($elemento);
//            $publication->setType(1);
//            $publication->setFile($elemento);
//
//            $publicationsRepository->persist($publication);
//
//        }
//
//        die();
//    }


    /**
     * @Route("/beetles/moreInfo", name="moreInfo")
     */
    public function moreInfo()
    {

        return $this->render('moreInfo.html.twig',
            [
            ]);

    }
}