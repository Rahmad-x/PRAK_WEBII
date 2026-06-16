<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK401</title>
    <style>
        table { border-collapse: collapse; margin-top: 10px; }
        td { border: 1px solid black; padding: 5px 10px; text-align: center; }
    </style>
</head>
<body>
    <form action="" method="POST">
        Panjang: <input type="number" name="panjang" required><br>
        Lebar: <input type="number" name="lebar" required><br>
        Nilai: <input type="text" name="nilai" required><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];

        $arr_nilai = explode(" ", $nilai);

        if (count($arr_nilai) == ($panjang * $lebar)) {
            echo "<table>";
            $idx = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $arr_nilai[$idx] . "</td>";
                    $idx++;
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<br><b>Panjang nilai tidak sesuai dengan ukuran matriks</b>";
        }
    }
    ?>
</body>
</html>