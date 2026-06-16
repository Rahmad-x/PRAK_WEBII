<?php

namespace App\Models;

class StudentModel
{
    // Mengembalikan data profil praktikan
    public function getStudentData()
    {
        return [
            'nama'   => 'Rahmad', // Ganti dengan nama Anda
            'nim'    => '2410817210004',         // Ganti dengan NIM Anda
            'prodi'  => 'Teknologi Informasi',
            'hobi'   => 'Bermain dan mendengarkan musik',
            'skill'  => 'PHP, HTML, CSS, JavaScript',
            'gambar' => 'https://via.placeholder.com/200' // URL foto profil
        ];
    }
}