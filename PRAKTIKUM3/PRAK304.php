<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK304</title>
</head>
<body>
    <?php
    $jumlah_bintang = 0;

    if (isset($_POST['submit'])) {
        $jumlah_bintang = (int)$_POST['bintang'];
    } elseif (isset($_POST['tambah'])) {
        $jumlah_bintang = (int)$_POST['bintang'] + 1;
    } elseif (isset($_POST['kurang'])) {
        $jumlah_bintang = (int)$_POST['bintang'] - 1;
    }

    if ($jumlah_bintang == 0): 
    ?>
        <form action="" method="POST">
            <label for="bintang">Jumlah bintang </label>
            <input type="number" id="bintang" name="bintang" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>

    <?php 
     else: 
    ?>
        <p>Jumlah bintang <?= $jumlah_bintang ?></p>
        
        <div style="margin-bottom: 10px;">
            <?php
            for ($i = 0; $i < $jumlah_bintang; $i++) {
                echo "<img src='star-images-9441.png' alt='bintang' style='width: 50px; margin-right: 5px;'>";
            }
            ?>
        </div>

        <form action="" method="POST">
            <input type="hidden" name="bintang" value="<?= $jumlah_bintang ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>
    
</body>
</html>