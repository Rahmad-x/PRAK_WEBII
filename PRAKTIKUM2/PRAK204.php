<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <form method="POST" action="">
        Nilai : <input type="number" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
    <br>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $hasil = "";
        if ($nilai == 0) {
            $hasil = "nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            $hasil = "satuan";
        } elseif ($nilai >= 11 && $nilai < 20) {
            $hasil = "belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            $hasil = "puluhan";
        } elseif ($nilai >= 100 && $nilai < 1000) {
            $hasil = "ratusan";
        } elseif ($nilai >= 1000 || $nilai < 0) {
            $hasil = "Melebihi limit";
        }

        if ($hasil != "") {
            echo "<h2>Hasil: $hasil</h2>";
        }
    }
    ?>

</body>
</html>
