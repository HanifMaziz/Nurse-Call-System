<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('status')->insert([
            ['StatusName' => 'Call'],
            ['StatusName' => 'Reset']
        ]);
    }
}
