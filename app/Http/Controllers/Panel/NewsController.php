<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

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
    public function HandlStoreNews(Request $request)
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
                'resource_name' => $request->resource_name,
                'new_date' => $request->new_date,
                'views' => $request->views,
                'kind_news' => $request->kind_news,
                'description' => $request->description
            ]);
        }
    }
}
