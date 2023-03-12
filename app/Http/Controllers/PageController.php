<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HandleGetHome(){
        return view('pages.home');
    }
    public function HandleGetAboutUs(){
        return view('pages.about_us');
    }
    public function HandleGetContact(){
        return view('pages.contact');
    }
    public function handleGetCampaign(){
        return view('pages.campaign');
    }
    public function handleGetDetailCampaign(){
        return view('pages.detail-campaign');
    }
}
