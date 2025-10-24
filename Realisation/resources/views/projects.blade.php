@extends('layouts.app')

@section('title', 'Projects - Anouar')

@section('content')
<!-- Header Section -->
<section class="py-20 md:py-32 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl animate-float" style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">My Projects</span>
        </h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
            A collection of my work showcasing full-stack development, modern design, and creative problem-solving.
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 lg:gap-10">
            @foreach ($projects as $project)
            <article class="group glass-card rounded-2xl overflow-hidden border border-white/10 hover:border-cyan-500/50 transition-all duration-500 transform hover:-translate-y-2 shadow-lg hover:shadow-2xl hover:shadow-cyan-500/20 flex flex-col">
    
                <div class="relative overflow-hidden h-56 md:h-64 bg-gray-800">
                    <img src="{{ asset($project['image']) }}"
                         alt="Screenshot of {{ $project['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                 
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="px-6 py-3 bg-cyan-500 text-white font-semibold rounded-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            View Details
                        </span>
                    </div>
                </div>
                <div class="p-6 md:p-8 flex flex-col flex-grow">
                    <h3 class="text-2xl md:text-3xl font-bold mb-3 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 group-hover:from-cyan-300 group-hover:to-blue-400 transition-all duration-300">
                        {{ $project['title'] }}
                    </h3>
                    
                    <p class="text-gray-300 text-sm md:text-base mb-6 flex-grow leading-relaxed line-clamp-3">
                        {{ $project['description'] }}
                    </p>

                    <!-- Technologies Preview -->
                    @if(isset($project['technologies']) && count($project['technologies']) > 0)
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(array_slice($project['technologies'], 0, 3) as $techId)
                        <span class="px-3 py-1 text-xs font-medium bg-cyan-500/10 text-cyan-400 rounded-full border border-cyan-500/30">
                            {{ $techId['name'] ?? 'Unknown' }}
                        </span>
                        @endforeach
                        @if(count($project['technologies']) > 3)
                        <span class="px-3 py-1 text-xs font-medium bg-gray-700/50 text-gray-400 rounded-full">
                            +{{ count($project['technologies']) - 3 }} more
                        </span>
                        @endif
                    </div>
                    @endif

                    <a href="{{ route('project.details', ['id' => $project['id']]) }}"
                       class="group/btn inline-flex items-center justify-center mt-auto px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-center font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105">
                        View Project
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Empty State (if no projects) -->
        @if(count($projects) === 0)
        <div class="text-center py-20">
            <svg class="w-20 h-20 mx-auto text-gray-600 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
            </svg>
            <h3 class="text-2xl font-bold text-gray-400 mb-2">No Projects Yet</h3>
            <p class="text-gray-500">Check back soon for exciting new projects!</p>
        </div>
        @endif
    </div>
</section>

<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/5 to-blue-500/5"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="glass-card rounded-2xl p-8 md:p-12 border border-cyan-500/30">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                    Have a Project in Mind?
                </span>
            </h2>
            <p class="text-gray-400 text-base md:text-lg mb-8 max-w-2xl mx-auto">
                I'm always excited to work on new and challenging projects. Let's collaborate and bring your ideas to life!
            </p>
            <a href="{{ route('about') }}" 
               class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105">
                Get In Touch
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection