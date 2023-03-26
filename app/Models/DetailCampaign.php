<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class DetailCampaign extends Model
{
    protected $table='detail_campaigns';
    protected $fillable=[
        'title',
        'type',
        'resource_name',
        'campaign_date',
        'views',
        'section_id',
        'campaign_id',
        'description'
    ];
    protected $appends = ['campaign_date_humans','campaign_date_year','campaign_date_day','campaign_date_month'];
    public function files(){
        return $this->hasMany(FilesCampaign::class,'detail_campaign_id','id');
    }
    public function section(){
        return $this->belongsTo(SectionCampaign::class,'section_id','id');
    }
    public function getCampaignDateHumansAttribute()
    {
        Date::setLocale('es');
        return ucwords(Date::parse($this->campaign_date)->format('F j, Y'));
    }
    public function getCampaignDateYearAttribute()
    {
        Date::setLocale('es');
        return Date::parse($this->campaign_date)->format('Y');
    }
    public function getCampaignDateDayAttribute()
    {
        Date::setLocale('es');
        return Date::parse($this->campaign_date)->format('j');
    }
    public function getCampaignDateMonthAttribute()
    {
        Date::setLocale('es');
        return strtoupper(substr(Date::parse($this->campaign_date)->format('F'),0,3));
    }
}
