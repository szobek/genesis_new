<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function news_view()
    {
       $newsList = News::all();
// dd($news->content);
        return view('pages.news.index', compact('newsList'));
    }

    public function news_details_view($id)
    {
        $news = News::findOrFail($id);
        return view('pages.news.details', compact('news'));
    }
}
