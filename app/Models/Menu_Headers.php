<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Headers extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'Pts',
        'Qty'
    ];
}
