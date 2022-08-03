<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->with('category')->paginate(5);
        $categories = Category::with('news')->get();
        return view('front.news', compact('news', 'categories'));
    }

    public function by_category($id)
    {
        $news = News::where("category_id", $id)->with('category')->paginate(5);
        $categories = Category::with('news')->get();
        return view('front.news', compact('news', 'categories'));
    }

    public function admin_news()
    {
        $posts = DB::table('news')->orderBy('created_at', 'desc')->get();
        return view('admin.news', compact('posts'));
    }

    public function show($id) 
    {
        $post = News::find($id);
        $recent_posts = News::orderBy('created_at', 'desc')->limit(2)->get();
        $categories = Category::all();
        return view('front.news_single', compact('post', 'categories', 'recent_posts'));
    }

    public function add_news()
    {
        $categories = Category::all();
        return view('admin.add_news', compact('categories'));
    }

    public function store(Request $request)
    {
        $post = new News;
        $post->title_tm = $request->title_tm;
        $post->description_tm = $request->description_tm;
        $post->title_ru = $request->title_ru;
        $post->description_ru = $request->description_ru;
        $post->title_en = $request->title_en;
        $post->description_en = $request->description_en;
        $post->category_id = $request->category_id;
        $post->created_at = $request->created_at;

        if ($request->hasFile('poster')) {
            $path = $request->poster->store('images');
        } else {
            $path = null;
        }
        
        $post->poster = $path;
        
        $post->save();

        return redirect()->back()->withSuccess('Täzelik döredildi!');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $post = News::find($id);
        return view('admin.news_edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id) 
    {
        $post = News::find($id);

        $post->title_tm = $request->title_tm;
        $post->description_tm = $request->description_tm;
        $post->title_ru = $request->title_ru;
        $post->description_ru = $request->description_ru;
        $post->title_en = $request->title_en;
        $post->description_en = $request->description_en;
        $post->category_id = $request->category_id;

        $post->category_id = $request->category_id;
        $post->created_at = $request->created_at;

        if ($request->hasFile('poster')) {
            $path = $request->poster->store('images');
        } else {
            $path = $post->poster;
        }
        
        $post->poster = $path;
        
        $post->save();

        return redirect()->back()->withSuccess('Täzelik üýtgedildi');
    }

    public function destroy($id)
    {
        News::destroy($id);
        return redirect()->route('admin_news')->withSuccess('Täzelik öçürildi!');
    }
}
