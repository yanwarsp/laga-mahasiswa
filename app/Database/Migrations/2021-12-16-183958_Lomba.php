<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'namalengkap' => [
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
        $this->forge->createTable('lomba');
    }

    public function down()
    {
        $this->forge->dropTable('lomba');
    }
}
