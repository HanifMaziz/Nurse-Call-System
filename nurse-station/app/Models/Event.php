<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Define the table name (if different from the plural of the model name)
    protected $table = 'event';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'DeviceID',
        'StatusID',
        'TimeStamp',
        'Duration',
    ];

    // Define the relationship with the Status model
    public function status()
    {
        return $this->belongsTo(Status::class, 'StatusID', 'StatusID'); // Specify foreign key and local key
    }

    // Define the relationship with the Device model
   // In Event model
    public function device()
    {
        return $this->belongsTo(Device::class, 'DeviceID', 'DeviceID');
    }

}
