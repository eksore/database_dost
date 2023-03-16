<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use App\Models\User;

class AttendeeSeeder extends Seeder
{
    public function fake(Generator &$faker)
    {

       
               return [
                    'firstname'        =>    'zoreen',
                    'middlename'        =>    'G',
                    'lastname'        =>    'Parcon',
                    'sex'        =>    'Male',
                    'qrcode'        =>    $faker->qrcode,
                    'email'       =>   'zoreenparcon@hehe.com',
                    'contact_num'       =>    '09067183041',
                    'address'     =>    'Iloilo City',
                    'age'     =>    '23',
                    
               ];
            
        }
    }