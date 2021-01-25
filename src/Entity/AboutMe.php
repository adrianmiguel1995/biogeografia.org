<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AboutMeRepository")
 * @Vich\Uploadable
 */
class AboutMe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public $description;

    /**
     * @ORM\Column(type="string", length=1200)
     */
    private $descriptionEs;

    /**
     * @ORM\Column(type="string", length=1200)
     */
    private $descriptionEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $abbreviated_cv;

    /**
     * @Vich\UploadableField(mapping="cv", fileNameProperty="abbreviated_cv")
     */
    private $abbreviated_cvFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $completed_cv;

    /**
     * @Vich\UploadableField(mapping="cv", fileNameProperty="completed_cv")
     */
    private $completed_cvFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $citations;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescriptionEs()
    {
        return $this->descriptionEs;
    }

    /**
     * @param mixed $descriptionEs
     */
    public function setDescriptionEs($descriptionEs): void
    {
        $this->descriptionEs = $descriptionEs;
    }

    /**
     * @return mixed
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * @param mixed $descriptionEn
     */
    public function setDescriptionEn($descriptionEn): void
    {
        $this->descriptionEn = $descriptionEn;
    }

    public function getAbbreviatedCv(): ?string
    {
        return $this->abbreviated_cv;
    }

    public function setAbbreviatedCv($abbreviated_cv)
    {
        $this->abbreviated_cv = $abbreviated_cv;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAbbreviatedCvFile()
    {
        return $this->abbreviated_cvFile;
    }


    public function setAbbreviatedCvFile(File $file = null)
    {
        $this->abbreviated_cvFile = $file;

        if ($file) {
            $this->updatedAt = new \DateTime('now');
        }
    }


    public function getCompletedCv()
    {
        return $this->completed_cv;
    }

    public function setCompletedCv($completed_cv)
    {
        $this->completed_cv = $completed_cv;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompletedCvFile()
    {
        return $this->completed_cvFile;
    }


    public function setCompletedCvFile(File $file = null)
    {
        $this->completed_cvFile = $file;

        if ($file) {
            $this->updatedAt = new \DateTime('now');
        }
    }



    public function getCitations(): ?string
    {
        return $this->citations;
    }

    public function setCitations(string $citations): self
    {
        $this->citations = $citations;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }


}
