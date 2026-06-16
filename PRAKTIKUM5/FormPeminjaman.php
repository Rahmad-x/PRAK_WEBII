<?php
require 'Model.php';
$id = $_GET['id'] ?? null;
$p = $id ? getPeminjamanById($id) : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])) {
    if ($id) { updatePeminjaman($id, $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']); }
    else { insertPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']); }
    header("Location: Peminjaman.php");
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Peminjaman</h2>
    <form method="POST">
        ID Member: <input type="number" name="id_member" value="<?= $p['id_member'] ?? '' ?>" required><br><br>
        ID Buku: <input type="number" name="id_buku" value="<?= $p['id_buku'] ?? '' ?>" required><br><br>
        Tgl Pinjam: <input type="date" name="tgl_pinjam" value="<?= $p['tgl_pinjam'] ?? '' ?>" required><br><br>
        Tgl Kembali: <input type="date" name="tgl_kembali" value="<?= $p['tgl_kembali'] ?? '' ?>" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>