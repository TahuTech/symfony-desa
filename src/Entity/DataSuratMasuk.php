<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataSuratMasukRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataSuratMasukRepository::class)
 */
class DataSuratMasuk
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_surat_masuk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_jenis_surat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $tgl_masuk;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $perihal;

    public function getIdSuratMasuk(): ?int
    {
        return $this->id_surat_masuk;
    }

    public function getIdJenisSurat(): ?int
    {
        return $this->id_jenis_surat;
    }

    public function setIdJenisSurat(?int $id_jenis_surat): self
    {
        $this->id_jenis_surat = $id_jenis_surat;

        return $this;
    }

    public function getTglMasuk(): ?\DateTimeInterface
    {
        return $this->tgl_masuk;
    }

    public function setTglMasuk(?\DateTimeInterface $tgl_masuk): self
    {
        $this->tgl_masuk = $tgl_masuk;

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
