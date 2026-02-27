<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:News,Article',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'tags' => 'nullable|string',
            'publish_date' => 'required|date',
            'status' => 'required|in:published,draft'
        ]);

        $slug = Str::slug($validated['title']) . '-' . time();
        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $thumbnailPath = $file->storeAs('thumbnails', $fileName, 'public');
        }

        Article::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'description' => $validated['description'],
            'thumbnail' => $thumbnailPath,
            'tags' => $validated['tags'],
            'publish_date' => $validated['publish_date'],
            'status' => $validated['status'],
            'author' => session('admin_user')
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully!');
    }

    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:News,Article',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'tags' => 'nullable|string',
            'publish_date' => 'required|date',
            'status' => 'required|in:published,draft'
        ]);

        $slug = Str::slug($validated['title']) . '-' . $article->id;
        $thumbnailPath = $article->thumbnail;

        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            $file = $request->file('thumbnail');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $thumbnailPath = $file->storeAs('thumbnails', $fileName, 'public');
        }

        $article->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'description' => $validated['description'],
            'thumbnail' => $thumbnailPath,
            'tags' => $validated['tags'],
            'publish_date' => $validated['publish_date'],
            'status' => $validated['status']
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully!');
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $article = Article::findOrFail($id);
        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully!');
    }
}