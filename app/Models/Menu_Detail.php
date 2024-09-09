<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_headers_id',
        'food_id'
    ];
}
