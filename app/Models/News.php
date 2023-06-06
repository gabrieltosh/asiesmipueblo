<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class News extends Model
{
    protected $table='news';
    protected $fillable=[
        'title',
        'type',
        'resource_name',
        'new_date',
        'views',
        'kind_news',
        'description'
    ];
    protected $appends = ['campaign_date_humans','campaign_date_year','campaign_date_day','campaign_date_month'];
    public function files(){
        return $this->hasMany(FilesNews::class,'news_id','id');
    }
    public function getCampaignDateHumansAttribute()
    {
        Date::setLocale('es');
        return ucwords(Date::parse($this->new_date)->format('F j, Y'));
    }
    public function getCampaignDateYearAttribute()
    {
        Date::setLocale('es');
        return Date::parse($this->new_date)->format('Y');
    }
    public function getCampaignDateDayAttribute()
    {
        Date::setLocale('es');
        return Date::parse($this->new_date)->format('j');
    }
    public function getCampaignDateMonthAttribute()
    {
        Date::setLocale('es');
        return strtoupper(substr(Date::parse($this->new_date)->format('F'),0,3));
    }
}
