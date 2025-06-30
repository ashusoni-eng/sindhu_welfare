<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmailSubscription extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',    
        ])
        ->addKey('id', true)
        ->createTable('email_subscription');
    }

    public function down()
    {
        $this->forge->dropTable('email_subscription');
    }
}
