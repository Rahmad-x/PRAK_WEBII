<?php

namespace App\Controllers;

use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        // Inisialisasi model buku
        $this->bukuModel = new BukuModel();
    }

    // 1. Menampilkan Halaman Utama / Daftar Buku (Read)
    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    // 2. Menampilkan Form Tambah Buku (Create View)
    public function create()
    {
        return view('buku/create');
    }

    // 3. Memproses Validasi dan Menyimpan Data Buku Baru (Create Action)
   public function store()
{
    $validation = \Config\Services::validation();

    $rules = [
        'judul'        => 'required|string',
        'penulis'      => 'required|string',
        'penerbit'     => 'required|string',
        'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
    ];

    $errors = [
        'judul' => [
            'required' => 'Judul harus diisi!',
            'string'   => 'Judul harus berupa teks!'
        ],
        'penulis' => [
            'required' => 'Penulis harus diisi!',
            'string'   => 'Penulis harus berupa teks!'
        ],
        'penerbit' => [
            'required' => 'Penerbit harus diisi!',
            'string'   => 'Penerbit harus berupa teks!'
        ],
        'tahun_terbit' => [
            'required'     => 'Tahun terbit harus diisi!',
            'numeric'      => 'Tahun terbit harus berupa angka!',
            'greater_than' => 'Tahun terbit harus lebih besar dari 1800!',
            'less_than'    => 'Tahun terbit harus lebih kecil dari 2024!'
        ]
    ];

    $validation->setRules($rules, $errors);

    // JIKA VALIDASI GAGAL: Langsung load view form-nya dan kirim variabel $validation secara langsung!
    if (!$validation->withRequest($this->request)->run()) {
        return view('buku/create', [
            'validation' => $validation
        ]);
    }

    // JIKA LOLOS: Baru simpan ke database
    $this->bukuModel->save([
        'judul'        => $this->request->getPost('judul'),
        'penulis'      => $this->request->getPost('penulis'),
        'penerbit'     => $this->request->getPost('penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
    ]);

    return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan.');
}
    // 4. Menampilkan Form Edit Buku (Update View)
    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    // 5. Memproses Update Data Buku (Update Action)
    public function update($id)
    {
        // Opsional: Jika ingin validasi ketat saat edit, kamu bisa pasang rules yang sama dengan store() di sini
        $this->bukuModel->update($id, [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diubah.');
    }

    // 6. Menghapus Data Buku (Delete)
    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data buku berhasil dihapus.');
    }
}