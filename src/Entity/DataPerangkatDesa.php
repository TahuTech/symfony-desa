<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataPerangkatDesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataPerangkatDesaRepository::class)
 */
class DataPerangkatDesa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_perangkat_desa;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nama_perangkat_desa;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $jabatan;

    public function getIdPerangkatDesa(): ?int
    {
        return $this->id_perangkat_des;
    }

    public function getNamaPerangkatDesa(): ?string
    {
        return $this->nama_perangkat_desa;
    }

    public function setNamaPerangkatDesa(?string $nama_perangkat_desa): self
    {
        $this->nama_perangkat_desa = $nama_perangkat_desa;

        return $this;
    }

    public function getJabatan(): ?string
    {
        return $this->jabatan;
    }

    public function setJabatan(?string $jabatan): self
    {
        $this->jabatan = $jabatan;

        return $this;
    }
}
