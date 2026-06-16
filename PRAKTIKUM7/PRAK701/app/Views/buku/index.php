<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku - PRAK 701</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Aplikasi Perpustakaan</a>
        <div class="navbar-nav ms-auto">
            <span class="nav-link text-white me-3">Halo, <?= session()->get('username'); ?></span>
            <a class="btn btn-danger btn-sm" href="<?= base_url('/logout'); ?>">Logout</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Koleksi Buku</h2>
        <a href="<?= base_url('/buku/create'); ?>" class="btn btn-success">+ Tambah Buku</a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($buku)): ?>
                <tr>
                    <td colspan="6" class="text-center">Belum ada data buku.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($buku as $b): ?>
                <tr>
                    <td><?= $b['id']; ?></td>
                    <td><?= $b['judul']; ?></td>
                    <td><?= $b['penulis']; ?></td>
                    <td><?= $b['penerbit']; ?></td>
                    <td><?= $b['tahun_terbit']; ?></td>
                    <td>
                        <a href="<?= base_url('/buku/edit/' . $b['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('/buku/delete/' . $b['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus buku ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>