<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        <label for="bawah">Batas Bawah :</label>
        <input type="number" id="bawah" name="bawah" required>
        <br>
        <label for="atas">Batas Atas :</label>
        <input type="number" id="atas" name="atas" required>
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];

        $i = $bawah;

        if ($bawah <= $atas) {
            do {
                if (($i + 7) % 5 == 0) {
                    echo "<img src='star-images-9441.png' alt='star' style='width: 16px; height: 16px; margin: 0 2px;'>";
                } else {
                    echo "$i ";
                }
                $i++;
                
            } while ($i <= $atas);         } else {
            echo "Batas bawah harus lebih kecil atau sama dengan batas atas.";
        }
    }
    ?>
</body>
</html>
