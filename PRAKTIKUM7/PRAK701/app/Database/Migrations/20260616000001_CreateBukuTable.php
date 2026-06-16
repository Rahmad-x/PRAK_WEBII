<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        // Membuat Struktur Tabel Buku [cite: 24]
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20, // Sesuai tipe bigint [cite: 25, 28]
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255', // Sesuai tipe varchar [cite: 31, 32]
            ],
            'penulis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100', // Sesuai tipe varchar [cite: 35, 36]
            ],
            'penerbit' => [
                'type'       => 'VARCHAR',
                'constraint' => '100', // Sesuai tipe varchar [cite: 39, 40]
            ],
            'tahun_terbit' => [
                'type'       => 'YEAR', // Sesuai tipe year [cite: 43, 44]
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku'); // Membuat tabel bernama buku [cite: 25]
    }

    public function down()
    {
        $this->forge->dropTable('buku'); // [cite: 25]
    }
}
