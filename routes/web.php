<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Panel\LoginController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\SectionCampaignController;
use App\Http\Controllers\Panel\CampaignController;
use App\Http\Controllers\Panel\NewsController;
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
Route::get('campaign/{campaign_id}/detail/{detail_id}',[PageController::class,'HandleGetDetailCampaign'])->name('campaign_page.detail');
Route::get('campaign',[PageController::class,'HandleGetCampaign'])->name('campaign_page');
Route::get('new/{news_id}/detail',[PageController::class,'HandleDetailNews'])->name('news.detail');
Route::get('news/{kind_news}',[PageController::class,'HandleGetNews'])->name('news');
Route::get('about_us',[PageController::class,'HandleGetAboutUs'])->name('about_us_page');
Route::get('contact',[PageController::class,'HandleGetContact'])->name('contact_page');

Route::post('panel/section_campaign/store',[SectionCampaignController::class,'HandleStoreSection'])->name('section_campaign.store');
Route::get('panel/section_campaign/create',[SectionCampaignController::class,'HandleCreateSection'])->name('section_campaign.create');
Route::put('panel/section_campaign/{id}/update',[SectionCampaignController::class,'HandleUpdateSection'])->name('section_campaign.update');
Route::get('panel/section_campaign/{id}/delete',[SectionCampaignController::class,'HandleDeleteSection'])->name('section_campaign.delete');
Route::get('panel/section_campaign/{id}/edit',[SectionCampaignController::class,'HandleEditSection'])->name('section_campaign.edit');
Route::get('panel/section_campaign',[SectionCampaignController::class,'HandleViewSectionCampaign'])->name('section_campaign.index');

Route::get('panel/campaign',[CampaignController::class,'HandleIndexCampaign'])->name('campaign.index');
Route::get('panel/campaign/create',[CampaignController::class,'HandleCreateCampaign'])->name('campaign.create');
Route::post('panel/campaign/store',[CampaignController::class,'HandleStoreCampaign'])->name('campaign.store');
Route::get('panel/campaign/{id}/edit',[CampaignController::class,'HandleEditCampaign'])->name('campaign.edit');
Route::get('panel/campaign/{id}/delete',[CampaignController::class,'HandleDeleteCampaign'])->name('campaign.delete');
Route::put('panel/campaign/{id}/update',[CampaignController::class,'HandleUpdateCampaign'])->name('campaign.update');
Route::get('panel/campaign/{id}/detail',[CampaignController::class,'HandleIndexDetail'])->name('campaign.detail.index');
Route::post('panel/campaign/detail/store',[CampaignController::class,'HandleStoreDetail'])->name('campaign.detail.store');
Route::put('panel/campaign/detail/{detail_id}/update',[CampaignController::class,'HandleUpdateDetail'])->name('campaign.detail.update');
Route::get('panel/campaign/{campaign_id}/detail/create',[CampaignController::class,'HandleCreateDetail'])->name('campaign.detail.create');
Route::get('panel/campaign/{campaign_id}/detail/{detail_id}/delete',[CampaignController::class,'HandleDeleteDetail'])->name('campaign.detail.delete');
Route::get('panel/campaign/{campaign_id}/detail/{detail_id}/files',[CampaignController::class,'HandleFilesDetail'])->name('campaign.detail.files');
Route::post('panel/campaign/{campaign_id}/detail/{detail_id}/files',[CampaignController::class,'HandleStoreFileDetail'])->name('campaign.detail.files_store');
Route::get('panel/campaign/{campaign_id}/detail/{detail_id}/edit',[CampaignController::class,'HandleEditDetail'])->name('campaign.detail.edit');
Route::get('panel/campaign/{campaign_id}/detail/{detail_id}/files/{file_id}',[CampaignController::class,'HandleDeleteFileDetail'])->name('campaign.detail.files_delete');


Route::get('panel/news',[NewsController::class,'HandleIndexNews'])->name('news.index');
Route::get('panel/news/create',[NewsController::class,'HandleCreateNews'])->name('news.create');
Route::post('panel/news/store',[NewsController::class,'HandleStoreNews'])->name('news.store');
Route::put('panel/news/{id_news}/update',[NewsController::class,'HandleUpdateNews'])->name('news.update');
Route::get('panel/news/{id_news}/edit',[NewsController::class,'HandleEditNews'])->name('news.edit');
Route::get('panel/news/{id}/delete',[NewsController::class,'HandleDeleteNews'])->name('news.delete');
Route::get('panel/news/{id}/files',[NewsController::class,'HandleGetFilesNews'])->name('news.files');
Route::post('panel/news/{id}/files',[NewsController::class,'HandleStoreFilesNews'])->name('news.files_store');
Route::get('panel/news/{id}/files/{file_id}',[NewsController::class,'HandleDeleteFileNews'])->name('news.files_delete');



Route::get('login',[LoginController::class,'HandleViewLogin'])->name('login');
Route::get('panel',[PanelController::class,'HandleViewPanel'])->name('panel');
Route::post('auth',[LoginController::class,'HandleLoginAuth'])->name('auth');





