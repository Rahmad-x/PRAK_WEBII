<?php
require 'Model.php';
$id = $_GET['id'] ?? null;
$member = $id ? getMemberById($id) : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['simpan'])) {
        if ($id) {
            updateMember($id, $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_daftar'], $_POST['tgl_bayar']);
        } else {
            insertMember($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_daftar'], $_POST['tgl_bayar']);
        }
        header("Location: Member.php");
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Member</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $member['nama_member'] ?? '' ?>" required><br><br>
        Nomor: <input type="text" name="nomor" value="<?= $member['nomor_member'] ?? '' ?>" required><br><br>
        Alamat: <textarea name="alamat" required><?= $member['alamat'] ?? '' ?></textarea><br><br>
        Tgl Daftar: <input type="datetime-local" name="tgl_daftar" value="<?= $member['tgl_mendaftar'] ?? '' ?>" required><br><br>
        Tgl Bayar: <input type="date" name="tgl_bayar" value="<?= $member['tgl_terakhir_bayar'] ?? '' ?>" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>