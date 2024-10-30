<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'card_type',
        'points_earned',
        'date_expiration',
        'date_acquired'
    ];
}
