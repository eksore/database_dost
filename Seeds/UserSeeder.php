<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function fake(&$faker)
    {

        
        
        return [
                
                    'first_name'        =>    'zoreen',
                    'last_name'        =>    'Parcon',
                    'username'        =>    'zp',
                    'user_type'        =>    'Student',
                    'password'    =>    'zoreenparcon',
                    'created_at'  =>    '2020-05-08 14:52:10',
                    'updated_at'  =>    '2020-05-08 14:52:10',
        ];
            
        }
    }
