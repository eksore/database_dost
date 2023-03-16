<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EASeeder extends Seeder
{
   
        public function fake(Generator &$faker)
        {
    
           
                   return [
                    'datestart'        =>    '2020-05-08 14:52:10',
                    'dateend'        =>    '2020-05-08 14:52:10',
                        'ea_name'        =>    $faker->ea,
                        'ea_description'        =>    $faker->description,
                        'ea_venue'        =>    $faker->venue,
                        'banner'        =>    $faker->banner,
                        'qr_code'        =>    $faker->qr_code,
                    
                        
                        
                   ];
                
            }
        }
    
