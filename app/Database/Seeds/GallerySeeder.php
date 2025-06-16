<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'image'       => 'event1.jpeg',
                'title'       => 'Image 1',
                'description' => 'Description 1',
            ],
            [
                'image'       => 'event2.jpg',
                'title'       => 'Image 2',
                'description' => 'Description 2',
            ],
            [
                'image'       => 'event3.jpg',
                'title'       => 'Image 3',
                'description' => 'Description 3',
            ],
        ];
        $this->db->table('gallery')->insertBatch($data);
    }
}
