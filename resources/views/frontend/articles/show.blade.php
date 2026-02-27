@extends('layouts.app')
@section('title', $article->title . ' — LexCore Legal Advisory')
@section('content')

<section class="bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] py-24">
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a><span>/</span>
            <a href="{{ route('articles.index') }}" class="hover:text-white transition">Articles</a><span>/</span>
            <span class="text-white truncate">{{ Str::limit($article->title, 40) }}</span>
        </div>
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <span class="text-xs px-3 py-1.5 rounded-full font-bold {{ $article->category === 'News' ? 'bg-blue-500 text-white' : 'bg-purple-500 text-white' }}">{{ $article->category }}</span>
            <span class="text-gray-300 text-sm"><i class="fas fa-calendar mr-1"></i>{{ $article->publish_date->format('F j, Y') }}</span>
            <span class="text-gray-300 text-sm"><i class="fas fa-user mr-1"></i>{{ $article->author }}</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight">{{ $article->title }}</h1>
        @if($article->tags)
        <div class="flex flex-wrap gap-2 mt-6">
            @foreach($article->tags_array as $tag)
            <a href="{{ route('articles.index', ['search' => $tag]) }}" class="text-xs bg-white/10 text-gray-200 hover:bg-white/20 px-3 py-1 rounded-full transition">
                #{{ $tag }}
            </a>
            @endforeach
        </div>
        @endif
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- Article Content -->
            <div class="lg:col-span-2">
                @if($article->thumbnail)
                <div class="mb-8 rounded-2xl overflow-hidden shadow">
                    <img src="{{ $article->thumbnail_url }}" class="w-full h-72 object-cover" alt="{{ $article->title }}">
                </div>
                @endif

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        {!! $article->description !!}
                    </div>

                    <div class="border-t border-gray-100 mt-8 pt-6 flex items-center justify-between flex-wrap gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-[#1F365C] rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm">{{ strtoupper(substr($article->author, 0, 1)) }}</span>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">{{ $article->author }}</p>
                                <p class="text-gray-400 text-xs">Published {{ $article->publish_date->format('F j, Y') }}</p>
                            </div>
                        </div>
                        <a href="{{ route('articles.index') }}" class="text-[#1F365C] font-semibold text-sm hover:text-yellow-600 transition flex items-center gap-2">
                            <i class="fas fa-arrow-left text-xs"></i> Back to Articles
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- CTA Box -->
                <div class="bg-[#1F365C] rounded-2xl p-6 text-white">
                    <h4 class="font-extrabold text-xl mb-3">Need Legal Advice?</h4>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">Our expert attorneys are ready to help you with your legal matter. Schedule a free consultation today.</p>
                    <a href="{{ route('contact') }}" class="block bg-yellow-400 text-[#1F365C] text-center py-3 rounded-xl font-bold text-sm hover:bg-yellow-300 transition">
                        <i class="fas fa-calendar-check mr-2"></i>Free Consultation
                    </a>
                </div>

                <!-- Related Articles -->
                @if($related->count() > 0)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h4 class="font-extrabold text-[#1F365C] mb-4">Related {{ $article->category === 'News' ? 'News' : 'Articles' }}</h4>
                    <div class="space-y-4">
                        @foreach($related as $r)
                        <a href="{{ route('articles.show', $r->slug) }}" class="flex items-start gap-3 group">
                            <div class="w-14 h-14 bg-[#1F365C]/10 rounded-lg flex-shrink-0 flex items-center justify-center overflow-hidden">
                                @if($r->thumbnail)
                                    <img src="{{ $r->thumbnail_url }}" class="w-full h-full object-cover" alt="">
                                @else
                                    <i class="fas fa-file-alt text-[#1F365C] text-sm"></i>
                                @endif
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800 group-hover:text-[#1F365C] transition line-clamp-2">{{ $r->title }}</p>
                                <p class="text-xs text-gray-400 mt-1">{{ $r->publish_date->format('M d, Y') }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Practice Areas -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h4 class="font-extrabold text-[#1F365C] mb-4">Practice Areas</h4>
                    <ul class="space-y-2">
                        @foreach(['Corporate Law','Contract Law','Intellectual Property','Employment Law','Real Estate','Estate Planning'] as $area)
                        <li><a href="{{ route('services') }}" class="flex items-center gap-2 text-sm text-gray-600 hover:text-[#1F365C] transition">
                            <i class="fas fa-chevron-right text-xs text-[#1F365C]"></i>{{ $area }}
                        </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
