<?php

class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function tampilkanInformasi() {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Nama Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br><br>";
    }
}

$buku1 = new Buku("Di Balik Pintu Kamar", "Tiwi Tirta Zuwela", 2026);
$buku2 = new Buku("Bumi", "Tiwi Tirta Zuwela", 2022);

echo "<h2>Sistem Informasi Buku Perpustakaan</h2>";

$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();

?>