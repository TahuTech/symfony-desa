<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataJenisLembagaDesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataJenisLembagaDesaRepository::class)
 */
class DataJenisLembagaDesa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_lembaga;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nama_lembaga;

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
}
