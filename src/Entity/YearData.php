<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\YearDataRepository")
 */
class YearData
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pubishedArticles;

    /**
     * @ORM\Column(type="integer")
     */
    private $hIndex;

    /**
     * @ORM\Column(type="integer")
     */
    private $citations;

    /**
     * @ORM\Column(type="integer")
     */
    private $tesis;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPubishedArticles()
    {
        return $this->pubishedArticles;
    }

    /**
     * @param mixed $pubishedArticles
     */
    public function setPubishedArticles($pubishedArticles): void
    {
        $this->pubishedArticles = $pubishedArticles;
    }

    /**
     * @return mixed
     */
    public function getHIndex()
    {
        return $this->hIndex;
    }

    /**
     * @param mixed $hIndex
     */
    public function setHIndex($hIndex): void
    {
        $this->hIndex = $hIndex;
    }

    public function getCitations(): ?int
    {
        return $this->citations;
    }

    public function setCitations(int $citations): self
    {
        $this->citations = $citations;

        return $this;
    }

    public function getTesis(): ?int
    {
        return $this->tesis;
    }

    public function setTesis(int $tesis): self
    {
        $this->tesis = $tesis;

        return $this;
    }
}
