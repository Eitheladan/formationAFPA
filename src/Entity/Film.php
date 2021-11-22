<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FilmRepository::class)
 */
class Film
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duree;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=510, nullable=true)
     */
    private $affiche;

    // /**
    //  * @ORM\ManyToOne(targetEntity=genre::class)
    //  * @ORM\JoinColumn(nullable=true)
    //  */
    // private $genre;

    // /**
    //  * @ORM\ManyToOne(targetEntity=director::class)
    //  * @ORM\JoinColumn(nullable=true)
    //  */
    // private $director;

    // /**
    //  * @ORM\ManyToMany(targetEntity=actor::class, inversedBy="films_id")
    //  */
    // private $actor;

    public function __construct()
    {
        $this->actor = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAffiche(): ?string
    {
        return $this->affiche;
    }

    public function setAffiche(?string $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }

    // public function getGenre(): ?genre
    // {
    //     return $this->genre;
    // }

    // public function setGenre(?genre $genre): self
    // {
    //     $this->genre = $genre;

    //     return $this;
    // }

    // public function getDirector(): ?director
    // {
    //     return $this->director;
    // }

    // public function setDirector(?director $director): self
    // {
    //     $this->director = $director;

    //     return $this;
    // }

    // /**
    //  * @return Collection|actor[]
    //  */
    // public function getActor(): Collection
    // {
    //     return $this->actor;
    // }

    // public function addActor(actor $actor): self
    // {
    //     if (!$this->actor->contains($actor)) {
    //         $this->actor[] = $actor;
    //     }

    //     return $this;
    // }

    // public function removeActor(actor $actor): self
    // {
    //     $this->actor->removeElement($actor);

    //     return $this;
    // }
}
