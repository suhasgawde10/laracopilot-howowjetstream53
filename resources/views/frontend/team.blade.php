@extends('layouts.app')
@section('title', 'Our Team — LexCore Legal Advisory')
@section('content')

<section class="bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm">The People Behind LexCore</span>
        <h1 class="text-5xl font-extrabold text-white mt-3 mb-4">Our Expert Team</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Experienced attorneys dedicated to providing exceptional legal counsel and achieving outstanding results for our clients.</p>
        <div class="flex items-center justify-center gap-2 mt-6 text-sm text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a><span>/</span>
            <span class="text-white">Our Team</span>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        @php
        $leadership = [
            ['name'=>'Jonathan R. Harrington','title'=>'Managing Partner — Corporate & M&A','initials'=>'JH','color'=>'bg-[#1F365C]','linkedin'=>'https://linkedin.com','bio'=>'With over 30 years of experience in corporate law and mergers & acquisitions, Jonathan leads our firm with a commitment to excellence and client service. He has advised on transactions totaling over $10 billion across 20 countries.'],
            ['name'=>'Dr. Michelle A. Fontaine','title'=>'Senior Partner — Litigation & Arbitration','initials'=>'MF','color'=>'bg-purple-800','linkedin'=>'https://linkedin.com','bio'=>'Dr. Fontaine brings 25 years of courtroom experience and has successfully litigated hundreds of high-stakes commercial disputes. She is widely recognized as one of the leading commercial litigators in the region.'],
            ['name'=>'Robert T. Langley','title'=>'Partner — Intellectual Property','initials'=>'RL','color'=>'bg-blue-800','linkedin'=>'https://linkedin.com','bio'=>'Robert specializes in intellectual property law with particular expertise in patent litigation and technology licensing. He holds advanced degrees in both law and electrical engineering, giving him unique technical insight.']
        ];
        $attorneys = [
            ['name'=>'Sarah K. Chen','title'=>'Partner — Employment Law','initials'=>'SC','color'=>'bg-teal-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'Marcus J. Wellington','title'=>'Partner — Real Estate','initials'=>'MW','color'=>'bg-green-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'Priya Sharma, LLM','title'=>'Partner — Tax Law','initials'=>'PS','color'=>'bg-red-800','linkedin'=>'https://linkedin.com'],
            ['name'=>'David L. Okafor','title'=>'Associate — Corporate Law','initials'=>'DO','color'=>'bg-orange-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'Emma J. Robertson','title'=>'Associate — Contract Law','initials'=>'ER','color'=>'bg-pink-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'Thomas N. Breckinridge','title'=>'Associate — Litigation','initials'=>'TB','color'=>'bg-indigo-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'Olivia M. Hartford','title'=>'Associate — Estate Planning','initials'=>'OH','color'=>'bg-yellow-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'James C. Nakamura','title'=>'Associate — IP Law','initials'=>'JN','color'=>'bg-cyan-700','linkedin'=>'https://linkedin.com'],
            ['name'=>'Amara O. Diallo','title'=>'Associate — Employment Law','initials'=>'AD','color'=>'bg-rose-700','linkedin'=>'https://linkedin.com']
        ];
        @endphp

        <!-- Leadership -->
        <div class="text-center mb-12">
            <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">Leadership</span>
            <h2 class="section-title mt-2">Senior Partners</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            @foreach($leadership as $m)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <div class="{{ $m['color'] }} h-48 flex items-center justify-center">
                    <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center">
                        <span class="text-white text-3xl font-extrabold">{{ $m['initials'] }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-extrabold text-[#1F365C]">{{ $m['name'] }}</h3>
                    <p class="text-yellow-600 font-semibold text-sm mt-1 mb-3">{{ $m['title'] }}</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $m['bio'] }}</p>
                    <a href="{{ $m['linkedin'] }}" target="_blank" class="inline-flex items-center gap-2 text-[#1F365C] text-sm font-semibold hover:text-blue-700 transition">
                        <i class="fab fa-linkedin text-lg"></i> LinkedIn Profile
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Other Attorneys -->
        <div class="text-center mb-12">
            <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">Our Team</span>
            <h2 class="section-title mt-2">Partners &amp; Associates</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($attorneys as $m)
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 hover:shadow-md transition-all duration-300 flex items-center gap-4">
                <div class="w-14 h-14 {{ $m['color'] }} rounded-xl flex items-center justify-center flex-shrink-0">
                    <span class="text-white font-bold">{{ $m['initials'] }}</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="font-bold text-[#1F365C] text-sm">{{ $m['name'] }}</h4>
                    <p class="text-gray-500 text-xs mt-0.5 truncate">{{ $m['title'] }}</p>
                    <a href="{{ $m['linkedin'] }}" target="_blank" class="text-xs text-blue-600 hover:underline flex items-center gap-1 mt-1">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
