<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PageController extends Controller
{
    public function home_page()
    {
        $posts = News::orderBy('created_at', 'desc')->limit(2)->get();
        return view('front.index', compact('posts'));
    }

    public function about_page()
    {
        return view('front.about');
    }

    public function services_page()
    {
        return view('front.services');
    }

    public function contact_page()
    {
        return view('front.contact');
    }

    public function request_page()
    {
        return view('front.request');
    }

    public function news_page()
    {
        return 'This is news page';
    }
    
}
