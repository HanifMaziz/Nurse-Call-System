<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusCall = DB::table('status')->where('StatusName', 'call')->first();
        $statusReset = DB::table('status')->where('StatusName', 'reset')->first();

        DB::table('device_mapping')->insert([
            ['DeviceStgCode' => 456, 'DeviceName' => 'Bed 1', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 457, 'DeviceName' => 'Bed 1', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 234, 'DeviceName' => 'Bed 2', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 235, 'DeviceName' => 'Bed 2', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 126, 'DeviceName' => 'Bed 3', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 127, 'DeviceName' => 'Bed 3', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 352, 'DeviceName' => 'Bed 4', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 353, 'DeviceName' => 'Bed 4', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 547, 'DeviceName' => 'Bed 5', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 548, 'DeviceName' => 'Bed 5', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 273, 'DeviceName' => 'Bed 6', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 274, 'DeviceName' => 'Bed 6', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 473, 'DeviceName' => 'Portable Handset 1', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 474, 'DeviceName' => 'Portable Handset 1', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 754, 'DeviceName' => 'Portable Handset 2', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 755, 'DeviceName' => 'Portable Handset 2', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 373, 'DeviceName' => 'Portable Handset 3', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 374, 'DeviceName' => 'Portable Handset 3', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 756, 'DeviceName' => 'Portable Handset 4', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 757, 'DeviceName' => 'Portable Handset 4', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 312, 'DeviceName' => 'Portable Handset 5', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 313, 'DeviceName' => 'Portable Handset 5', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 356, 'DeviceName' => 'Portable Handset 6', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 357, 'DeviceName' => 'Portable Handset 6', 'StatusID' => $statusReset->StatusID],
            ['DeviceStgCode' => 673, 'DeviceName' => 'Bathroom Calling', 'StatusID' => $statusCall->StatusID],
            ['DeviceStgCode' => 674, 'DeviceName' => 'Bathroom Calling', 'StatusID' => $statusReset->StatusID],
        ]);
    }
}
