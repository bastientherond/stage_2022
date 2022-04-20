<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="Produits")
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="idprod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprod;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=100, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=100, nullable=false)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=false)
     */
    private $categorie;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true, options={"default"="0"})
     */
    private $prix = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="echelle", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $echelle = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="fabriquant", type="string", length=100, nullable=false)
     */
    private $fabriquant;

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

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

    public function getEchelle(): ?string
    {
        return $this->echelle;
    }

    public function setEchelle(?string $echelle): self
    {
        $this->echelle = $echelle;

        return $this;
    }

    public function getFabriquant(): ?string
    {
        return $this->fabriquant;
    }

    public function setFabriquant(string $fabriquant): self
    {
        $this->fabriquant = $fabriquant;

        return $this;
    }


}
