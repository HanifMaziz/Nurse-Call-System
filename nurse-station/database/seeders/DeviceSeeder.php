<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    public function run()
    {
        $deviceStatus = DB::table('status')->where('StatusID', 2)->first();

        DB::table('device')->insert([
            [
                'DeviceName' => 'Bed 1',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Bed 2',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Bed 3',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Bed 4',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Bed 5',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Bed 6',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Portable Handset 1',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Portable Handset 2',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Portable Handset 3',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Portable Handset 4',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Portable Handset 5',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Portable Handset 6',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'DeviceName' => 'Bathroom Calling',
                'StatusID' => $deviceStatus->StatusID, // 0 = reset
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
