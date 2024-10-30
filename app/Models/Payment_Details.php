<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Details extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_header_id',
        'Qty',
        'points'
    ];
}
