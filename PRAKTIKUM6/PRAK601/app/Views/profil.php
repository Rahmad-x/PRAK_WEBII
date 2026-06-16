<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="card shadow-sm mb-5">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">Profil Praktikan</h2>
        <div class="row text-center text-md-start">
            <div class="col-md-3 mb-3">
                <img src="<?= $student['gambar']; ?>" class="img-fluid rounded-circle" alt="Foto Profil">
            </div>
            <div class="col-md-9">
                <table class="table table-borderless fs-5">
                    <tr><th width="150">Nama Lengkap</th><td>: <?= $student['nama']; ?></td></tr>
                    <tr><th>NIM</th><td>: <?= $student['nim']; ?></td></tr>
                    <tr><th>Asal Prodi</th><td>: <?= $student['prodi']; ?></td></tr>
                    <tr><th>Hobi</th><td>: <?= $student['hobi']; ?></td></tr>
                    <tr><th>Skill</th><td>: <?= $student['skill']; ?></td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<h3 class="mb-3">Pengalaman Paling Berkesan</h3>
<div class="row g-4 mb-5">
    <?php foreach($experiences as $exp) : ?>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm">
                <img src="<?= $exp['gambar']; ?>" class="card-img-top" alt="<?= $exp['judul']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $exp['judul']; ?></h5>
                    <p class="card-text flex-grow-1"><?= substr($exp['deskripsi'], 0, 50); ?>...</p>
                    <a href="/pengalaman/<?= $exp['slug']; ?>" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>