<?php
require 'Model.php';
$id = $_GET['id'] ?? null;
$buku = $id ? getBukuById($id) : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])) {
    if ($id) { updateBuku($id, $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']); }
    else { insertBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']); }
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Buku</h2>
    <form method="POST">
        Judul: <input type="text" name="judul" value="<?= $buku['judul_buku'] ?? '' ?>" required><br><br>
        Penulis: <input type="text" name="penulis" value="<?= $buku['penulis'] ?? '' ?>" required><br><br>
        Penerbit: <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?? '' ?>" required><br><br>
        Tahun: <input type="number" name="tahun" value="<?= $buku['tahun_terbit'] ?? '' ?>" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>