@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('content')
<div class="mb-6">
    <p class="text-gray-600">Welcome back, <span class="font-semibold text-[#1F365C]">{{ session('admin_user') }}</span>! Here's your content overview.</p>
</div>

<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#1F365C]">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Content</p>
                <p class="text-3xl font-bold text-[#1F365C] mt-1">{{ $totalArticles }}</p>
            </div>
            <div class="w-12 h-12 bg-[#1F365C]/10 rounded-xl flex items-center justify-center">
                <i class="fas fa-file-alt text-[#1F365C] text-xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Published</p>
                <p class="text-3xl font-bold text-green-600 mt-1">{{ $publishedArticles }}</p>
            </div>
            <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center">
                <i class="fas fa-check-circle text-green-500 text-xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Drafts</p>
                <p class="text-3xl font-bold text-yellow-600 mt-1">{{ $draftArticles }}</p>
            </div>
            <div class="w-12 h-12 bg-yellow-50 rounded-xl flex items-center justify-center">
                <i class="fas fa-pencil-alt text-yellow-500 text-xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">News Items</p>
                <p class="text-3xl font-bold text-blue-600 mt-1">{{ $newsCount }}</p>
            </div>
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                <i class="fas fa-broadcast-tower text-blue-500 text-xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-purple-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Articles</p>
                <p class="text-3xl font-bold text-purple-600 mt-1">{{ $articleCount }}</p>
            </div>
            <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                <i class="fas fa-book-open text-purple-500 text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Recent Articles + Quick Actions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h3 class="font-bold text-[#1F365C] text-lg">Recent Articles & News</h3>
            <a href="{{ route('admin.articles.index') }}" class="text-sm text-[#1F365C] hover:underline">View All</a>
        </div>
        <div class="divide-y divide-gray-50">
            @forelse($recentArticles as $article)
            <div class="px-6 py-4 flex items-center justify-between">
                <div class="flex-1 min-w-0">
                    <p class="font-medium text-gray-800 text-sm truncate">{{ $article->title }}</p>
                    <div class="flex items-center gap-3 mt-1">
                        <span class="text-xs text-gray-400">{{ $article->publish_date->format('M d, Y') }}</span>
                        <span class="text-xs px-2 py-0.5 rounded-full {{ $article->category === 'News' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">{{ $article->category }}</span>
                    </div>
                </div>
                <span class="ml-4 text-xs px-2 py-1 rounded-full {{ $article->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ ucfirst($article->status) }}
                </span>
            </div>
            @empty
            <div class="px-6 py-8 text-center text-gray-400 text-sm">No articles yet.</div>
            @endforelse
        </div>
    </div>
    <div class="space-y-4">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="font-bold text-[#1F365C] mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <a href="{{ route('admin.articles.create') }}" class="flex items-center gap-3 bg-[#1F365C] text-white px-4 py-3 rounded-lg hover:bg-[#152540] transition text-sm">
                    <i class="fas fa-plus"></i> Add New Article
                </a>
                <a href="{{ route('admin.articles.index') }}" class="flex items-center gap-3 bg-gray-100 text-gray-700 px-4 py-3 rounded-lg hover:bg-gray-200 transition text-sm">
                    <i class="fas fa-list"></i> Manage Articles
                </a>
                <a href="{{ route('articles.index') }}" target="_blank" class="flex items-center gap-3 bg-gray-100 text-gray-700 px-4 py-3 rounded-lg hover:bg-gray-200 transition text-sm">
                    <i class="fas fa-eye"></i> Preview Website
                </a>
            </div>
        </div>
        <div class="bg-[#1F365C] rounded-xl p-6 text-white">
            <h4 class="font-bold mb-2">Content Health</h4>
            <div class="space-y-2 text-sm">
                @if($totalArticles > 0)
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-300">Published Rate</span>
                        <span>{{ $totalArticles > 0 ? round(($publishedArticles/$totalArticles)*100) : 0 }}%</span>
                    </div>
                    <div class="w-full bg-white/20 rounded-full h-2">
                        <div class="bg-yellow-400 h-2 rounded-full" style="width: {{ $totalArticles > 0 ? round(($publishedArticles/$totalArticles)*100) : 0 }}%"></div>
                    </div>
                </div>
                @endif
            </div>
            <p class="text-gray-300 text-xs mt-4">Last updated: {{ now()->format('M d, Y') }}</p>
        </div>
    </div>
</div>
@endsection
