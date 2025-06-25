<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnToGallery extends Migration
{
    public function up()
    {
        $this->forge->addColumn('gallery', [
            'year' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
                'null' => true,
                 'default' => null,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('gallery', 'year');
    }
}
