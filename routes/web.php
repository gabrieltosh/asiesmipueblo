<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PageController::class,'HandleGetHome'])->name('home_page');
Route::get('campaign',[PageController::class,'HandleGetCampaign'])->name('campaign_page');
Route::get('about_us',[PageController::class,'HandleGetAboutUs'])->name('about_us_page');
Route::get('contact',[PageController::class,'HandleGetContact'])->name('contact_page');

