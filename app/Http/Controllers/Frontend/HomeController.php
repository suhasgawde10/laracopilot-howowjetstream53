<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $latestArticles = Article::where('status', 'published')
            ->orderBy('publish_date', 'desc')
            ->take(3)
            ->get();
        return view('frontend.home', compact('latestArticles'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}