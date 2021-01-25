<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurrentProjectsRepository")
 * @Vich\Uploadable
 */
class CurrentProjects
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleEs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleEn;

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
    private $img;

    /**
     * @Vich\UploadableField(mapping="projects_images", fileNameProperty="img")
     */
    private $imgFile;

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitleEs()
    {
        return $this->titleEs;
    }

    /**
     * @param mixed $titleEs
     */
    public function setTitleEs($titleEs): void
    {
        $this->titleEs = $titleEs;
    }

    /**
     * @return mixed
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * @param mixed $titleEn
     */
    public function setTitleEn($titleEn): void
    {
        $this->titleEn = $titleEn;
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

    public function setImgFile(File $image = null)
    {
        $this->imgFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImgFile()
    {
        return $this->imgFile;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }
}
