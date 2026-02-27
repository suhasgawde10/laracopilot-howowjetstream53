@extends('layouts.app')
@section('title', '404 — Page Not Found')
@section('content')
<section class="min-h-screen bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] flex items-center justify-center">
    <div class="text-center px-4">
        <div class="text-9xl font-extrabold text-white/10 mb-6">404</div>
        <div class="w-20 h-20 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-search text-yellow-400 text-3xl"></i>
        </div>
        <h1 class="text-4xl font-extrabold text-white mb-4">Page Not Found</h1>
        <p class="text-gray-300 text-lg mb-8 max-w-md mx-auto">The page you are looking for may have been moved, deleted, or does not exist.</p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('home') }}" class="bg-yellow-400 text-[#1F365C] px-8 py-3 rounded-xl font-bold hover:bg-yellow-300 transition">Go Home</a>
            <a href="{{ route('contact') }}" class="bg-white/10 text-white px-8 py-3 rounded-xl font-bold hover:bg-white/20 transition">Contact Us</a>
        </div>
    </div>
</section>
@endsection
