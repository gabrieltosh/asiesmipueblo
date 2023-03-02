<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HandleGetHome(){
        return view('under-construction');
    }
    public function HandleGetHome2(){
        return view('home2');
    }
    public function HandleGetAboutUs(){

    }
    public function HandleGetContact(){

    }
    public function handleGetCampaign(){

    }
}
