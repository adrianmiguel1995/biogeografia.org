<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\SoftwareRepository")
 * @Vich\Uploadable
 */
class Software
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public $description;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $descriptionEs;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $descriptionEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @Vich\UploadableField(mapping="software_images", fileNameProperty="img")
     */
    private $imgFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
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

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }
}
