<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSetting extends Model
{
    protected $fillable = [
        'name', 'status','rate', 'active'
    ];
}
