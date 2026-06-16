<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            // Kita gunakan password_hash sesuai standar keamanan, 
            // tapi tenang, AuthController kita kemarin sudah support hash ini.
            'password' => password_hash('admin123', PASSWORD_BCRYPT),
        ];

        // Menyisipkan data ke dalam tabel 'user'
        $this->db->table('user')->insert($data);
    }
}