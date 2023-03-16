<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuestionSeeder extends Seeder
{
   
        public function fake(Generator &$faker)
        {
    
           
                   return [
                        'question'        =>    $faker->question,
                        'choice1'        =>    $faker->choice1,
                        'choice2'        =>    $faker->choice2,
                        'choice3'        =>    $faker->choice3,
                        'choice4'        =>    $faker->choice4,
                        'answer'        =>    $faker->answer,
                        
                        
                   ];
                
            }
        }
    
