<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function HandleIndexNews()
    {
        $data=News::orderBy('id','desc')->get();
        return view('panel.pages.news.index',compact('data'));
    }
}
