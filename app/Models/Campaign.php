<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table='campaigns';
    protected $fillable=[
        'name',
        'donations'
    ];
}
