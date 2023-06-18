<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\FilesNews;

class NewsController extends Controller
{
    public function HandleIndexNews()
    {
        $data = News::orderBy('id', 'desc')->get();
        return view('panel.pages.news.index', compact('data'));
    }
    public function HandleCreateNews()
    {
        return view('panel.pages.news.create');
    }
    public function HandleStoreNews(Request $request)
    {
        if ($request->type == 'image') {
            $imageName = time() . '.' . $request->resource_name_file->extension();
            $request->resource_name_file->move(public_path('assets/images/news'), $imageName);
            News::create([
                'title' => $request->title,
                'type' => $request->type,
                'resource_name' => $imageName,
                'new_date' => $request->new_date,
                'views' => $request->views,
                'kind_news' => $request->kind_news,
                'description' => $request->description
            ]);
        }
        if ($request->type == 'video') {
            News::create([
                'title' => $request->title,
                'type' => $request->type,
                'resource_name' => $request->resource_name_file,
                'new_date' => $request->new_date,
                'views' => $request->views,
                'kind_news' => $request->kind_news,
                'description' => $request->description
            ]);
        }
        return redirect()->route('news.index');
    }
    public function HandleEditNews($id_news){
        $new=News::where('id',$id_news)->first();
        return view('panel.pages.news.edit',compact('new'));
    }
    public function HandleUpdateNews($id_news, Request $request){
        if($request->type=='image'){
            if(is_null($request->resource_name_file))
            {
                News::findOrFail($id_news)->fill([
                    'title'=>$request->title,
                    'type'=>$request->type,
                    'new_date'=>$request->new_date,
                    'kind_news'=>$request->kind_news,
                    'description'=>$request->description
                ])->save();
            }else{
                $imageName = time().'.'.$request->resource_name_file->extension();
                $request->resource_name_file->move(public_path('assets/images/news'), $imageName);
                News::findOrFail($id_news)->fill([
                    'title'=>$request->title,
                    'type'=>$request->type,
                    'resource_name'=>$imageName,
                    'new_date'=>$request->new_date,
                    'kind_news'=>$request->kind_news,
                    'description'=>$request->description
                ])->save();
            }
        }
        if($request->type=='video'){
            News::findOrFail($id_news)->fill([
                'title'=>$request->title,
                'type'=>$request->type,
                'resource_name'=>$request->resource_name_text,
                'new_date'=>$request->new_date,
                'kind_news'=>$request->kind_news,
                'description'=>$request->description
            ])->save();
        }
        return redirect()->route('news.index');
    }
    public function HandleDeleteNews($id_news){
        News::findOrFail($id_news)->delete();
        return redirect()->route('news.index');
    }
    public function HandleGetFilesNews($id_news){
        $files=FilesNews::where('news_id',$id_news)->get();
        return view('panel.pages.news.files',compact('files','id_news'));
    }
    public function HandleStoreFilesNews($new_id,Request $request){
        $files = [];
        if ($request->file('files')){
            foreach($request->file('files') as $key => $file)
            {
                $fileName = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('assets/images/news'), $fileName);
                $files[]['name'] = $fileName;
            }
        }

        foreach ($files as $key => $file) {
            FilesNews::create([
                'name'=>$file["name"],
                'news_id'=>$new_id
            ]);
        }
        return redirect()->route('news.files',[$new_id]);
    }
    public function HandleDeleteFileNews($new_id,$file_id){
        FilesNews::findOrFail($file_id)->delete();
        return redirect()->route('news.files',[$new_id]);
    }
}
