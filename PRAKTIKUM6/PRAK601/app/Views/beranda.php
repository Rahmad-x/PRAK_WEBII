<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang di Website Saya</h1>
        <p class="col-md-8 mx-auto fs-4 mt-3">
            Halo! Saya <strong><?= $student['nama']; ?></strong>. <br>
            Nomor Induk Mahasiswa (NIM) saya adalah <strong><?= $student['nim']; ?></strong>.
        </p>
        <a href="/profil" class="btn btn-primary btn-lg mt-3">Lihat Profil Lengkap</a>
    </div>
</div>
<?= $this->endSection(); ?>