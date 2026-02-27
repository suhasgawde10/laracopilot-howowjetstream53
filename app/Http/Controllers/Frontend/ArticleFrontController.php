<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleFrontController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::where('status', 'published')->orderBy('publish_date', 'desc');

        if ($request->has('category') && in_array($request->category, ['News', 'Article'])) {
            $query->where('category', $request->category);
        }

        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('tags', 'like', '%' . $request->search . '%');
            });
        }

        $articles = $query->paginate(6);
        return view('frontend.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->where('status', 'published')->firstOrFail();
        $related = Article::where('category', $article->category)
            ->where('status', 'published')
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();
        return view('frontend.articles.show', compact('article', 'related'));
    }
}