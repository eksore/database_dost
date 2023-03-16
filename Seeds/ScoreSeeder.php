<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ScoreSeeder extends Seeder
{
   
        public function fake(Generator &$faker)
        {
    
           
                   return [
                        'datetime_start'        =>    '2020-05-08 14:52:10',
                        'datetime_end'        =>   '2020-05-08 14:52:10',
                        'score'        =>   '10',
                        'details'        =>    'congrats',
                        
                        
                   ];
                
            }
        }
    
