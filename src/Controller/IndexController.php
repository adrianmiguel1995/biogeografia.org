<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\AboutMeRepository;
use App\Repository\BubblesRepository;
use App\Repository\CurrentProjectsRepository;
use App\Repository\MediaRepository;
use App\Repository\MediaTagsRepository;
use App\Repository\NoticeRepository;
use App\Repository\UserRepository;
use App\Repository\YearDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class IndexController extends AbstractController
{

    /**
     * @Route({
     *  "es": "/",
     *  "en": "/"
     * }, name="index")
     */
    public function homeAction(AboutMeRepository $aboutMeRepository,
                          YearDataRepository $yearDataRepository,
                          NoticeRepository $noticeRepository,
                          MediaTagsRepository $mediaTagsRepository,
                          MediaRepository $mediaRepository,
                          BubblesRepository $bubblesRepository,
                          CurrentProjectsRepository $currentProjectsRepository,
                          TranslatorInterface $translator, $locales, $defaultLocale)
    {

        $aboutMe = $aboutMeRepository->findAll()[0];
        $yearData = $yearDataRepository->findAll()[0];
        $currentProjects = $currentProjectsRepository->findLast();
        $notices = $noticeRepository->findAll();
        $mediaTags = $mediaTagsRepository->findAll();
        $media = $mediaRepository->findAll();
        $bubbles = $bubblesRepository->findAll();

        if($translator->getLocale() == "es"){
            $aboutMe->setDescription($aboutMe->getDescriptionEs());
            foreach ($currentProjects as $currentProject) {
                $currentProject->setTitle($currentProject->getTitleEs());
                $currentProject->setDescription($currentProject->getDescriptionEs());
            }
            foreach ($notices as $notice) {
                $notice->setDescription($notice->getDescriptionEs());
            }
        } else if($translator->getLocale() == "en"){
            $aboutMe->setDescription($aboutMe->getDescriptionEn());
            foreach ($currentProjects as $currentProject) {
                $currentProject->setTitle($currentProject->getTitleEn());
                $currentProject->setDescription($currentProject->getDescriptionEn());
            }
            foreach ($notices as $notice) {
                $notice->setDescription($notice->getDescriptionEn());
            }
        }


        return $this->render('index.html.twig',
            [
                "aboutMe" => $aboutMe,
                "abbreviated_cv" => $aboutMe->getAbbreviatedCv(),
                "completed_cv" => $aboutMe->getCompletedCv(),
                "yearData" => $yearData,
                "currentProjects" => $currentProjects,
                "news" => $notices,
                "mediaTags" => $mediaTags,
                "media" => $media,
                "bubbles" => $bubbles
            ]);

    }
}