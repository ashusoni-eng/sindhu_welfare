<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'       => 'Cheti Chand Celebration',
                'description' => 'Join us for the joyous celebration of the Sindhi New Year with cultural performances and traditional food.',
                'date'        => '2025-04-14',
                'time'        => '18:00:00',
                'location'    => 'Sindhu Community Hall, Gwalior',
                'image'       => 'event1.jpeg',
            ],
            [
                'title'       => 'Diwali Milan Samaaroh',
                'description' => 'A festive get-together to celebrate Diwali with lights, sweets, and community bonding.',
                'date'        => '2025-04-14',
                'time'        => '18:00:00',
                'location'    => 'Sindhu Community Hall, Gwalior',
                'image'       => 'event2.jpeg',
            ],
            [
                'title'       => 'Free Health Camp',
                'description' => 'A community welfare initiative providing free health check-ups for all members.',
                'date'        => '2025-04-14',
                'time'        => '18:00:00',
                'location'    => 'Sindhu Community Hall, Gwalior',
                'image'       => 'event3.jpeg',
            ],
        ];
        $this->db->table('events')->insertBatch($data);
    }
}
