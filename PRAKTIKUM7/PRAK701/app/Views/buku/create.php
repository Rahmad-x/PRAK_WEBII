<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Form Tambah Buku</h4>
                </div>
                <div class="card-body">
                    
<?php if (!isset($validation)) { $validation = session()->getFlashdata('validation'); } ?>                    
                    <form action="<?= base_url('buku/store'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control <?= (isset($validation) && $validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= old('judul'); ?>">
                            <div class="invalid-feedback">
                                <?= isset($validation) ? $validation->getError('judul') : ''; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control <?= (isset($validation) && $validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" value="<?= old('penulis'); ?>">
                            <div class="invalid-feedback">
                                <?= isset($validation) ? $validation->getError('penulis') : ''; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control <?= (isset($validation) && $validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" value="<?= old('penerbit'); ?>">
                            <div class="invalid-feedback">
                                <?= isset($validation) ? $validation->getError('penerbit') : ''; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control <?= (isset($validation) && $validation->hasError('tahun_terbit')) ? 'is-invalid' : ''; ?>" value="<?= old('tahun_terbit'); ?>">
                            <div class="invalid-feedback">
                                <?= isset($validation) ? $validation->getError('tahun_terbit') : ''; ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('buku'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>