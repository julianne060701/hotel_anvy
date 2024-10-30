<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'date',
        'total_cost',
        'status',
        'type',
        'time',
        'Pts. Earned'
    ];
}
