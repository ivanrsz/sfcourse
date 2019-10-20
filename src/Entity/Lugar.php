<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LugarRepository")
 */
class Lugar
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkgmaps;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $operaciones;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getLinkgmaps(): ?string
    {
        return $this->linkgmaps;
    }

    public function setLinkgmaps(string $linkgmaps): self
    {
        $this->linkgmaps = $linkgmaps;

        return $this;
    }

    public function getOperaciones(): ?string
    {
        return $this->operaciones;
    }

    public function setOperaciones(string $operaciones): self
    {
        $this->operaciones = $operaciones;

        return $this;
    }
}
