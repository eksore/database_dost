<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class IQSeeder extends Seeder
{
   
        public function fake(Generator &$faker)
        {
    
           
                   return [
                        'title'        =>    'hehehe',
                        'description'        =>    'hahahaa',
                        'time_limit'        =>    '60',
                        
                        
                   ];
                
            }
        }
    
