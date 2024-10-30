<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'unit',
        'capacity',
        'bed_type_id',
        'rate',
        'status',
        'Pts_earned',
        'Pts_value',
        'room_type',
        'room_number',
        'room_image'
    ];

    //This is how you make an inner join
    public function getBedType(){
        return $this->belongsTo(Bed_Type::class, 'bed_type_id');
    }

}
