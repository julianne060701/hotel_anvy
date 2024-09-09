<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_headers_id',
        'menu_header_id',
        'room_id',
        'points'
    ];
}
