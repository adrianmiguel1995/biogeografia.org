<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BeetlesRepository")
 * @Vich\Uploadable
 */
class Beetles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public $text;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $textEs;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $textEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $BandascaXLS;

    /**
     * @Vich\UploadableField(mapping="beetles_files", fileNameProperty="BandascaXLS")
     */
    private $BandascaXLSFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AmericaXLS;

    /**
     * @Vich\UploadableField(mapping="beetles_files", fileNameProperty="AmericaXLS")
     */
    private $AmericaXLSFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ColombiaXLS;

    /**
     * @Vich\UploadableField(mapping="beetles_files", fileNameProperty="ColombiaXLS")
     */
    private $ColombiaXLSFile;

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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getTextEs()
    {
        return $this->textEs;
    }

    /**
     * @param mixed $textEs
     */
    public function setTextEs($textEs): void
    {
        $this->textEs = $textEs;
    }

    /**
     * @return mixed
     */
    public function getTextEn()
    {
        return $this->textEn;
    }

    /**
     * @param mixed $textEn
     */
    public function setTextEn($textEn): void
    {
        $this->textEn = $textEn;
    }

    /**
     * @return mixed
     */
    public function getBandascaXLSFile()
    {
        return $this->BandascaXLSFile;
    }


    public function setBandascaXLSFile(File $file = null)
    {
        $this->BandascaXLSFile = $file;

        if ($file) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getBandascaXLS()
    {
        return $this->BandascaXLS;
    }

    public function setBandascaXLS($BandascaXLS): self
    {
        $this->BandascaXLS = $BandascaXLS;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmericaXLSFile()
    {
        return $this->AmericaXLSFile;
    }


    public function setAmericaXLSFile(File $file = null)
    {
        $this->AmericaXLSFile = $file;

        if ($file) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getAmericaXLS()
    {
        return $this->AmericaXLS;
    }

    public function setAmericaXLS($AmericaXLS): self
    {
        $this->AmericaXLS = $AmericaXLS;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getColombiaXLSFile()
    {
        return $this->ColombiaXLSFile;
    }


    public function setColombiaXLSFile(File $file = null)
    {
        $this->ColombiaXLSFile = $file;

        if ($file) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getColombiaXLS()
    {
        return $this->ColombiaXLS;
    }

    public function setColombiaXLS($ColombiaXLS): self
    {
        $this->ColombiaXLS = $ColombiaXLS;

        return $this;
    }
}
