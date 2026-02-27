@extends('layouts.admin')
@section('title', 'Articles & News')
@section('page-title', 'Articles & News')
@section('content')
<div class="flex justify-between items-center mb-6">
    <p class="text-gray-500">Manage all articles and news content.</p>
    <a href="{{ route('admin.articles.create') }}" class="bg-[#1F365C] text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-[#152540] transition flex items-center gap-2">
        <i class="fas fa-plus"></i> Add New Article
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Category</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Publish Date</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Author</th>
                <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse($articles as $article)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        @if($article->thumbnail)
                            <img src="{{ asset('storage/'.$article->thumbnail) }}" class="w-10 h-10 rounded-lg object-cover" alt="">
                        @else
                            <div class="w-10 h-10 bg-[#1F365C]/10 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-alt text-[#1F365C] text-sm"></i>
                            </div>
                        @endif
                        <div>
                            <p class="font-medium text-gray-800 text-sm max-w-xs truncate">{{ $article->title }}</p>
                            @if($article->tags)
                            <p class="text-xs text-gray-400 mt-0.5 truncate max-w-xs">{{ $article->tags }}</p>
                            @endif
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $article->category === 'News' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">
                        {{ $article->category }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $article->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                        {{ ucfirst($article->status) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-gray-600">{{ $article->publish_date->format('M d, Y') }}</td>
                <td class="px-6 py-4 text-sm text-gray-600">{{ $article->author }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('articles.show', $article->slug) }}" target="_blank" class="text-gray-400 hover:text-[#1F365C] transition p-1.5 rounded" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-gray-400 hover:text-[#1F365C] transition p-1.5 rounded" title="Edit">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this article? This action cannot be undone.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-400 hover:text-red-500 transition p-1.5 rounded" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-12 text-center">
                    <i class="fas fa-file-alt text-gray-300 text-4xl mb-3 block"></i>
                    <p class="text-gray-500">No articles found. <a href="{{ route('admin.articles.create') }}" class="text-[#1F365C] hover:underline">Create your first article.</a></p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @if($articles->hasPages())
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $articles->links() }}
    </div>
    @endif
</div>
@endsection
