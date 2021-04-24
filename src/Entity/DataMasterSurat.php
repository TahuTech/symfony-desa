<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataMasterSuratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataMasterSuratRepository::class)
 */
class DataMasterSurat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_surat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $no_surat;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $keterangan_surat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $kepada;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     */
    private $alamat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $tanggal;

    /**
     * @ORM\Column(type="text")
     */
    private $tempat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kepala_desa;

    public function getIdSurat(): ?int
    {
        return $this->id_surat;
    }

    public function getNoSurat(): ?string
    {
        return $this->no_surat;
    }

    public function setNoSurat(?string $no_surat): self
    {
        $this->no_surat = $no_surat;

        return $this;
    }

    public function getKeteranganSurat(): ?string
    {
        return $this->keterangan_surat;
    }

    public function setKeteranganSurat(?string $keterangan_surat): self
    {
        $this->keterangan_surat = $keterangan_surat;

        return $this;
    }

    public function getKepada(): ?string
    {
        return $this->kepada;
    }

    public function setKepada(?string $kepada): self
    {
        $this->kepada = $kepada;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(?string $alamat): self
    {
        $this->alamat = $alamat;

        return $this;
    }

    public function getTanggal(): ?\DateTimeInterface
    {
        return $this->tanggal;
    }

    public function setTanggal(?\DateTimeInterface $tanggal): self
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    public function getTempat(): ?string
    {
        return $this->tempat;
    }

    public function setTempat(string $tempat): self
    {
        $this->tempat = $tempat;

        return $this;
    }

    public function getKepalaDesa(): ?int
    {
        return $this->kepala_desa;
    }

    public function setKepalaDesa(?int $kepala_desa): self
    {
        $this->kepala_desa = $kepala_desa;

        return $this;
    }
}
