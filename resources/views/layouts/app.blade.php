<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LexCore Legal Advisory')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#1F365C',
                            50: '#e8edf5',
                            100: '#c5d0e3',
                            200: '#9fb0ce',
                            300: '#7891b9',
                            400: '#5977a9',
                            500: '#1F365C',
                            600: '#1a2e4f',
                            700: '#152540',
                            800: '#101c31',
                            900: '#0a1220'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .nav-link { color: #1F365C; font-weight: 500; transition: color 0.2s; }
        .nav-link:hover { color: #c8a951; }
        .nav-link.active { color: #c8a951; border-bottom: 2px solid #c8a951; }
        .btn-primary { background: #1F365C; color: white; padding: 0.75rem 2rem; border-radius: 0.375rem; font-weight: 600; transition: background 0.2s; display: inline-block; }
        .btn-primary:hover { background: #152540; }
        .btn-outline { border: 2px solid #1F365C; color: #1F365C; padding: 0.7rem 2rem; border-radius: 0.375rem; font-weight: 600; transition: all 0.2s; display: inline-block; }
        .btn-outline:hover { background: #1F365C; color: white; }
        .gold { color: #c8a951; }
        .bg-gold { background: #c8a951; }
        .border-gold { border-color: #c8a951; }
        .section-title { font-size: 2rem; font-weight: 800; color: #1F365C; margin-bottom: 0.5rem; }
        .section-sub { color: #6b7280; margin-bottom: 2.5rem; }
        html { scroll-behavior: smooth; }
    </style>
    @yield('head')
</head>
<body class="bg-white text-gray-800 font-sans">

<!-- Top Bar -->
<div class="bg-[#1F365C] text-white text-sm py-2">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-2">
        <div class="flex items-center gap-6">
            <span><i class="fas fa-phone mr-1 text-yellow-300"></i> +1 (555) 200-3000</span>
            <span><i class="fas fa-envelope mr-1 text-yellow-300"></i> info@lexcorelegal.com</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-twitter"></i></a>
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-facebook"></i></a>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-[#1F365C] rounded-lg flex items-center justify-center">
                    <i class="fas fa-balance-scale text-white text-lg"></i>
                </div>
                <div>
                    <span class="text-xl font-extrabold text-[#1F365C]">LexCore</span>
                    <span class="block text-xs text-gray-500 -mt-1">Legal Advisory</span>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('team') }}" class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}">Team</a>
                <a href="{{ route('articles.index') }}" class="nav-link {{ request()->routeIs('articles.*') ? 'active' : '' }}">Articles</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <a href="{{ route('contact') }}" class="hidden md:inline-block btn-primary text-sm">Free Consultation</a>
            <button id="mobileMenuBtn" class="md:hidden text-[#1F365C] text-xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 pb-4">
        <a href="{{ route('home') }}" class="block py-2 nav-link">Home</a>
        <a href="{{ route('about') }}" class="block py-2 nav-link">About Us</a>
        <a href="{{ route('services') }}" class="block py-2 nav-link">Services</a>
        <a href="{{ route('team') }}" class="block py-2 nav-link">Team</a>
        <a href="{{ route('articles.index') }}" class="block py-2 nav-link">Articles</a>
        <a href="{{ route('contact') }}" class="block py-2 nav-link">Contact</a>
        <a href="{{ route('contact') }}" class="btn-primary mt-2 text-sm text-center block">Free Consultation</a>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="bg-[#1F365C] text-white">
    <div class="max-w-7xl mx-auto px-4 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                    <i class="fas fa-balance-scale text-[#1F365C] text-lg"></i>
                </div>
                <div>
                    <span class="text-xl font-extrabold">LexCore</span>
                    <span class="block text-xs text-gray-300 -mt-1">Legal Advisory</span>
                </div>
            </div>
            <p class="text-gray-300 text-sm leading-relaxed">Providing trusted legal counsel and advisory services to individuals, businesses, and organizations since 1998.</p>
            <div class="flex gap-4 mt-4">
                <a href="#" class="text-gray-300 hover:text-yellow-300 transition"><i class="fab fa-linkedin text-lg"></i></a>
                <a href="#" class="text-gray-300 hover:text-yellow-300 transition"><i class="fab fa-twitter text-lg"></i></a>
                <a href="#" class="text-gray-300 hover:text-yellow-300 transition"><i class="fab fa-facebook text-lg"></i></a>
            </div>
        </div>
        <div>
            <h4 class="text-lg font-bold mb-4 text-yellow-300">Quick Links</h4>
            <ul class="space-y-2 text-gray-300 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Services</a></li>
                <li><a href="{{ route('team') }}" class="hover:text-white transition">Our Team</a></li>
                <li><a href="{{ route('articles.index') }}" class="hover:text-white transition">Articles & News</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-bold mb-4 text-yellow-300">Practice Areas</h4>
            <ul class="space-y-2 text-gray-300 text-sm">
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Corporate Law</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Contract Law</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Intellectual Property</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Employment Law</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Estate Planning</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Real Estate Law</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-bold mb-4 text-yellow-300">Contact Us</h4>
            <ul class="space-y-3 text-gray-300 text-sm">
                <li class="flex items-start gap-2"><i class="fas fa-map-marker-alt text-yellow-300 mt-0.5"></i><span>1200 Justice Avenue, Suite 800<br>New York, NY 10001</span></li>
                <li class="flex items-center gap-2"><i class="fas fa-phone text-yellow-300"></i><span>+1 (555) 200-3000</span></li>
                <li class="flex items-center gap-2"><i class="fas fa-envelope text-yellow-300"></i><span>info@lexcorelegal.com</span></li>
                <li class="flex items-center gap-2"><i class="fas fa-clock text-yellow-300"></i><span>Mon–Fri: 9:00 AM – 6:00 PM</span></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-white/10 py-6 text-center text-gray-400 text-sm">
        <p>© {{ date('Y') }} LexCore Legal Advisory. All rights reserved.</p>
        <p class="mt-1">Made with <span class="text-red-400">❤️</span> by <a href="https://laracopilot.com/" target="_blank" class="hover:text-white transition">LaraCopilot</a></p>
    </div>
</footer>

<script>
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>
@yield('scripts')
</body>
</html>
