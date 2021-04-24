<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataJenisPotensiDesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataJenisPotensiDesaRepository::class)
 */
class DataJenisPotensiDesa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_jenis_potensi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nama_potensi;

    public function getIdJenisPotensi(): ?int
    {
        return $this->id_jenis_potensi;
    }

    public function getNamaPotensi(): ?string
    {
        return $this->nama_potensi;
    }

    public function setNamaPotensi(?string $nama_potensi): self
    {
        $this->nama_potensi = $nama_potensi;

        return $this;
    }
}
