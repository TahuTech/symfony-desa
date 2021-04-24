<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataKartuKeluargaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataKartuKeluargaRepository::class)
 */
class DataKartuKeluarga
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_data;

    /**
     * @ORM\Column(type="integer")
     */
    private $no_kk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nik;

    public function getIdData(): ?int
    {
        return $this->id_data;
    }

    public function getNoKk(): ?int
    {
        return $this->no_kk;
    }

    public function setNoKk(int $no_kk): self
    {
        $this->no_kk = $no_kk;

        return $this;
    }

    public function getNik(): ?int
    {
        return $this->nik;
    }

    public function setNik(?int $nik): self
    {
        $this->nik = $nik;

        return $this;
    }
}
