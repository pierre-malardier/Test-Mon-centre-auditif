<?php

namespace App\Entity;

use App\Repository\ProductSavRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductSavRepository::class)
 */
class ProductSav
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *      message = "Le mail'{{ value }}' n'est pas valide.")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     * pattern="/[0-9]{10}/",
     * message = "Votre numéro doit contenir 10 chiffres."
     * )
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $nomDuProduit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDeDepot;

    /**
     * @ORM\Column(type="date")
     * @Assert\GreaterThan("today")
     *      
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tranchehoraire;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getNomDuProduit(): ?string
    {
        return $this->nomDuProduit;
    }

    public function setNomDuProduit(string $nomDuProduit): self
    {
        $this->nomDuProduit = $nomDuProduit;

        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie(Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getLieuDeDepot()
    {
        return $this->lieuDeDepot;
    }

    public function setLieuDeDepot(LieuDeDepot $lieuDeDepot): self
    {
        $this->lieuDeDepot = $lieuDeDepot;

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

    public function getTranchehoraire(): ?string
    {
        return $this->tranchehoraire;
    }

    public function setTranchehoraire(string $tranchehoraire): self
    {
        $this->tranchehoraire = $tranchehoraire;

        return $this;
    }
}
