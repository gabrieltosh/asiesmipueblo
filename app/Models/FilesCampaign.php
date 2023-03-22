<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilesCampaign extends Model
{
    protected $table='files_campaigns';
    protected $fillable=[
        'name',
        'detail_campaign_id'
    ];
}
