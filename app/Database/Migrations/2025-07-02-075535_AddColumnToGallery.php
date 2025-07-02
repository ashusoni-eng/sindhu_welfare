<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnToGallery extends Migration
{
    public function up()
    {
        $this->forge->addColumn('gallery', [
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
                'default' => 'event',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('gallery', 'type');
    }
}
