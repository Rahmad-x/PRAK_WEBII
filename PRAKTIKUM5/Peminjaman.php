<?php
require 'Model.php';
if (isset($_GET['delete'])) { deletePeminjaman($_GET['delete']); header("Location: Peminjaman.php"); }
$peminjaman = getPeminjaman();
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Data Peminjaman</h2>
    <a href="FormPeminjaman.php">Tambah Data</a> | <a href="Member.php">Data Member</a><br><br>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr><th>ID Pinjam</th><th>ID Member</th><th>ID Buku</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th>Aksi</th></tr>
        <?php foreach ($peminjaman as $p): ?>
        <tr>
            <td><?= $p['id_peminjaman'] ?></td><td><?= $p['id_member'] ?></td>
            <td><?= $p['id_buku'] ?></td><td><?= $p['tgl_pinjam'] ?></td><td><?= $p['tgl_kembali'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>">Edit</a> | 
                <a href="Peminjaman.php?delete=<?= $p['id_peminjaman'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>