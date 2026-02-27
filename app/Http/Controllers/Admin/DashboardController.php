<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $totalArticles = Article::count();
        $publishedArticles = Article::where('status', 'published')->count();
        $draftArticles = Article::where('status', 'draft')->count();
        $newsCount = Article::where('category', 'News')->count();
        $articleCount = Article::where('category', 'Article')->count();
        $recentArticles = Article::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalArticles', 'publishedArticles', 'draftArticles',
            'newsCount', 'articleCount', 'recentArticles'
        ));
    }
}