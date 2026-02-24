<?php
class PegadaianSyariah {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $telat;

    public function totalPinjaman(){
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    public function angsuran(){
        return $this->totalPinjaman() / $this->lama;
    }

    public function denda(){
        return $this->angsuran() * 0.0015 * $this->telat; // 0.15%
    }

    public function pembayaran(){
        return $this->angsuran() + $this->denda();
    }
}

$hasil = null;

if(isset($_POST['hitung'])){
    $obj = new PegadaianSyariah();

    $obj->pinjaman = $_POST['pinjaman'];
    $obj->bunga = $_POST['bunga'];
    $obj->lama = $_POST['lama'];
    $obj->telat = $_POST['telat'];

    if($obj->lama > 0){
        $hasil = $obj;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Pegadaian Syariah OOP</title>
<style>
body{font-family:Arial;margin:40px;}
.box{border:1px solid #ccc;padding:20px;width:520px;}
input{width:100%;padding:8px;margin:6px 0;}
button{padding:10px;width:100%;background:#2e86de;color:white;border:none;}
</style>
</head>
<body>

<div class="box">
<h3>TOKO PEGADAIAN SYARIAH</h3>

<form method="post">
Besaran Pinjaman
<input type="number" name="pinjaman" required>

Masukan bunga (%)
<input type="number" name="bunga" required>

Lama angsuran (bulan)
<input type="number" name="lama" required>

Keterlambatan (hari)
<input type="number" name="telat" required>

<button type="submit" name="hitung">Hitung</button>
</form>

<?php if($hasil){ ?>
<hr>

<p>Total Pinjaman : Rp <?= number_format($hasil->totalPinjaman(),0,",",".") ?></p>
<p>Besaran angsuran : Rp <?= number_format($hasil->angsuran(),0,",",".") ?></p>
<p>Denda Keterlambatan : Rp <?= number_format($hasil->denda(),0,",",".") ?></p>
<p><b>Besaran Pembayaran : Rp <?= number_format($hasil->pembayaran(),0,",",".") ?></b></p>

<?php } ?>

</div>

</body>
</html>