<?php

namespace App\Entity;

use App\Repository\CritiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="sb_critiques")
 * @ORM\Entity(repositoryClass=CritiqueRepository::class)
 */
class Critique
{
    /**
     * Critique constructor.
     */
    public function __construct()
    {
        $this->note = null;
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"comment"="entre 0 et 5"})
     */
    private $note;

    /**
     * @ORM\Column(type="text")
     */
    private $avis;

    /**
     * @var Film
     * @ORM\ManyToOne(targetEntity=Film::class, inversedBy="critiques")
     * @ORM\JoinColumn(name="id_film", nullable=false)
     */
    private $film;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getFilm(): ?Film
    {
        return $this->film;
    }

    public function setFilm(?Film $film): self
    {
        $this->film = $film;

        return $this;
    }
}
