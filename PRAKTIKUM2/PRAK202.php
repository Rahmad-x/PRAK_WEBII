<?php
$errorNama = $errorNim = $errorJK = "";
$nama = $nim = $jk = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["nama"])) {
        $errorNama = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $errorNim = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["jenis_kelamin"])) {
        $errorJK = "jenis kelamin tidak boleh kosong";
    } else {
        $jk = $_POST["jenis_kelamin"];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?= $nama ?>">
        <span class="error">* <?= $errorNama ?></span><br>

        Nim: <input type="text" name="nim" value="<?= $nim ?>">
        <span class="error">* <?= $errorNim ?></span><br>

        Jenis Kelamin : <span class="error">* <?= $errorJK ?></span><br>
        
        <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?>> Laki-Laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (isset($jk) && $jk == "Perempuan") echo "checked"; ?>> Perempuan<br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errorNama) && empty($errorNim) && empty($errorJK)) {
        echo "<h2>Output:</h2>";
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jk <br>";
    }
    ?>

</body>
</html>