<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id' => [
                'type'           => 'INT',  // important
                'constraint'     => 11,     // important, but some fields don't require this. This controls the field size.
                'unsigned'       => true,   // optional, it means all positive value
                'auto_increment' => true,   // optional if you want auto counting, but important for the id
                'null'           => false,  // needed for most, it means it can be empty
            ],

            'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => false,
                ],
            'email' => [
                    'type' => 'VARCHAR',
                    'constraint' => '150',
                    'null' => false,
                ],
            'password' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => false,
                ],



            'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
            'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                // Soft Delete
            'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
            ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('usertable', true);
    }

    public function down()
    {
            $this->forge->dropTable('usertable', true);
    }
}
