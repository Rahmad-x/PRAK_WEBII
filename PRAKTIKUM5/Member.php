<?php
require 'Model.php';
if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header("Location: Member.php");
}
$members = getMembers();
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Data Member</h2>
    <a href="FormMember.php">Tambah Data</a> | <a href="Buku.php">Data Buku</a> | <a href="Peminjaman.php">Data Peminjaman</a><br><br>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr><th>ID</th><th>Nama</th><th>Nomor</th><th>Alamat</th><th>Tgl Daftar</th><th>Tgl Bayar</th><th>Aksi</th></tr>
        <?php foreach ($members as $m): ?>
        <tr>
            <td><?= $m['id_member'] ?></td><td><?= $m['nama_member'] ?></td>
            <td><?= $m['nomor_member'] ?></td><td><?= $m['alamat'] ?></td>
            <td><?= $m['tgl_mendaftar'] ?></td><td><?= $m['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id=<?= $m['id_member'] ?>">Edit</a> | 
                <a href="Member.php?delete=<?= $m['id_member'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>