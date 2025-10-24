@extends('layouts.app')

@section('title', 'Home - Benyekhlef Anouar')

@section('content')

<section class="min-h-screen flex items-center justify-center relative overflow-hidden">
 
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl animate-float" style="animation-delay: 4s;"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 mb-8 px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-cyan-400 text-sm font-medium backdrop-blur-sm hover:bg-cyan-500/20 transition-all duration-300">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
            </span>
            Available for opportunities
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight">
            Hi, I'm 
            <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent animate-gradient inline-block">
                {{ $developer['first_name'] }} {{ $developer['last_name'] }}
            </span>
        </h1>

        <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl text-cyan-400 mb-8 font-semibold">
            {{ $developer['title'] }}
        </p>

        <p class="text-base sm:text-lg md:text-xl text-gray-400 max-w-3xl mx-auto mb-12 leading-relaxed">
            {{ $developer['bio'] }}
        </p>

    
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('projects') }}"
                class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105 w-full sm:w-auto">
                View My Work
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
            <a href="{{ route('about') }}"
                class="group inline-flex items-center justify-center px-8 py-4 bg-gray-800/50 backdrop-blur-sm text-gray-300 font-semibold rounded-full border border-gray-700 hover:border-cyan-500 hover:text-cyan-400 transition-all duration-300 hover:scale-105 w-full sm:w-auto">
                Learn More
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </a>
        </div>
    </div>

    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Achievements/Stats Section -->
<!-- <section class="py-20 md:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Achievements & Stats</span>
            </h2>
            <p class="text-base sm:text-lg text-gray-400 max-w-2xl mx-auto">
                Numbers that reflect my journey and commitment to excellence
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="group glass-card rounded-2xl p-6 md:p-8 hover:bg-white/10 transition-all duration-300 border border-cyan-600/30 hover:border-cyan-500">
                <div class="flex items-center justify-center h-14 w-14 md:h-16 md:w-16 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-2">
                        {{ count($projects) }}+
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-2 text-gray-100">Projects</h3>
                    <p class="text-sm text-gray-400">Completed Successfully</p>
                </div>
            </div>

            <div class="group glass-card rounded-2xl p-6 md:p-8 hover:bg-white/10 transition-all duration-300 border border-purple-600/30 hover:border-purple-500">
                <div class="flex items-center justify-center h-14 w-14 md:h-16 md:w-16 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent mb-2">
                        10+
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-2 text-gray-100">Clients</h3>
                    <p class="text-sm text-gray-400">Happy & Satisfied</p>
                </div>
            </div>

            <div class="group glass-card rounded-2xl p-6 md:p-8 hover:bg-white/10 transition-all duration-300 border border-green-600/30 hover:border-green-500">
                <div class="flex items-center justify-center h-14 w-14 md:h-16 md:w-16 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-green-400 to-emerald-500 bg-clip-text text-transparent mb-2">
                        3+
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-2 text-gray-100">Years</h3>
                    <p class="text-sm text-gray-400">Of Experience</p>
                </div>
            </div>

            <div class="group glass-card rounded-2xl p-6 md:p-8 hover:bg-white/10 transition-all duration-300 border border-orange-600/30 hover:border-orange-500">
                <div class="flex items-center justify-center h-14 w-14 md:h-16 md:w-16 rounded-2xl bg-gradient-to-br from-orange-500/20 to-red-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent mb-2">
                        12+
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-2 text-gray-100">Technologies</h3>
                    <p class="text-sm text-gray-400">Mastered & Applied</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- About Preview Section -->
<section class="py-20 md:py-32 relative bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="relative order-2 lg:order-1">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-3xl blur-3xl"></div>
                <div class="relative overflow-hidden rounded-3xl border border-white/10 shadow-2xl group">
                    <img src="{{ asset($developer['profile_picture']) }}"
                        alt="{{ $developer['first_name'] }} {{ $developer['last_name'] }}"
                        class="relative w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">About Me</span>
                </h2>
                <p class="text-gray-400 text-base sm:text-lg leading-relaxed mb-6">
                    I'm {{ $developer['first_name'] }}, a passionate web developer based in Tangier, Morocco. With expertise in both
                    front-end and back-end development, I create scalable, user-friendly applications that solve
                    real-world problems.
                </p>
                <p class="text-gray-400 text-base sm:text-lg leading-relaxed mb-8">
                    My approach combines clean code, modern design principles, and effective collaboration to
                    deliver exceptional digital experiences.
                </p>
                <a href="{{ route('about') }}"
                    class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full hover:shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105">
                    More About Me
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection