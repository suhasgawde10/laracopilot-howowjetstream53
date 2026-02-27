@extends('layouts.app')
@section('title', 'About Us — LexCore Legal Advisory')
@section('content')

<!-- Page Header -->
<section class="bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm">Who We Are</span>
        <h1 class="text-5xl font-extrabold text-white mt-3 mb-4">About LexCore Legal</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Over 25 years of providing trusted legal counsel to clients across industries and disciplines.</p>
        <div class="flex items-center justify-center gap-2 mt-6 text-sm text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
            <span>/</span>
            <span class="text-white">About Us</span>
        </div>
    </div>
</section>

<!-- Company Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">Our Story</span>
                <h2 class="section-title mt-2">Building a Legacy of Legal Excellence</h2>
                <p class="text-gray-600 leading-relaxed mb-4">LexCore Legal Advisory was founded in 1998 by a group of distinguished attorneys who shared a common vision: to create a law firm that combines the highest standards of legal expertise with a genuine commitment to client service.</p>
                <p class="text-gray-600 leading-relaxed mb-4">What began as a small practice focused on corporate law has grown into a full-service legal advisory firm with over 48 attorneys across six specialized practice areas. Today, LexCore represents clients ranging from individuals and small businesses to Fortune 500 companies and international organizations.</p>
                <p class="text-gray-600 leading-relaxed mb-6">Throughout our growth, we have maintained our founding commitment: to deliver exceptional legal services with integrity, innovation, and an unwavering focus on client success.</p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="border-l-4 border-[#1F365C] pl-4">
                        <p class="text-3xl font-extrabold text-[#1F365C]">1998</p>
                        <p class="text-gray-500 text-sm">Year Founded</p>
                    </div>
                    <div class="border-l-4 border-yellow-400 pl-4">
                        <p class="text-3xl font-extrabold text-[#1F365C]">48</p>
                        <p class="text-gray-500 text-sm">Expert Attorneys</p>
                    </div>
                    <div class="border-l-4 border-[#1F365C] pl-4">
                        <p class="text-3xl font-extrabold text-[#1F365C]">1,200+</p>
                        <p class="text-gray-500 text-sm">Cases Handled</p>
                    </div>
                    <div class="border-l-4 border-yellow-400 pl-4">
                        <p class="text-3xl font-extrabold text-[#1F365C]">15</p>
                        <p class="text-gray-500 text-sm">Countries Served</p>
                    </div>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100">
                    <i class="fas fa-award text-[#1F365C] text-3xl mb-4"></i>
                    <h3 class="font-bold text-[#1F365C] text-xl mb-2">Award-Winning Firm</h3>
                    <p class="text-gray-600">Recognized by leading legal publications as one of the top advisory firms in the region for five consecutive years.</p>
                </div>
                <div class="bg-[#1F365C] rounded-2xl p-8 text-white">
                    <i class="fas fa-handshake text-yellow-400 text-3xl mb-4"></i>
                    <h3 class="font-bold text-xl mb-2">Client-Centered Approach</h3>
                    <p class="text-gray-300">We treat every client relationship as a long-term partnership, built on trust, transparency, and results.</p>
                </div>
                <div class="bg-yellow-50 rounded-2xl p-8 border border-yellow-200">
                    <i class="fas fa-globe text-yellow-600 text-3xl mb-4"></i>
                    <h3 class="font-bold text-[#1F365C] text-xl mb-2">Global Reach</h3>
                    <p class="text-gray-600">With partners in 15 countries, we provide seamless legal support for cross-border transactions and international disputes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">Our Purpose</span>
            <h2 class="section-title mt-2">Vision &amp; Mission</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="bg-white rounded-3xl p-10 shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[#1F365C]/5 rounded-bl-full"></div>
                <div class="w-16 h-16 bg-[#1F365C] rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-[#1F365C] mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed mb-4">To be the most trusted legal advisory firm in the region, recognized for our commitment to justice, ethical standards, and transformative legal solutions that empower our clients to achieve their highest aspirations.</p>
                <p class="text-gray-600 leading-relaxed">We envision a world where every individual and organization has access to exceptional legal counsel that protects their rights, advances their interests, and upholds the principles of fairness and equity.</p>
            </div>
            <div class="bg-[#1F365C] rounded-3xl p-10 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-bl-full"></div>
                <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-bullseye text-[#1F365C] text-2xl"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-white mb-4">Our Mission</h3>
                <p class="text-gray-300 leading-relaxed mb-4">To deliver personalized, high-quality legal services that consistently exceed our clients' expectations. We accomplish this through continuous investment in our attorneys' expertise, a culture of collaboration and innovation, and an uncompromising commitment to ethical practice.</p>
                <p class="text-gray-300 leading-relaxed">We are dedicated to making the legal process transparent, accessible, and effective for every client we serve, regardless of the complexity of their legal challenges.</p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
            @php
            $values = [
                ['icon'=>'fas fa-shield-alt','title'=>'Integrity','desc'=>'We uphold the highest ethical standards in everything we do.'],
                ['icon'=>'fas fa-star','title'=>'Excellence','desc'=>'We relentlessly pursue the best outcomes for our clients.'],
                ['icon'=>'fas fa-heart','title'=>'Compassion','desc'=>'We treat every client with empathy and genuine care.'],
                ['icon'=>'fas fa-lightbulb','title'=>'Innovation','desc'=>'We embrace creative approaches to solve complex challenges.']
            ];
            @endphp
            @foreach($values as $v)
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <div class="w-12 h-12 bg-[#1F365C]/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="{{ $v['icon'] }} text-[#1F365C] text-xl"></i>
                </div>
                <h4 class="font-bold text-[#1F365C] mb-2">{{ $v['title'] }}</h4>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $v['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
