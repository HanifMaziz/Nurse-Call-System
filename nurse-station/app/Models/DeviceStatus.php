<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceStatus extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $primaryKey = 'StatusID';

    protected $fillable = [
        'StatusName',
    ];

    public $timestamps = false;

    /**
     * Relationship with DeviceMapping
     */
    public function mappings()
    {
        return $this->hasMany(DeviceMapping::class, 'StatusID', 'StatusID');
    }
}
