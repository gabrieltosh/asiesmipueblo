<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailCampaign;
use App\Models\News;

class PageController extends Controller
{
    public function HandleGetHome()
    {
        return view('pages.home');
    }
    public function HandleGetAboutUs()
    {
        return view('pages.about_us');
    }
    public function HandleGetContact()
    {
        return view('pages.contact');
    }
    public function HandleGetCampaign()
    {
        $campaigns = DetailCampaign::with('section')->select('id', 'views', 'title', 'type', 'resource_name', 'campaign_date', 'campaign_id', 'section_id')->orderBy('campaign_date', 'desc')->get();
        return view('pages.campaign', compact('campaigns'));
    }
    public function HandleGetDetailCampaign($campaign_id, $detail_id)
    {
        $campaign = DetailCampaign::where('id', $detail_id)->first();
        DetailCampaign::findOrFail($detail_id)->fill([
            'views' => (int)$campaign->views + 1
        ])->save();
        $campaigns = DetailCampaign::with('section', 'files')->where('campaign_id', $campaign_id)->get();
        return view('pages.detail-campaign', compact('campaigns', 'detail_id'));
    }
    public function HandleGetNews($king_news)
    {
        $news = News::select(
            'id',
            'title',
            'type',
            'resource_name',
            'new_date',
            'views',
            'kind_news',
            'description'
        )->where('kind_news',$king_news)
        ->orderBy('new_date', 'desc')->get();
        return view('pages.news', compact('news'));
    }
    public function HandleDetailNews($new_id){
        $new= News::where('id',$new_id)->first();
        News::findOrFail($new_id)->fill([
            'views' => (int)$new->views + 1
        ])->save();
        return view('pages.detail_news', compact('new'));

    }
}
