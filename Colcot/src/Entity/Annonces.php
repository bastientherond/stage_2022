<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces
 *
 * @ORM\Table(name="Annonces", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Annonces
{
    /**
     * @var int
     *
     * @ORM\Column(name="idannonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idannonce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=false)
     */
    private $dateDeb;

    /**
     * @var bool
     *
     * @ORM\Column(name="avendre", type="boolean", nullable=false)
     */
    private $avendre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brochureFilename", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $brochurefilename = 'NULL';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    public function getIdannonce(): ?int
    {
        return $this->idannonce;
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getAvendre(): ?bool
    {
        return $this->avendre;
    }

    public function setAvendre(bool $avendre): self
    {
        $this->avendre = $avendre;

        return $this;
    }

    public function getBrochurefilename(): ?string
    {
        return $this->brochurefilename;
    }

    public function setBrochurefilename(?string $brochurefilename): self
    {
        $this->brochurefilename = $brochurefilename;

        return $this;
    }

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
