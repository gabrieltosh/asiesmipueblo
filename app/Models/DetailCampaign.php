<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCampaign extends Model
{
    protected $table='detail_campaigns';
    protected $fillable=[
        'title',
        'type',
        'resource_name',
        'campaign_date',
        'section_id',
        'campaign_id',
        'description'
    ];
}
