<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    // Define the table name (if different from the plural of the model name)
    protected $table = 'status';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'StatusName',
    ];

    // You can also define relationships if needed
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}

