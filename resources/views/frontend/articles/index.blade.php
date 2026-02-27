@extends('layouts.app')
@section('title', 'Articles & News — LexCore Legal Advisory')
@section('content')

<section class="bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm">Knowledge Center</span>
        <h1 class="text-5xl font-extrabold text-white mt-3 mb-4">Articles &amp; News</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Stay informed with the latest legal insights, news, and analysis from our expert attorneys.</p>
        <div class="flex items-center justify-center gap-2 mt-6 text-sm text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a><span>/</span>
            <span class="text-white">Articles</span>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Filters -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-10">
            <form action="{{ route('articles.index') }}" method="GET" class="flex flex-wrap gap-4 items-end">
                <div class="flex-1 min-w-48">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Search</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                        placeholder="Search articles, tags...">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Category</label>
                    <select name="category" class="border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                        <option value="">All Categories</option>
                        <option value="Article" {{ request('category') === 'Article' ? 'selected' : '' }}>Articles</option>
                        <option value="News" {{ request('category') === 'News' ? 'selected' : '' }}>News</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="bg-[#1F365C] text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-[#152540] transition">
                        <i class="fas fa-search mr-1"></i> Filter
                    </button>
                    <a href="{{ route('articles.index') }}" class="bg-gray-100 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-gray-200 transition">
                        Reset
                    </a>
                </div>
            </form>
        </div>

        <!-- Articles Grid -->
        @if($articles->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-48 bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] flex items-center justify-center overflow-hidden">
                    @if($article->thumbnail)
                        <img src="{{ $article->thumbnail_url }}" class="w-full h-full object-cover" alt="{{ $article->title }}">
                    @else
                        <i class="fas fa-file-alt text-white/20 text-5xl"></i>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs px-2.5 py-1 rounded-full font-semibold {{ $article->category === 'News' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">{{ $article->category }}</span>
                        <span class="text-xs text-gray-400">{{ $article->publish_date->format('M d, Y') }}</span>
                    </div>
                    <h2 class="font-extrabold text-[#1F365C] mb-2 leading-snug line-clamp-2 text-lg">{{ $article->title }}</h2>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 flex-1">{{ $article->excerpt }}</p>
                    @if($article->tags)
                    <div class="flex flex-wrap gap-1.5 mt-3">
                        @foreach(array_slice($article->tags_array, 0, 3) as $tag)
                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">{{ $tag }}</span>
                        @endforeach
                    </div>
                    @endif
                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400">By {{ $article->author }}</span>
                        <a href="{{ route('articles.show', $article->slug) }}" class="text-[#1F365C] font-semibold text-sm hover:text-yellow-600 transition flex items-center gap-1">
                            Read More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        <div class="mt-10">{{ $articles->appends(request()->query())->links() }}</div>
        @else
        <div class="text-center py-20">
            <i class="fas fa-search text-gray-300 text-6xl mb-4 block"></i>
            <h3 class="text-xl font-bold text-gray-600 mb-2">No articles found</h3>
            <p class="text-gray-400">Try adjusting your search or filter criteria.</p>
            <a href="{{ route('articles.index') }}" class="btn-primary mt-6 inline-block">View All Articles</a>
        </div>
        @endif
    </div>
</section>
@endsection
