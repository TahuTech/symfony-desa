<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DataPendudukRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DataPendudukRepository::class)
 */
class DataPenduduk
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_penduduk;

    /**
     * @ORM\Column(type="integer")
     */
    private $nik;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $no_kk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nama_penduduk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jenis_kelamin;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $alamat_penduduk;

    public function getId(): ?int
    {
        return $this->id_penduduk;
    }

    public function getNik(): ?int
    {
        return $this->nik;
    }

    public function setNik(int $nik): self
    {
        $this->nik = $nik;

        return $this;
    }

    public function getNoKk(): ?int
    {
        return $this->no_kk;
    }

    public function setNoKk(?int $no_kk): self
    {
        $this->no_kk = $no_kk;

        return $this;
    }

    public function getNamaPenduduk(): ?string
    {
        return $this->nama_penduduk;
    }

    public function setNamaPenduduk(?string $nama_penduduk): self
    {
        $this->nama_penduduk = $nama_penduduk;

        return $this;
    }

    public function getJenisKelamin(): ?string
    {
        return $this->jenis_kelamin;
    }

    public function setJenisKelamin(?string $jenis_kelamin): self
    {
        $this->jenis_kelamin = $jenis_kelamin;

        return $this;
    }

    public function getAlamatPenduduk(): ?string
    {
        return $this->alamat_penduduk;
    }

    public function setAlamatPenduduk(?string $alamat_penduduk): self
    {
        $this->alamat_penduduk = $alamat_penduduk;

        return $this;
    }
}
