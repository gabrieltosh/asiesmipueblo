<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionCampaign extends Model
{
    protected $table='section_campaigns';
    protected $fillable=[
        'name',
        'description',
        'priority'
    ];
}
