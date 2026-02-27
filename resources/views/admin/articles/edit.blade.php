@extends('layouts.admin')
@section('title', 'Edit Article')
@section('page-title', 'Edit Article')
@section('content')
<div class="max-w-4xl">
    <div class="bg-white rounded-xl shadow-sm p-8">
        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Article Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $article->title) }}" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Category <span class="text-red-500">*</span></label>
                    <select name="category" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                        <option value="Article" {{ old('category', $article->category) === 'Article' ? 'selected' : '' }}>Article</option>
                        <option value="News" {{ old('category', $article->category) === 'News' ? 'selected' : '' }}>News</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Status <span class="text-red-500">*</span></label>
                    <select name="status" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                        <option value="draft" {{ old('status', $article->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $article->status) === 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Publish Date <span class="text-red-500">*</span></label>
                    <input type="date" name="publish_date" value="{{ old('publish_date', $article->publish_date->format('Y-m-d')) }}" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Tags</label>
                    <input type="text" name="tags" value="{{ old('tags', $article->tags) }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                        placeholder="corporate law, business, compliance">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Thumbnail Image</label>
                    @if($article->thumbnail)
                        <div class="mb-3 flex items-center gap-4">
                            <img src="{{ asset('storage/'.$article->thumbnail) }}" class="h-20 w-32 object-cover rounded-lg border" alt="Current thumbnail">
                            <p class="text-sm text-gray-500">Current thumbnail. Upload a new image to replace it.</p>
                        </div>
                    @endif
                    <input type="file" name="thumbnail" accept="image/*"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                    <p class="text-xs text-gray-400 mt-1">Leave blank to keep current image. Max 2MB.</p>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Description / Content <span class="text-red-500">*</span></label>
                    <textarea name="description" rows="14" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm font-mono">{{ old('description', $article->description) }}</textarea>
                </div>
            </div>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                <a href="{{ route('admin.articles.index') }}" class="text-gray-600 hover:text-gray-800 text-sm flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Articles
                </a>
                <button type="submit" class="bg-[#1F365C] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152540] transition text-sm flex items-center gap-2">
                    <i class="fas fa-save"></i> Update Article
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
