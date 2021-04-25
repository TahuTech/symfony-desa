<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataDesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataDesaRepository::class)
 */
class DataDesa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_desa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nama_desa;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $alamat_lengkap;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $deskripsi;

    public function getIdDesa(): ?int
    {
        return $this->id_desa;
    }

    public function getNamaDesa(): ?string
    {
        return $this->nama_desa;
    }

    public function setNamaDesa(?string $nama_desa): self
    {
        $this->nama_desa = $nama_desa;

        return $this;
    }

    public function getAlamatLengkap(): ?string
    {
        return $this->alamat_lengkap;
    }

    public function setAlamatLengkap(?string $alamat_lengkap): self
    {
        $this->alamat_lengkap = $alamat_lengkap;

        return $this;
    }

    public function getDeskripsi(): ?string
    {
        return $this->deskripsi;
    }

    public function setDeskripsi(?string $deskripsi): self
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }
}
