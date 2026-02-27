@extends('layouts.app')
@section('title', '500 — Server Error')
@section('content')
<section class="min-h-screen bg-gradient-to-br from-[#1F365C] to-[#0d1f3c] flex items-center justify-center">
    <div class="text-center px-4">
        <div class="text-9xl font-extrabold text-white/10 mb-6">500</div>
        <div class="w-20 h-20 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-exclamation-triangle text-red-400 text-3xl"></i>
        </div>
        <h1 class="text-4xl font-extrabold text-white mb-4">Server Error</h1>
        <p class="text-gray-300 text-lg mb-8 max-w-md mx-auto">Something went wrong on our end. Our team has been notified and is working to resolve the issue.</p>
        <a href="{{ route('home') }}" class="bg-yellow-400 text-[#1F365C] px-8 py-3 rounded-xl font-bold hover:bg-yellow-300 transition">Go Home</a>
    </div>
</section>
@endsection
