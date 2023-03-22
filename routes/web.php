<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Panel\LoginController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\SectionCampaignController;
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
Route::get('detail-campaign',[PageController::class,'handleGetDetailCampaign'])->name('detail-campaign');

Route::post('panel/section_campaign/store',[SectionCampaignController::class,'HandleStoreSection'])->name('section_campaign.store');
Route::get('panel/section_campaign/create',[SectionCampaignController::class,'HandleCreateSection'])->name('section_campaign.create');
Route::put('panel/section_campaign/{id}/update',[SectionCampaignController::class,'HandleUpdateSection'])->name('section_campaign.update');
Route::get('panel/section_campaign/{id}/delete',[SectionCampaignController::class,'HandleDeleteSection'])->name('section_campaign.delete');
Route::get('panel/section_campaign/{id}/edit',[SectionCampaignController::class,'HandleEditSection'])->name('section_campaign.edit');
Route::get('panel/section_campaign',[SectionCampaignController::class,'HandleViewSectionCampaign'])->name('section_campaign.index');



Route::get('login',[LoginController::class,'HandleViewLogin'])->name('login');
Route::get('panel',[PanelController::class,'HandleViewPanel'])->name('panel');
Route::post('auth',[LoginController::class,'HandleLoginAuth'])->name('auth');





