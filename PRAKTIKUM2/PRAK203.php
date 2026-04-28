<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <form method="POST" action="">
        Nilai : <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        
        Dari : <br>
        <input type="radio" name="dari" value="Celcius" <?= (isset($_POST['dari']) && $_POST['dari'] == "Celcius") ? "checked" : "" ?>> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?= (isset($_POST['dari']) && $_POST['dari'] == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Reamur" <?= (isset($_POST['dari']) && $_POST['dari'] == "Reamur") ? "checked" : "" ?>> Reamur<br>
        <input type="radio" name="dari" value="Kelvin" <?= (isset($_POST['dari']) && $_POST['dari'] == "Kelvin") ? "checked" : "" ?>> Kelvin<br>
        
        Ke : <br>
        <input type="radio" name="ke" value="Celcius" <?= (isset($_POST['ke']) && $_POST['ke'] == "Celcius") ? "checked" : "" ?>> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?= (isset($_POST['ke']) && $_POST['ke'] == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Reamur" <?= (isset($_POST['ke']) && $_POST['ke'] == "Reamur") ? "checked" : "" ?>> Reamur<br>
        <input type="radio" name="ke" value="Kelvin" <?= (isset($_POST['ke']) && $_POST['ke'] == "Kelvin") ? "checked" : "" ?>> Kelvin<br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        
        $suhuCelcius = 0;
        $hasil = 0;
        $simbol = "";

        if ($dari == "Celcius") {
            $suhuCelcius = $nilai;
        } elseif ($dari == "Fahrenheit") {
            $suhuCelcius = ($nilai - 32) * 5/9;
        } elseif ($dari == "Reamur") {
            $suhuCelcius = $nilai * 5/4;
        } elseif ($dari == "Kelvin") {
            $suhuCelcius = $nilai - 273.15;
        }

        if ($ke == "Celcius") {
            $hasil = $suhuCelcius;
            $simbol = "&deg;C";
        } elseif ($ke == "Fahrenheit") {
            $hasil = ($suhuCelcius * 9/5) + 32;
            $simbol = "&deg;F";
        } elseif ($ke == "Reamur") {
            $hasil = $suhuCelcius * 4/5;
            $simbol = "&deg;R";
        } elseif ($ke == "Kelvin") {
            $hasil = $suhuCelcius + 273.15;
            $simbol = "&deg;K"; 
        }

        echo "<h2>Hasil Konversi: " . number_format($hasil, 1, '.', '') . " " . $simbol . "</h2>";
    }
    ?>

</body>
</html>