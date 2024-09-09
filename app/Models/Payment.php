<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'booking_header_id',
        'Total_Cost',
        'date',
        'Status',
        'Mode_Payment',
        'ReferenceNumber'
    ];
}
