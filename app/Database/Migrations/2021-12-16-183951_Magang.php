<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Magang extends Migration
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
            'sektor' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
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
        $this->forge->createTable('magang');
    }

    public function down()
    {
        $this->forge->dropTable('magang');
    }
}
