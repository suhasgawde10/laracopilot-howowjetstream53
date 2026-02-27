@extends('layouts.app')
@section('title', 'Legal Services — LexCore Legal Advisory')
@section('content')

<section class="bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm">What We Offer</span>
        <h1 class="text-5xl font-extrabold text-white mt-3 mb-4">Our Legal Services</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Comprehensive legal solutions across all major practice areas, delivered by experienced specialists.</p>
        <div class="flex items-center justify-center gap-2 mt-6 text-sm text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a><span>/</span>
            <span class="text-white">Services</span>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        @php
        $services = [
            [
                'icon'=>'fas fa-building','color'=>'bg-blue-50 text-blue-600',
                'title'=>'Corporate Law',
                'tagline'=>'Protecting Your Business From Every Angle',
                'desc'=>'Our corporate law practice provides end-to-end legal support for businesses at every stage of their lifecycle. From initial formation and governance to complex mergers, acquisitions, and restructurings, our corporate attorneys deliver practical, business-oriented advice.',
                'items'=>['Business formation & incorporation','Shareholder agreements','Corporate governance','Mergers & acquisitions','Joint ventures & partnerships','Board advisory services']
            ],
            [
                'icon'=>'fas fa-file-contract','color'=>'bg-green-50 text-green-600',
                'title'=>'Contract Law',
                'tagline'=>'Agreements That Protect and Perform',
                'desc'=>'Strong contracts are the foundation of successful business relationships. Our contract attorneys draft, review, and negotiate agreements that clearly define rights and obligations, minimize risk, and provide effective remedies in the event of a dispute.',
                'items'=>['Commercial contracts','Supply chain agreements','Service level agreements','Non-disclosure agreements','Employment contracts','Contract dispute resolution']
            ],
            [
                'icon'=>'fas fa-lightbulb','color'=>'bg-yellow-50 text-yellow-600',
                'title'=>'Intellectual Property',
                'tagline'=>'Securing Your Most Valuable Assets',
                'desc'=>'Intellectual property is often a company\'s most valuable asset. Our IP attorneys help clients identify, protect, and commercialize their innovations, creative works, and brand identities through comprehensive IP strategies.',
                'items'=>['Patent prosecution & litigation','Trademark registration & enforcement','Copyright protection','Trade secret strategy','IP licensing & monetization','IP due diligence for transactions']
            ],
            [
                'icon'=>'fas fa-users','color'=>'bg-purple-50 text-purple-600',
                'title'=>'Employment Law',
                'tagline'=>'Navigating the Workplace with Confidence',
                'desc'=>'Employment law is constantly evolving. Our employment attorneys advise employers and employees on all aspects of the employment relationship, from hiring and workplace policies to terminations and complex discrimination claims.',
                'items'=>['Employment contracts & handbooks','Wage & hour compliance','Workplace discrimination defense','Wrongful termination claims','Executive compensation','Workforce restructuring']
            ],
            [
                'icon'=>'fas fa-home','color'=>'bg-red-50 text-red-600',
                'title'=>'Real Estate Law',
                'tagline'=>'Expert Guidance for Property Matters',
                'desc'=>'Real estate transactions involve significant financial stakes and complex legal requirements. Our real estate attorneys provide skilled guidance for both commercial and residential property matters, ensuring smooth transactions and protecting your investment.',
                'items'=>['Commercial real estate transactions','Residential property conveyancing','Lease negotiation & drafting','Zoning & land use','Real estate development','Property dispute resolution']
            ],
            [
                'icon'=>'fas fa-gavel','color'=>'bg-indigo-50 text-indigo-600',
                'title'=>'Dispute Resolution',
                'tagline'=>'Resolving Conflicts Effectively',
                'desc'=>'When disputes arise, you need experienced advocates who can navigate complex legal proceedings and deliver results. Our dispute resolution team handles matters across the full spectrum of resolution mechanisms, from negotiation through trial.',
                'items'=>['Commercial litigation','International arbitration','Mediation services','Class action defense','Regulatory investigations','Appeals & post-trial motions']
            ],
            [
                'icon'=>'fas fa-scroll','color'=>'bg-orange-50 text-orange-600',
                'title'=>'Estate Planning',
                'tagline'=>'Protecting Your Legacy for Generations',
                'desc'=>'Comprehensive estate planning ensures that your assets are protected and your wishes are honored. Our estate planning attorneys work with individuals and families to create personalized plans that minimize taxes and provide for loved ones.',
                'items'=>['Wills & testaments','Revocable & irrevocable trusts','Powers of attorney','Healthcare directives','Estate & gift tax planning','Probate & estate administration']
            ],
            [
                'icon'=>'fas fa-chart-line','color'=>'bg-teal-50 text-teal-600',
                'title'=>'Tax Law',
                'tagline'=>'Strategic Tax Counsel for Optimal Outcomes',
                'desc'=>'Tax law pervades every aspect of business and personal finance. Our tax attorneys provide strategic counsel to minimize tax liability, structure transactions efficiently, and resolve disputes with tax authorities.',
                'items'=>['Corporate tax planning','M&A tax structuring','International tax compliance','Tax controversy & litigation','Estate & gift tax','Transfer pricing']
            ]
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @foreach($services as $s)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">
                <div class="p-8">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 {{ $s['color'] }} rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="{{ $s['icon'] }} text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-[#1F365C]">{{ $s['title'] }}</h3>
                            <p class="text-yellow-600 font-semibold text-sm mt-0.5">{{ $s['tagline'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed mt-5 mb-5">{{ $s['desc'] }}</p>
                    <ul class="grid grid-cols-2 gap-y-2 gap-x-4">
                        @foreach($s['items'] as $item)
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <i class="fas fa-check-circle text-[#1F365C] text-xs"></i>{{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="border-t border-gray-100 px-8 py-4 bg-gray-50">
                    <a href="{{ route('contact') }}" class="text-[#1F365C] font-semibold text-sm hover:text-yellow-600 transition flex items-center gap-2">
                        <i class="fas fa-calendar-check"></i> Schedule a Consultation
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-[#1F365C]">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-extrabold text-white mb-4">Don't See Your Legal Need?</h2>
        <p class="text-gray-300 text-lg mb-8">Our attorneys handle a wide range of matters beyond the practice areas listed above. Contact us to discuss your specific situation.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-yellow-400 text-[#1F365C] px-10 py-4 rounded-xl font-bold text-lg hover:bg-yellow-300 transition">
            <i class="fas fa-phone mr-2"></i>Contact Our Team
        </a>
    </div>
</section>
@endsection
