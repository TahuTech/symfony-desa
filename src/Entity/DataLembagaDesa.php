<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataLembagaDesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataLembagaDesaRepository::class)
 */
class DataLembagaDesa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_lembaga;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nama_lembaga;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jenis_lembaga;

    public function getIdLembaga(): ?int
    {
        return $this->id_lembaga;
    }

    public function getNamaLembaga(): ?string
    {
        return $this->nama_lembaga;
    }

    public function setNamaLembaga(?string $nama_lembaga): self
    {
        $this->nama_lembaga = $nama_lembaga;

        return $this;
    }

    public function getJenisLembaga(): ?string
    {
        return $this->jenis_lembaga;
    }

    public function setJenisLembaga(?string $jenis_lembaga): self
    {
        $this->jenis_lembaga = $jenis_lembaga;

        return $this;
    }
}
