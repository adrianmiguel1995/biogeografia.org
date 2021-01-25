<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @Vich\Uploadable
 */
class Media
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $urlOtro;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @Vich\UploadableField(mapping="media_images", fileNameProperty="img")
     */
    private $imgFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $revista;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlNoticia;

    /**
     * @ORM\ManyToOne(targetEntity="MediaTags")
     * @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     */
    private $tag;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct()
    {
        $this->updatedAt = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlOtro()
    {
        return $this->urlOtro;
    }

    /**
     * @param mixed $urlOtro
     */
    public function setUrlOtro($urlOtro): void
    {
        $this->urlOtro = $urlOtro;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag): self
    {
        $this->tag = $tag;

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

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getRevista()
    {
        return $this->revista;
    }

    /**
     * @param mixed $revista
     */
    public function setRevista($revista): void
    {
        $this->revista = $revista;
    }

    /**
     * @return mixed
     */
    public function getUrlNoticia()
    {
        return $this->urlNoticia;
    }

    /**
     * @param mixed $urlNoticia
     */
    public function setUrlNoticia($urlNoticia): void
    {
        $this->urlNoticia = $urlNoticia;
    }





}
