<?php

namespace Module\Alarm\database\seeders;

use Illuminate\Database\Seeder;
use Module\Alarm\Models\Alarm;

class AlarmSeeder extends Seeder
{
    public function run()
    {
        Alarm::create([
            'source' => "isna.ir",
            'type' => 0,
            'user_id' => 1
        ]);

        Alarm::create([
            'source' => "instagram",
            'type' => 1,
            'user_id' => 1
        ]);

        Alarm::create([
            'source' => "x",
            'type' => 2,
            'user_id' => 1
        ]);
    }
}
