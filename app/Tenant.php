<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'firstname', 'lastname','nickname', 'gender', 'phone',
         'id_number', 'birthdate', 'email' ,'address', 'room_id'
    ];
}
