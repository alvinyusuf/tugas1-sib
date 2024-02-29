<?php

class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Mahasiswa extends Person {
    public function konsultasi(DosenWali $dosenWali, $kampus) {
        return "Mahasiswa {$this->nama} sedang berkonsultasi dengan Dosen Wali di lingkungan Kampus $kampus mengurus KRS.";
    }
}

class DosenWali extends Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

$namaMahasiswa = "Alvin Yusuf Riziq";
$namaDosenWali = "Mustafa, S.T, M.T";
$namaKampus = "UNISSULA";

$mahasiswa = new Mahasiswa($namaMahasiswa);
$dosenWali = new DosenWali($namaDosenWali);

$ilustrasi = $mahasiswa->konsultasi($dosenWali, $namaKampus);

echo $namaKampus;
echo "</br> Dosen Wali: $namaDosenWali";
echo "</br> Nama: $namaMahasiswa";
