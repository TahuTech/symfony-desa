<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataSuratKeluarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataSuratKeluarRepository::class)
 */
class DataSuratKeluar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $no_id_surat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_surat_keluar;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $tgl_keluar;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $perihal;

    public function getNoIdSurat(): ?int
    {
        return $this->no_id_surat;
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

    public function getTglKeluar(): ?\DateTimeInterface
    {
        return $this->tgl_keluar;
    }

    public function setTglKeluar(?\DateTimeInterface $tgl_keluar): self
    {
        $this->tgl_keluar = $tgl_keluar;

        return $this;
    }

    public function getPerihal(): ?string
    {
        return $this->perihal;
    }

    public function setPerihal(?string $perihal): self
    {
        $this->perihal = $perihal;

        return $this;
    }
}
