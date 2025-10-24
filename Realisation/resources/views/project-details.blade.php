@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="py-20 md:py-32 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ route('projects') }}" 
               class="inline-flex items-center text-cyan-400 hover:text-cyan-300 transition-all duration-300 font-medium group">
                <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Projects
            </a>
        </div>

        <!-- Project Title -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                {{ $project['title'] }}
            </span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-3xl leading-relaxed">
            {{ $project['description'] }}
        </p>
    </div>
</section>

<!-- Project Content -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 mb-20">
            <!-- Project Image -->
            <div class="lg:col-span-2">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl border border-white/10 group">
                    <img src="{{ asset($project['image']) }}"
                         alt="Screenshot of {{ $project['title'] }}"
                         class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
            </div>

            <!-- Project Info Sidebar -->
            <div class="space-y-8">
                <!-- Overview -->
                <div class="glass-card rounded-2xl p-6 border border-white/10">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-cyan-400 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Overview
                    </h2>
                    <p class="text-gray-300 text-base leading-relaxed">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Technologies -->
                <div class="glass-card rounded-2xl p-6 border border-white/10">
                    <h3 class="text-2xl font-bold mb-4 text-cyan-400 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        Technologies
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($project['technologies'] as $tech)
                            <span class="px-3 py-1 text-xs font-medium bg-cyan-500/10 text-cyan-400 rounded-full border border-cyan-500/30 tech-tag tag-{{ Str::slug($tech['name']) }}">
                                {{ $tech['name'] }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Project Links -->
                <div class="glass-card rounded-2xl p-6 border border-white/10">
                    <h3 class="text-2xl font-bold mb-4 text-cyan-400 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        Links
                    </h3>
                    <div class="space-y-3">
                        @if ($project['github_link'])
                        <a href="{{ $project['github_link'] }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="flex items-center justify-center w-full px-6 py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 hover:border-cyan-500 transition-all duration-300 group">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            View on GitHub
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        @endif
                        
                        @if ($project['demo_link'])
                        <a href="{{ $project['demo_link'] }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="flex items-center justify-center w-full px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105 group">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            Live Demo
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center">
            <a href="{{ route('projects') }}"
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 hover:scale-105 transition-all duration-300 group">
                <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to All Projects
            </a>
        </div>
    </div>
</section>
@endsection