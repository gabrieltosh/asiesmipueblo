<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionCampaign;
class SectionCampaignController extends Controller
{
    public function HandleViewSectionCampaign(){
        $data=SectionCampaign::orderBy('priority','asc')->get();
        return view('panel/pages/section_campaign/index',compact('data'));
    }
    public function HandleDeleteSection($id){
        SectionCampaign::findOrFail($id)->delete();
        return redirect()->route('section_campaign.index');
    }
    public function HandleCreateSection(){
        return view('panel/pages/section_campaign/create');
    }
    public function HandleStoreSection(Request $request){
        SectionCampaign::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'priority'=>$request->priority
        ]);
        return redirect()->route('section_campaign.index');
    }
    public function HandleEditSection($id){
        $section=SectionCampaign::where('id',$id)->first();
        return view('panel/pages/section_campaign/edit',compact('section'));
    }
    public function HandleUpdateSection($id,Request $request){
        SectionCampaign::findOrFail($request->id)->fill([
            'name'=>$request->name,
            'description'=>$request->description,
            'priority'=>$request->priority
        ])->save();
        return redirect()->route('section_campaign.index');
    }
}
