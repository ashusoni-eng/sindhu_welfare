<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
         $data = [
            'name'     => 'Vikas Dawani',
            'email'    => 'admin@sws.com',
            'password' => password_hash('admin@123', PASSWORD_DEFAULT),
            'role'     => 'admin',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->db->table('users')->insert($data);
    }
}
