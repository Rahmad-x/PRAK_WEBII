<?php
require 'Model.php';
if (isset($_GET['delete'])) { deleteBuku($_GET['delete']); header("Location: Buku.php"); }
$buku = getBuku();
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Data Buku</h2>
    <a href="FormBuku.php">Tambah Data</a> | <a href="Member.php">Data Member</a><br><br>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr><th>ID</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th></tr>
        <?php foreach ($buku as $b): ?>
        <tr>
            <td><?= $b['id_buku'] ?></td><td><?= $b['judul_buku'] ?></td>
            <td><?= $b['penulis'] ?></td><td><?= $b['penerbit'] ?></td><td><?= $b['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $b['id_buku'] ?>">Edit</a> | 
                <a href="Buku.php?delete=<?= $b['id_buku'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>