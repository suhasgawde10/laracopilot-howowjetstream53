<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') — LexCore Legal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar-link { display:flex; align-items:center; gap:0.75rem; padding:0.65rem 1rem; border-radius:0.5rem; color:#cbd5e1; font-size:0.95rem; transition:all 0.2s; }
        .sidebar-link:hover, .sidebar-link.active { background:rgba(255,255,255,0.12); color:white; }
        .sidebar-link i { width: 20px; text-align:center; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex">

<!-- Sidebar -->
<aside class="w-64 min-h-screen bg-[#1F365C] flex flex-col fixed left-0 top-0 z-40">
    <div class="p-6 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                <i class="fas fa-balance-scale text-[#1F365C] text-lg"></i>
            </div>
            <div>
                <span class="text-white text-lg font-extrabold">LexCore</span>
                <span class="block text-gray-300 text-xs -mt-1">Admin Panel</span>
            </div>
        </div>
    </div>
    <nav class="flex-1 px-4 py-6 space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('admin.articles.index') }}" class="sidebar-link {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
            <i class="fas fa-newspaper"></i> Articles & News
        </a>
        <a href="{{ route('home') }}" target="_blank" class="sidebar-link">
            <i class="fas fa-external-link-alt"></i> View Website
        </a>
    </nav>
    <div class="px-4 py-6 border-t border-white/10">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 bg-yellow-400 rounded-full flex items-center justify-center">
                <span class="text-[#1F365C] font-bold text-sm">{{ strtoupper(substr(session('admin_user', 'A'), 0, 1)) }}</span>
            </div>
            <div>
                <p class="text-white text-sm font-semibold">{{ session('admin_user') }}</p>
                <p class="text-gray-400 text-xs">{{ session('admin_email') }}</p>
            </div>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="sidebar-link w-full text-left text-red-300 hover:text-red-200">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</aside>

<!-- Main Content -->
<div class="ml-64 flex-1 flex flex-col min-h-screen">
    <!-- Top bar -->
    <header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center sticky top-0 z-30">
        <h1 class="text-xl font-bold text-[#1F365C]">@yield('page-title', 'Dashboard')</h1>
        <div class="flex items-center gap-4 text-sm text-gray-500">
            <span><i class="fas fa-calendar mr-1"></i>{{ now()->format('l, F j, Y') }}</span>
        </div>
    </header>
    <main class="flex-1 p-8">
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg flex items-center gap-2">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg flex items-center gap-2">
                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
            </div>
        @endif
        @yield('content')
    </main>
</div>

@yield('scripts')
</body>
</html>
