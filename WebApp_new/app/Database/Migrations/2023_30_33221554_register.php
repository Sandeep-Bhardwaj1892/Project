<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Register extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
           
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'confirm_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'updated_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('register');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}