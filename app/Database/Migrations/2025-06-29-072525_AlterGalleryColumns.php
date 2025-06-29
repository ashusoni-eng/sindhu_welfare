<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterGalleryColumns extends Migration
{
    public function up()
    {
        $this->forge->dropTable('gallery', true);

        $this->forge->addField([
             'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'year' => [
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => true,
            ],
            'album_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
             'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gallery');
    }

    public function down()
    {
         $this->forge->dropTable('gallery');
    }
}
