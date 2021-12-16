<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 20,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'penyelenggara' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'kelompok' => [
                'type' => 'VARCHAR',
                'constraint' => 40,
            ],
            'hadiah' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'poin' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'kriteria' => [
                'type' => 'TEXT',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('lomba');
    }

    public function down()
    {
        $this->forge->dropTable('lomba');
    }
}
