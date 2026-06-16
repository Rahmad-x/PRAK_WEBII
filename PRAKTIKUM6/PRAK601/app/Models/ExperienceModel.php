<?php

namespace App\Models;

class ExperienceModel 
{
    // Mengembalikan 4 data pengalaman berkesan
    public function getExperiences($slug = false)
    {
        $data = [
            'kepanitiaan' => [
                'slug'      => 'kepanitiaan',
                'judul'     => 'Panitia OSPEK Universitas',
                'deskripsi' => 'Menjadi panitia divisi acara untuk menyambut 2000+ mahasiswa baru.',
                'waktu'     => 'Agustus 2024',
                'gambar'    => 'https://via.placeholder.com/400x200',
                'kesan'     => 'Melatih public speaking dan manajemen waktu.'
            ],
            'lomba-it' => [
                'slug'      => 'lomba-it',
                'judul'     => 'Juara 2 Hackathon',
                'deskripsi' => 'Mengikuti kompetisi membuat aplikasi inovatif dalam 48 jam.',
                'waktu'     => 'November 2024',
                'gambar'    => 'https://via.placeholder.com/400x200',
                'kesan'     => 'Sangat menantang dan memacu adrenalin.'
            ],
            'magang' => [
                'slug'      => 'magang',
                'judul'     => 'Magang Web Developer',
                'deskripsi' => 'Bekerja praktik di sebuah startup teknologi selama 3 bulan.',
                'waktu'     => 'Januari - Maret 2025',
                'gambar'    => 'https://via.placeholder.com/400x200',
                'kesan'     => 'Mendapatkan wawasan berharga tentang industri IT sesungguhnya.'
            ],
            'kkn' => [
                'slug'      => 'kkn',
                'judul'     => 'KKN Tematik Desa',
                'deskripsi' => 'Membantu digitalisasi sistem pencatatan warga di pedesaan.',
                'waktu'     => 'Juli 2025',
                'gambar'    => 'https://via.placeholder.com/400x200',
                'kesan'     => 'Pengalaman luar biasa bisa terjun langsung membantu masyarakat.'
            ]
        ];

        if ($slug === false) {
            return $data;
        }

        return $data[$slug] ?? null;
    }
}