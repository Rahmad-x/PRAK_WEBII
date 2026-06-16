<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="POST">
        <label for="jumlah">Jumlah Peserta :</label>
        <input type="number" id="jumlah" name="jumlah" required>
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1; 
        while ($i <= $jumlah) {
            if ($i % 2 != 0) {
                echo "<h2 style='color: red;'>Peserta ke-$i</h2>";
            } else {
                 echo "<h2 style='color: green;'>Peserta ke-$i</h2>";
            }
            $i++;         }
    }
    ?>
</body>
</html>    