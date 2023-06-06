<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilesNews extends Model
{
    protected $table='files_news';
    protected $fillable=[
        'name',
        'news_id'
    ];
}
