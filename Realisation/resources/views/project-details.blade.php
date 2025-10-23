@extends('layouts.app')

@section('content')
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-8">
            <a href="{{ route('projects') }}" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 transition duration-300 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Projects
            </a>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">{{ $project['title'] }}</span>
        </h1>
        <p class="text-xl text-gray-300 mt-4 max-w-3xl">
            {{ $project['description'] }}
        </p>
    </div>
</section>

<!-- Project Content -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 mb-24">
            <div class="lg:col-span-2">
                <img src="{{ asset($project['image']) }}" alt="Screenshot of {{ $project['title'] }}" class="rounded-2xl shadow-2xl w-full object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4 text-cyan-400">Project Overview</h2>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    {{ $project['description'] }}
                </p>
                <h3 class="text-2xl font-bold mb-4 text-cyan-400">Technologies Used</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach ($project['technologies'] as $tech)
                        <span class="tech-tag tag-{{ Str::slug($tech['name']) }}">{{ $tech['name'] }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Project Links -->
        <div class="flex flex-wrap justify-center gap-6 mb-24">
            @if ($project['github_link'])
            <a href="{{ $project['github_link'] }}" target="_blank" class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 hover:scale-105 transform transition duration-300">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
                View on GitHub
            </a>
            @endif
            @if ($project['demo_link'])
            <a href="{{ $project['demo_link'] }}" target="_blank" class="inline-flex items-center px-8 py-3 bg-gray-800 text-white font-semibold rounded-lg border border-gray-700 hover:bg-gray-700 hover:border-cyan-500 hover:scale-105 transform transition duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                Live Demo
            </a>
            @endif
        </div>

        <!-- Key Features -->
        <!-- <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold"><span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Key Features</span></h2>
                <p class="text-lg text-gray-400 mt-4 max-w-2xl mx-auto">Core functionalities that make this project stand out.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass-card rounded-xl p-6">
                    <div class="w-12 h-12 bg-cyan-500/10 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg></div>
                    <h3 class="text-xl font-bold mb-2 text-gray-100">Responsive Ordering Interface</h3>
                    <p class="text-gray-400">A clean, mobile-first design for customers to browse the menu and place orders easily.</p>
                </div>
                <div class="glass-card rounded-xl p-6">
                    <div class="w-12 h-12 bg-cyan-500/10 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg></div>
                    <h3 class="text-xl font-bold mb-2 text-gray-100">Shopping Cart & Session Logic</h3>
                    <p class="text-gray-400">Intuitive shopping cart with real-time updates and user session management.</p>
                </div>
                <div class="glass-card rounded-xl p-6">
                    <div class="w-12 h-12 bg-cyan-500/10 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg></div>
                    <h3 class="text-xl font-bold mb-2 text-gray-100">Admin Dashboard</h3>
                    <p class="text-gray-400">A secure backend for staff to manage menu items, view and update order statuses, and see sales statistics.</p>
                </div>
            </div>
        </div> -->

        <!-- Back Button -->
        <div class="text-center mt-24">
            <a href="{{ route('projects') }}" class="inline-block px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 hover:scale-105 transform transition duration-300">
                <i class="fa-solid fa-arrow-left"></i> Back to All Projects
            </a>
        </div>
    </div>
</section>
@endsection