<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="card shadow-sm mb-5">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="<?= $pengalaman['gambar']; ?>" class="img-fluid rounded-start h-100 object-fit-cover" alt="<?= $pengalaman['judul']; ?>">
        </div>
        <div class="col-md-7">
            <div class="card-body p-4">
                <h2 class="card-title mb-3"><?= $pengalaman['judul']; ?></h2>
                <span class="badge bg-secondary mb-3 fs-6">📅 Waktu: <?= $pengalaman['waktu']; ?></span>
                
                <h5>Deskripsi Kegiatan</h5>
                <p class="card-text text-muted"><?= $pengalaman['deskripsi']; ?></p>
                
                <h5 class="mt-4">Kesan yang Dirasakan</h5>
                <p class="card-text fst-italic">"<?= $pengalaman['kesan']; ?>"</p>

                <a href="/profil" class="btn btn-secondary mt-4">&larr; Kembali ke Profil</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>