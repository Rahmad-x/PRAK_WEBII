<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        <label for="tinggi">Tinggi :</label>
        <input type="number" id="tinggi" name="tinggi" required>
        <br>
        <label for="alamat_gambar">Alamat Gambar :</label>
        <input type="text" id="alamat_gambar" name="alamat_gambar" required>
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $alamat_gambar = $_POST['alamat_gambar'];

        $i = 1; 
        while ($i <= $tinggi) {
            
            $j = 1;
            while ($j < $i) {
                echo "<img src='$alamat_gambar' style='width: 30px; visibility: hidden;'>";
                $j++;
            }

            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$alamat_gambar' style='width: 30px;'>";
                $k--;
            }
            
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>