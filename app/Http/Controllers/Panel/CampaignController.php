<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\DetailCampaign;
use App\Models\SectionCampaign;
use App\Models\FilesCampaign;

class CampaignController extends Controller
{
    public function HandleIndexCampaign(){
        $data=Campaign::orderBy('id','desc')->get();
        return view('panel.pages.campaign.index',compact('data'));
    }
    public function HandleCreateCampaign(){
        return view('panel.pages.campaign.create');
    }
    public function HandleStoreCampaign(Request $request){
        Campaign::create([
            'name'=>$request->name
        ]);
        return redirect()->route('campaign.index');
    }
    public function HandleEditCampaign($id){
        $data=Campaign::where('id',$id)->first();
        return view('panel.pages.campaign.edit',compact('data'));
    }
    public function HandleUpdateCampaign($id,Request $request){
        Campaign::findOrFail($id)->fill([
            'name'=>$request->name
        ])->save();
        return redirect()->route('campaign.index');
    }
    public function HandleDeleteCampaign($id){
        Campaign::findOrFail($id)->delete();
        return redirect()->route('campaign.index');
    }
    public function HandleIndexDetail($id){
        $group=Campaign::where('id',$id)->first();
        $campaigns=DetailCampaign::where('campaign_id',$id)->with('section')->orderBy('campaign_date','desc')->get();
        return view('panel.pages.campaign.detail.index',compact('group','campaigns'));
    }
    public function HandleCreateDetail($id){
        $sections=SectionCampaign::orderBy('priority','asc')->get();
        $group=Campaign::where('id',$id)->first();
        return view('panel.pages.campaign.detail.create',compact('sections','group'));
    }
    public function HandleStoreDetail(Request $request){
        if($request->type=='image'){
            $imageName = time().'.'.$request->resource_name_file->extension();
            $request->resource_name_file->move(public_path('assets/images/campaign'), $imageName);
            DetailCampaign::create([
                'title'=>$request->title,
                'type'=>$request->type,
                'resource_name'=>$imageName,
                'campaign_date'=>$request->campaign_date,
                'section_id'=>$request->section_id,
                'campaign_id'=>$request->campaign_id,
                'description'=>$request->description
            ]);
        }
        if($request->type=='video'){
            DetailCampaign::create([
                'title'=>$request->title,
                'type'=>$request->type,
                'resource_name'=>$request->resource_name_text,
                'campaign_date'=>$request->campaign_date,
                'section_id'=>$request->section_id,
                'campaign_id'=>$request->campaign_id,
                'description'=>$request->description
            ]);
        }
        return redirect()->route('campaign.detail.index',$request->campaign_id);
    }
    public function HandleDeleteDetail($campaign_id,$detail_id){
        DetailCampaign::findOrFail($detail_id)->delete();
        return redirect()->route('campaign.detail.index',$campaign_id);
    }
    public function HandleEditDetail($campaign_id,$detail_id){
        $campaign=DetailCampaign::where('id',$detail_id)->first();
        $group=Campaign::where('id',$campaign_id)->first();
        $sections=SectionCampaign::orderBy('priority','asc')->get();
        return view('panel.pages.campaign.detail.edit',compact('campaign','group','sections'));
    }
    public function HandleUpdateDetail($detail_id,Request $request){
        if($request->type=='image'){
            if(is_null($request->resource_name_file))
            {
                DetailCampaign::findOrFail($detail_id)->fill([
                    'title'=>$request->title,
                    'type'=>$request->type,
                    'campaign_date'=>$request->campaign_date,
                    'section_id'=>$request->section_id,
                    'campaign_id'=>$request->campaign_id,
                    'description'=>$request->description
                ])->save();
            }else{
                $imageName = time().'.'.$request->resource_name_file->extension();
                $request->resource_name_file->move(public_path('assets/images/campaign'), $imageName);
                DetailCampaign::findOrFail($detail_id)->fill([
                    'title'=>$request->title,
                    'type'=>$request->type,
                    'resource_name'=>$imageName,
                    'campaign_date'=>$request->campaign_date,
                    'section_id'=>$request->section_id,
                    'campaign_id'=>$request->campaign_id,
                    'description'=>$request->description
                ])->save();
            }
        }
        if($request->type=='video'){
            DetailCampaign::findOrFail($detail_id)->fill([
                'title'=>$request->title,
                'type'=>$request->type,
                'resource_name'=>$request->resource_name_text,
                'campaign_date'=>$request->campaign_date,
                'section_id'=>$request->section_id,
                'campaign_id'=>$request->campaign_id,
                'description'=>$request->description
            ])->save();
        }
        return redirect()->route('campaign.detail.index',$request->campaign_id);
    }
    public function HandleFilesDetail($campaign_id,$detail_id){
        $group=Campaign::where('id',$campaign_id)->first();
        $files=FilesCampaign::where('detail_campaign_id',$detail_id)->get();
        return view('panel.pages.campaign.detail.files',compact('group','detail_id','files'));
    }
    public function HandleStoreFileDetail($campaign_id,$detail_id,Request $request){
        $imageName = time().'.'.$request->name->extension();
        $request->name->move(public_path('assets/images/campaign'), $imageName);
        FilesCampaign::create([
            'name'=>$imageName,
            'detail_campaign_id'=>$detail_id
        ]);
        return redirect()->route('campaign.detail.files',[$campaign_id,$detail_id]);
    }
    public function HandleDeleteFileDetail($campaign_id,$detail_id,$file_id){
        FilesCampaign::findOrFail($file_id)->delete();
        return redirect()->route('campaign.detail.files',[$campaign_id,$detail_id]);
    }
}

