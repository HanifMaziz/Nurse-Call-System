<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMapping extends Model
{
    use HasFactory;

    protected $table = 'device_mapping';
    protected $primaryKey = 'DeviceID';

    protected $fillable = [
        'DeviceDataInteger',
        'DeviceName',
        'StatusID',
    ];

    public $timestamps = false;

    /**
     * Relationship with DeviceStatus
     */
    public function status()
    {
        return $this->belongsTo(DeviceStatus::class, 'StatusID', 'StatusID');
    }

    /**
     * Relationship with DeviceLog
     */
    public function logs()
    {
        return $this->hasMany(Device::class, 'DeviceID', 'DeviceID');
    }
}
