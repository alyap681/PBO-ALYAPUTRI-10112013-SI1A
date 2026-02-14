<?php
if(isset($_POST['hitung'])){
    $celcius = $_POST['celcius'];

    $fahrenheit = (9/5 * $celcius) + 32;
    $reamur = 4/5 * $celcius;
    $kelvin = $celcius + 273;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Suhu</title>
</head>
<body>
    <h2>Kalkulator Konversi Suhu</h2>
    <form method="post">
        Masukkan Suhu (Celcius):
        <input type="number" name="celcius" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if(isset($_POST['hitung'])){ ?>
        <h3>Hasil Konversi:</h3>
        Fahrenheit: <?php echo $fahrenheit; ?> °F <br>
        Reamur: <?php echo $reamur; ?> °R <br>
        Kelvin: <?php echo $kelvin; ?> K <br>
    <?php } ?>

</body>
</html>
