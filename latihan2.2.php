<?php

class Belanja { //ini adalah class belanja 
   
// instance variable 
    public String $namaPembeli= "ale"; // ini adalah variable dengan tipe data String 

    public String $namaBarang= "susu kotak"; // ini adalah variable dengan tipe data String 

    public int $hargaBarang=6000; // ini adalah variable dengan tipe data Integer

    public int $jumlahBarang=1; // ini adalah variable dengan tipe data Integer

    public float $totalBayar=6000; // ini adalah variable dengan tipe data  Float

    public float $diskon=0.5; // ini adalah variable dengan tipe data  Float

    public static float $pajak = 0.01; // ini adalah variable dengan tipe data  Float


    public function __construct ($namaPembeli) {
        $this->namaPembeli = $namaPembeli; 
    }

    public function hitungTotal(): float 
    {
        $subtotal = $this ->hargaBarang * $this->jumlahBarang; // operator aritmatika *

        return $subtotal; 
    }
     public function Diskon(): float 
    {
        $hargadiskon = $this ->hargaBarang * $this->diskon; // operator aritmatika *

        return $hargadiskon; 
    }

public function tampilRincian ($namaPembeli): void{
    echo "Nama Pembeli :" . $this->namaPembeli . "<br>"; //menampilkan nama pembeli
    echo "Nama Barang :" . $this->namaBarang . "<br>"; //menampilkan nama barang
    echo "Harga Barang :" . $this->hargaBarang . "<br>"; //menampilkan harga barang
    echo "Jumlah Barang:" . $this->jumlahBarang . "<br"; //menapilkan jumlah barang
    echo "harga diskon:" . $this->Diskon() . "<br";
    }

    
}

$belanja1 = new Belanja(namaPembeli: $namaPembeli);
$belanja1->tampilRincian(namaPembeli: $belanja1->namaPembeli);




?>