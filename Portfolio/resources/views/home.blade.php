@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center bg-gray-900">
    <div class="container mx-auto px-6 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <div class="mb-6">
                    <div class="w-16 h-1 bg-white mb-6"></div>
                    <h1 class="text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                        I'm {{ $profile['name'] }}, a<br>
                        <span class="text-white">{{ $profile['role'] }}</span>
                    </h1>
                    <p class="text-gray-400 text-lg max-w-xl">
                        {{ $profile['bio'] }}
                    </p>
                </div>

                <!-- Scroll Down Button -->
                <div class="mt-12">
                    <button class="w-14 h-14 rounded-full bg-blue-600 hover:bg-blue-700 transition flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Content -->
            <div class="relative">
                <div class="relative">
                    <!-- Profile Image Placeholder -->
                    <div class="w-full max-w-md mx-auto mr-[5px]">
                        <div class="aspect-square rounded-lg bg-gray-800 flex items-center justify-center">
                            <span class="text-9xl font-bold text-gray-700">{{ substr($profile['name'], 0, 1) }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-gray-800 py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl">
            <p class="text-xs uppercase tracking-wider text-gray-500 mb-4">ABOUT ME</p>
            <h2 class="text-4xl font-bold mb-6">I've been developing<br>websites for over 10 years</h2>
            <p class="text-gray-400 text-lg leading-relaxed mb-6">
                {{ $profile['bio'] }}
            </p>
            <div class="flex items-center space-x-2 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <a href="mailto:{{ $profile['email'] }}" class="hover:text-white transition">{{ $profile['email'] }}</a>
            </div>
        </div>
    </div>
</section>
@endsection