<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MakeNameFormatInMembers extends Migration
{
    public function up()
    {
        $db = \Config\Database::connect();
        $members = $db->table('members')->get()->getResult();
        foreach ($members as $member) {
            $name = ucwords(strtolower($member->name)); 

            $db->table('members')
                ->where('id', $member->id)
                ->update(['name' => $name]);
        }
    }

    public function down()
    {
        
    }
}
