<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class RssFeedController extends Controller
{
    public function generate_rss_feed()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return response()->view('feed', compact('news'))->header('Content-Type', 'application/xml');
    }
}
