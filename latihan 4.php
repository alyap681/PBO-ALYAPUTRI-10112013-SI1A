<?php

function formatRupiah($angka): string{
   return "Rp " . number_format($angka, 0, ',', '.');
}

class Belanja {

public $namaPembeli;
public $namaBarang;
public $hargaBarang;
public $jumlahBeli;

// Method hitung subtotal
public function hitungSubtotal(): float {
    return $this->hargaBarang * $this->jumlahBeli;
}

// Method hitung total dengan diskon
public function hitungTotalDenganDiskon($persenDiskon): float {
    $subtotal = $this->hitungSubtotal();
    $diskon = ($persenDiskon / 100) * $subtotal;
    return $subtotal - $diskon;
}

}

// Data pembelian
$data = [
    'namaPembeli' => 'Miftah',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => 12000,
    'jumlahBeli' => 12
];

// Instansiasi objek
$belanja = new Belanja();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $data["jumlahBeli"];

// Output
echo "<h2>STRUK BELANJA WARUNG A</h2>";
echo "Pembeli: " . $belanja->namaPembeli . "<br>";
echo "Barang: "  . $belanja->namaBarang . "<br>";
echo "Subtotal: " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
echo "Total (Diskon 10%): " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";

?>


