<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\DeviceLogUpdated;

class Device extends Model
{
    use HasFactory;

    protected $table = 'device';
    protected $primaryKey = 'DeviceID';

    protected $fillable = [
        'DeviceDataInteger',
        'DeviceID',
        'StatusID',
    ];

    public $timestamps = true;

    protected $dispatchesEvents = [
      'updated' => DeviceLogUpdated::class,
    ];

    /**
     * Relationship with DeviceMapping
     */
    public function mapping()
    {
        return $this->belongsTo(DeviceMapping::class, 'DeviceID', 'DeviceID');
    }

    /**
     * Relationship with DeviceStatus
     */
    public function status()
    {
        return $this->belongsTo(DeviceStatus::class, 'StatusID', 'StatusID');
    }
}
