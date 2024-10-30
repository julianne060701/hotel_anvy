<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'age',
        'role_id'
    ];

    public function getRole(){
        //name.role_id = Role.id
        return $this->belongsTo(Role::class, 'role_id');
    }
}
