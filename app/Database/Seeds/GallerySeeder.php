<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [                
                'title'       => '',
                'date'        => '2022-09-06',    
                'year'        => '2022',
                'album_url'   => 'https://photos.app.goo.gl/VTqdCCXxXvn4CTGb8',
            ],           
            [                
                'title'       => '',
                'date'        => '2022-06-09',    
                'year'        => '2022',
                'album_url'   => 'https://photos.app.goo.gl/17KsC5maAdcGTMyo9',
            ],           
            [                
                'title'       => '',
                'date'        => '2022-11-09',    
                'year'        => '2022',
                'album_url'   => 'https://photos.app.goo.gl/JAzdiM5UX7HT1YKk6',
            ],           
            [                
                'title'       => '',
                'date'        => '2022-08-15',    
                'year'        => '2022',
                'album_url'   => 'https://photos.app.goo.gl/2fxLwZkFAzTmEsuh9',
            ],           
            [                
                'title'       => '',
                'date'        => '2022-07-26',    
                'year'        => '2022',
                'album_url'   => 'https://photos.app.goo.gl/8hp7HCFRkY4QUwDZ7',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-09-03',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/H6v9KHUc6bQCQbpG7',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-07-06',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/25sNTGTMrb9KAG3a8',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-01-08',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/e2aLk6dJ6nGJwNPZ8',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-08-15',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/fBKPBU3wmPRGfFf4A',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-11-17',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/2NBRMcBos84vWL6g7',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-03-19',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/cPUByDSr2a8Ctwrp6',
            ],           
            [                
                'title'       => '',
                'date'        => '2023-03-23',    
                'year'        => '2023',
                'album_url'   => 'https://photos.app.goo.gl/5Q3wXs9zwhCXN72t8',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-07-06',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/EUrLre5Joh5CU89E8',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-08-11',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/u4aQuc8nNWWdjp6K6',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-04-10',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/8PyngiaLgjxSiSbLA',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-04-11',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/pPbYXVdfhoWy2Fnx5',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-08-15',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/g8PxFm7ju9tXKQnVA',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-07-20',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/BdkxfT2BauiiUws68',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-08-25',    
                'year'        => '2024',
                'album_url'   => 'https://photos.app.goo.gl/itq7urfPoVaPuWi89',
            ],           
            [                
                'title'       => '',
                'date'        => '2025-01-09',    
                'year'        => '2025',
                'album_url'   => 'https://photos.app.goo.gl/d4dPBNDUWVnDXjk48',
            ],           
            [                
                'title'       => '',
                'date'        => '2024-03-19',    
                'year'        => '2025',
                'album_url'   => 'https://photos.app.goo.gl/uQ97tJDnL8ME1n5T9',
            ],           
            [                
                'title'       => '',
                'date'        => '2025-03-31',    
                'year'        => '2025',
                'album_url'   => 'https://photos.app.goo.gl/Ly5XYTTzoucVhZcu7',
            ],           
        ];
        $this->db->table('gallery')->insertBatch($data);
    }
}
