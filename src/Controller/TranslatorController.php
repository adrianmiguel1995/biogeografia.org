<?php

namespace App\Controller;

use App\Repository\AboutMeRepository;
use App\Repository\BubblesRepository;
use App\Repository\CurrentProjectsRepository;
use App\Repository\MediaRepository;
use App\Repository\MediaTagsRepository;
use App\Repository\NoticeRepository;
use App\Repository\PublicationsRepository;
use App\Repository\SoftwareRepository;
use App\Repository\UserRepository;
use App\Repository\YearDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TranslatorController extends AbstractController
{
    /**
     * @Route("/translate", name="translate")
     */
    public function index(Request $request)
    {

        if($request->getLocale() == "es"){
            return $this->redirect('/en/');
        }
        else{
            return $this->redirect('/es/');
        }


    }
}