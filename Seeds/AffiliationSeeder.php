<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use App\Models\User;

class AffiliationSeeder extends Seeder
{
    public function fake(Generator &$faker)
    {

       
               return [
                    'affiliation' => 'WVSU',
                    'affiliation_type' =>'Student'
               ];
            
        }
    }