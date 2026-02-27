@extends('layouts.app')
@section('title', 'LexCore Legal Advisory — Trusted Legal Counsel')
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-24 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block bg-yellow-400/20 text-yellow-300 border border-yellow-400/30 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                    <i class="fas fa-balance-scale mr-2"></i>Trusted Legal Advisors Since 1998
                </span>
                <h1 class="text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
                    Justice &amp; Excellence<br>
                    <span class="text-yellow-300">In Every Case</span>
                </h1>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    LexCore Legal Advisory provides comprehensive legal services to individuals, corporations, and organizations. Our experienced attorneys are committed to protecting your rights and achieving the best possible outcomes.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="btn-primary text-base"><i class="fas fa-calendar-check mr-2"></i>Free Consultation</a>
                    <a href="{{ route('services') }}" class="btn-outline border-white text-white hover:bg-white hover:text-[#1F365C] text-base">Our Services</a>
                </div>
                <div class="flex gap-10 mt-12">
                    <div class="text-center">
                        <p class="text-3xl font-extrabold text-yellow-300">25+</p>
                        <p class="text-gray-400 text-sm mt-1">Years of Experience</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-extrabold text-yellow-300">1,200+</p>
                        <p class="text-gray-400 text-sm mt-1">Cases Won</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-extrabold text-yellow-300">98%</p>
                        <p class="text-gray-400 text-sm mt-1">Client Satisfaction</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="w-full h-96 bg-white/10 rounded-3xl backdrop-blur-sm border border-white/20 flex items-center justify-center">
                        <i class="fas fa-balance-scale text-white/30 text-9xl"></i>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-[#1F365C] rounded-2xl px-6 py-4 shadow-xl">
                        <p class="font-extrabold text-2xl">1,200+</p>
                        <p class="text-sm font-semibold">Cases Successfully Handled</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Services Highlight -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">What We Do</span>
            <h2 class="section-title mt-2">Our Core Practice Areas</h2>
            <p class="section-sub max-w-2xl mx-auto">We offer a comprehensive range of legal services tailored to meet the unique needs of each client, from startups to multinational corporations.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $services = [
                ['icon'=>'fas fa-building','title'=>'Corporate Law','desc'=>'Complete legal support for businesses — from incorporation to complex M&A transactions and governance.'],
                ['icon'=>'fas fa-file-contract','title'=>'Contract Law','desc'=>'Drafting, reviewing, and negotiating contracts that protect your interests and minimize legal risk.'],
                ['icon'=>'fas fa-lightbulb','title'=>'Intellectual Property','desc'=>'Protecting your innovations through patents, trademarks, copyrights, and trade secret strategies.'],
                ['icon'=>'fas fa-users','title'=>'Employment Law','desc'=>'Advising employers and employees on workplace rights, disputes, and regulatory compliance.'],
                ['icon'=>'fas fa-home','title'=>'Real Estate Law','desc'=>'Expert guidance on property transactions, zoning issues, and real estate dispute resolution.'],
                ['icon'=>'fas fa-gavel','title'=>'Dispute Resolution','desc'=>'Strategic representation in litigation, arbitration, and mediation for favorable outcomes.']
            ];
            @endphp
            @foreach($services as $s)
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="w-14 h-14 bg-[#1F365C] rounded-xl flex items-center justify-center mb-5 group-hover:bg-yellow-400 transition-colors duration-300">
                    <i class="{{ $s['icon'] }} text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1F365C] mb-3">{{ $s['title'] }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $s['desc'] }}</p>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-[#1F365C] font-semibold text-sm mt-4 hover:text-yellow-600 transition">
                    Learn More <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Brief Introduction -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">About LexCore</span>
                <h2 class="section-title mt-2">A Legacy of Legal Excellence</h2>
                <p class="text-gray-600 leading-relaxed mb-4">Founded in 1998, LexCore Legal Advisory has grown into one of the most respected legal firms in the region. Our team of dedicated attorneys brings decades of combined experience across multiple practice areas.</p>
                <p class="text-gray-600 leading-relaxed mb-6">We believe that every client deserves personalized attention, transparent communication, and unwavering commitment to achieving their legal goals. Our approach combines deep legal expertise with a genuine understanding of our clients' business and personal objectives.</p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-[#1F365C] mt-1"></i>
                        <span class="text-gray-700 text-sm">Expert legal representation</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-[#1F365C] mt-1"></i>
                        <span class="text-gray-700 text-sm">Transparent billing practices</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-[#1F365C] mt-1"></i>
                        <span class="text-gray-700 text-sm">24/7 client support</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-[#1F365C] mt-1"></i>
                        <span class="text-gray-700 text-sm">Proven track record</span>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn-primary">Learn About Us</a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-[#1F365C] rounded-2xl p-8 text-white text-center">
                    <p class="text-5xl font-extrabold text-yellow-300">25+</p>
                    <p class="text-gray-300 mt-2">Years of Practice</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 text-center border border-gray-100">
                    <p class="text-5xl font-extrabold text-[#1F365C]">48</p>
                    <p class="text-gray-600 mt-2">Expert Attorneys</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 text-center border border-gray-100">
                    <p class="text-5xl font-extrabold text-[#1F365C]">6</p>
                    <p class="text-gray-600 mt-2">Practice Areas</p>
                </div>
                <div class="bg-yellow-400 rounded-2xl p-8 text-center">
                    <p class="text-5xl font-extrabold text-[#1F365C]">98%</p>
                    <p class="text-[#1F365C] mt-2 font-semibold">Success Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Articles -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-yellow-500 font-bold uppercase tracking-widest text-sm">Knowledge Center</span>
                <h2 class="section-title mt-2 mb-0">Latest Articles &amp; News</h2>
            </div>
            <a href="{{ route('articles.index') }}" class="btn-outline text-sm hidden md:inline-block">View All Articles</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($latestArticles as $article)
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] flex items-center justify-center">
                    @if($article->thumbnail)
                        <img src="{{ $article->thumbnail_url }}" class="w-full h-full object-cover" alt="{{ $article->title }}">
                    @else
                        <i class="fas fa-file-alt text-white/30 text-5xl"></i>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs px-2.5 py-1 rounded-full font-semibold {{ $article->category === 'News' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">{{ $article->category }}</span>
                        <span class="text-xs text-gray-400">{{ $article->publish_date->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-bold text-[#1F365C] mb-2 leading-snug line-clamp-2">{{ $article->title }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">{{ $article->excerpt }}</p>
                    <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center gap-2 text-[#1F365C] font-semibold text-sm mt-4 hover:text-yellow-600 transition">
                        Read More <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-12 text-gray-400">
                <i class="fas fa-newspaper text-4xl mb-3 block"></i>
                <p>No articles published yet.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-8 md:hidden">
            <a href="{{ route('articles.index') }}" class="btn-outline">View All Articles</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-[#1F365C]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm">Testimonials</span>
            <h2 class="text-3xl font-extrabold text-white mt-2">What Our Clients Say</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $testimonials = [
                ['name'=>'Margaret Thompson','role'=>'CEO, Thompson Industries','text'=>'LexCore guided our company through a complex acquisition with exceptional expertise. Their attention to detail and strategic advice saved us from potential pitfalls and resulted in a deal that exceeded our expectations.','stars'=>5],
                ['name'=>'James R. Whitfield','role'=>'Founder, Whitfield Consulting','text'=>'When we faced a significant employment dispute, LexCore stepped in with confidence and clarity. They resolved the matter quickly and professionally. I would not hesitate to recommend them to any business.','stars'=>5],
                ['name'=>'Sandra Lee','role'=>'Individual Client','text'=>'LexCore handled my estate planning with great care and thoroughness. The attorneys took the time to explain everything clearly and made sure my family was protected. Outstanding service from start to finish.','stars'=>5]
            ];
            @endphp
            @foreach($testimonials as $t)
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8">
                <div class="flex text-yellow-400 mb-4">
                    @for($i=0;$i<$t['stars'];$i++)<i class="fas fa-star"></i>@endfor
                </div>
                <p class="text-gray-200 leading-relaxed italic mb-6">&ldquo;{{ $t['text'] }}&rdquo;</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                        <span class="text-[#1F365C] font-bold text-sm">{{ strtoupper(substr($t['name'],0,1)) }}</span>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-sm">{{ $t['name'] }}</p>
                        <p class="text-gray-400 text-xs">{{ $t['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-yellow-400">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-extrabold text-[#1F365C] mb-4">Ready to Protect What Matters Most?</h2>
        <p class="text-[#1F365C]/80 text-lg mb-8">Schedule a free consultation with one of our expert attorneys today. No obligation, no pressure.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-[#1F365C] text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-[#152540] transition">
            <i class="fas fa-calendar-check mr-2"></i>Book a Free Consultation
        </a>
    </div>
</section>
@endsection
