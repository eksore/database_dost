<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use App\Models\Events;

class EventsSeeder extends Seeder
{
    public function run()
    {

        $user = new Events;
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
          $user->save(
                [
                    'date_start'  =>    '2023-10-10',
                    'date_end'  =>    '2023-10-10',
                    'event_name'    =>   'sample',
            
                    'venue'    =>   'sample',
                    'banner_img'    =>   'sample',
                    'qr_code'    =>   'sample',
                ]
            );
        }
    }
}