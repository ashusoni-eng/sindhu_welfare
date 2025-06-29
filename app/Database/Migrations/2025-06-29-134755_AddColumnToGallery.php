<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnToGallery extends Migration
{
    public function up()
    {
        $this->forge->addColumn('gallery', [
            'thumbnail' => [
                'type' => 'VARCHAR',                
                 'constraint' => 255, 
                'null' => true,
                'default' => null
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('gallery', 'thumbnail');
    }
}
