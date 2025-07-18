<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('created_at')->get();
        return Inertia::render('NewsListPage', [
            'newsList' => $news,
        ]);
    }

    public function show(Request $request, News $news)
    {
        return Inertia::render('NewsItemPage', [
            'newsItem' => $news,
        ]);
    }
}
