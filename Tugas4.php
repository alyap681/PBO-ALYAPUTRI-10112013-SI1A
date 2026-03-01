<?php

class Mahasiswa {
    // Properti sesuai tampilan
    public $nama;
    public $kelas;
    public $mataKuliah;
    public $nilai;

    // Constructor untuk inisialisasi data
    public function __construct($nama, $kelas, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    // Method untuk menentukan status kelulusan kuis
    public function getStatusKuis() {
        // Asumsi: Lulus jika nilai >= 60
        return ($this->nilai >= 60) ? "Lulus Kuis" : "Tidak Lulus Kuis";
    }

    // Method untuk menampilkan data ke layar
    public function tampilkanData() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "<strong>" . $this->getStatusKuis() . "</strong><br>";
        echo "<hr>"; // Garis pemisah sesuai tampilan gambar
    }
}

// 1. Menggunakan Prinsip Array untuk menyimpan objek mahasiswa
$daftarMahasiswa = [
    new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55)
];

// 2. Melakukan looping untuk menampilkan output
foreach ($daftarMahasiswa as $mhs) {
    $mhs->tampilkanData();
}

?>