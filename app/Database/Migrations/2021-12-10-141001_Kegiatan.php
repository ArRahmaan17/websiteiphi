<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kegiatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'judul'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'isi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'excerpt'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'penulis'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at'       => [
                'type'       => 'DATETIME'
            ],
            'updated_at'       => [
                'type'       => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}
