<?php

namespace App\Controller;

use App\Entity\CurrentProjects;
use App\Entity\User;
use App\Repository\AboutMeRepository;
use App\Repository\CurrentProjectsRepository;
use App\Repository\UserRepository;
use App\Repository\YearDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function index(CurrentProjectsRepository $currentProjectsRepository,
                          TranslatorInterface $translator, $locales, $defaultLocale)
    {

        $currentProjects = $currentProjectsRepository->findLast();


        if($translator->getLocale() == "es"){
            foreach ($currentProjects as $currentProject) {
                $currentProject->setTitle($currentProject->getTitleEs());
                $currentProject->setDescription($currentProject->getDescriptionEs());
            }

        } else if($translator->getLocale() == "en"){
            foreach ($currentProjects as $currentProject) {
                $currentProject->setTitle($currentProject->getTitleEn());
                $currentProject->setDescription($currentProject->getDescriptionEn());
            }
        }

        return $this->render('projects.html.twig',
            [
                "projects" => $currentProjects
            ]);

    }
}