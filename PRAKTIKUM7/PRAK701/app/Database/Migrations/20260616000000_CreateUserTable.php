<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        // 1. Membuat Struktur Tabel User [cite: 24]
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11, // Sesuai tipe int [cite: 26, 30]
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100', // Sesuai tipe varchar [cite: 33, 34]
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100', // Sesuai tipe varchar [cite: 37, 38]
            ],
            'password' => [
                'type'       => 'TEXT', // Sesuai tipe text [cite: 41, 42]
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user'); // Membuat tabel bernama user [cite: 26]

        // 2. Langsung Menyisipkan Data Admin di Sini (Bypass Seeder)
        $data = [
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => password_hash('admin123', PASSWORD_BCRYPT),
        ];
        
        $this->db->table('user')->insert($data);
    }

    public function down()
    {
        $this->forge->dropTable('user'); // [cite: 26]
    }
}