<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NoticeRepository")
 * @Vich\Uploadable
 */
class Notice
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
    private $img;

    /**
     * @Vich\UploadableField(mapping="notices_images", fileNameProperty="img")
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

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }
}
