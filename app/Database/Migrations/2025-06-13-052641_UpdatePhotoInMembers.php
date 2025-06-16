<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdatePhotoInMembers extends Migration
{
    public function up()
    {
        $db = \Config\Database::connect();

        $members = $db->table('members')->get()->getResult();
        foreach ($members as $member) {
            $name  = ucwords(strtolower($member->name)); // Convert name to Title Case
            $photo = trim($name) . '.jpg';

            $db->table('members')
                ->where('id', $member->id)
                ->update(['photo' => $photo]);
        }
    }

    public function down()
    {
        $db = \Config\Database::connect();
        $db->table('members')->update(['photo' => null]);
    }
}
