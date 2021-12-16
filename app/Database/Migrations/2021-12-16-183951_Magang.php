<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Magang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'prodi' => [
                'type' => 'VARCHAR',
                'constraint' => 40,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
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
        $this->forge->addPrimaryKey('username', true);
        $this->forge->createTable('magang');
    }

    public function down()
    {
        $this->forge->dropTable('magang');
    }
}
