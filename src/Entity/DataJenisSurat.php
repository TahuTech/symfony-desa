<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataJenisSuratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataJenisSuratRepository::class)
 */
class DataJenisSurat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_jenis_surat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_surat_master;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_surat_masuk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_surat_keluar;

    public function getIdJenisSurat(): ?int
    {
        return $this->id_jenis_surat;
    }

    public function getIdSuratMaster(): ?string
    {
        return $this->id_surat_master;
    }

    public function setIdSuratMaster(?string $id_surat_master): self
    {
        $this->id_surat_master = $id_surat_master;

        return $this;
    }

    public function getIdSuratMasuk(): ?string
    {
        return $this->id_surat_masuk;
    }

    public function setIdSuratMasuk(?string $id_surat_masuk): self
    {
        $this->id_surat_masuk = $id_surat_masuk;

        return $this;
    }

    public function getIdSuratKeluar(): ?string
    {
        return $this->id_surat_keluar;
    }

    public function setIdSuratKeluar(?string $id_surat_keluar): self
    {
        $this->id_surat_keluar = $id_surat_keluar;

        return $this;
    }
}
