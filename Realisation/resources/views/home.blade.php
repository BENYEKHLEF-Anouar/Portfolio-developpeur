@extends('layouts.app')

@section('title', 'Home - Benyekhlef Anouar')

@section('content')
<section class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl animate-float">
        </div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl animate-float"
            style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="">
            <div
                class="inline-block mb-6 px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-cyan-400 text-sm font-medium">
                Available for opportunities
            </div>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold mb-6">
            Hi, I'm <span
                class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent animate-gradient">{{ $developer['first_name'] }}
                {{ $developer['last_name'] }}</span>
        </h1>

        <p
            class="text-[10px] sm:text-3xl lg:text-4xl text-cyan-400 mb-8 font-semibold">
            {{ $developer['title'] }}
        </p>

        <p
            class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto mb-12 leading-relaxed">
            {{ $developer['bio'] }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('projects') }}"
                class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105 mb-12">
                View My Work
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Technologies Section -->
<!-- <section class="py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Tech
                            Stack</span>
                    </h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                        Leveraging modern technologies to build exceptional digital experiences
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cyan-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3">Languages</h3>
                        <p class="text-gray-400 text-center text-sm">HTML, CSS, JavaScript, PHP, SQL</p>
                    </div>

                    <div
                        class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3">Frameworks</h3>
                        <p class="text-gray-400 text-center text-sm">Laravel, React, Bootstrap, Tailwind</p>
                    </div>

                    <div
                        class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3">Tools</h3>
                        <p class="text-gray-400 text-center text-sm">Git, GitHub, Figma, Responsive Design</p>
                    </div>

                    <div
                        class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-orange-500/20 to-red-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3">Expertise</h3>
                        <p class="text-gray-400 text-center text-sm">API Integration, Debugging, Collaboration</p>
                    </div>
                </div>
            </div>
        </section> -->


<!-- Achievements/Stats Section -->
<section class="py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Achievements & Stats</span>
            </h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Numbers that reflect my journey and commitment to excellence
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                <div
                    class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cyan-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="stat-number bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-2">{{ count($projects) }}+</div>
                    <h3 class="text-xl font-bold mb-2">Projects</h3>
                    <p class="text-gray-400 text-sm">Completed Successfully</p>
                </div>
            </div>

            <div
                class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                <div
                    class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="stat-number bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent mb-2">10+</div>
                    <h3 class="text-xl font-bold mb-2">Clients</h3>
                    <p class="text-gray-400 text-sm">Happy & Satisfied</p>
                </div>
            </div>

            <div
                class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                <div
                    class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="stat-number bg-gradient-to-r from-green-400 to-emerald-500 bg-clip-text text-transparent mb-2">3+</div>
                    <h3 class="text-xl font-bold mb-2">Years</h3>
                    <p class="text-gray-400 text-sm">Of Experience</p>
                </div>
            </div>

            <div
                class="glass-card rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 tech-icon group">
                <div
                    class="flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-orange-500/20 to-red-500/20 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <div class="text-center">
                    <div class="stat-number bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent mb-2">12+</div>
                    <h3 class="text-xl font-bold mb-2">Technologies</h3>
                    <p class="text-gray-400 text-sm">Mastered & Applied</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-3xl blur-3xl">
                </div>
                <img src="{{ asset($developer['profile_picture']) }}"
                    alt="{{ $developer['first_name'] }} {{ $developer['last_name'] }}"
                    class="relative rounded-3xl shadow-2xl w-full object-cover border border-white/10">
            </div>

            <div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">About
                        Me</span>
                </h2>
                <p class="text-gray-400 text-lg leading-relaxed mb-6">
                    I'm {{ $developer['first_name'] }}, a passionate web developer based in Tangier, Morocco. With expertise in both
                    front-end and back-end development, I create scalable, user-friendly applications that solve
                    real-world problems.
                </p>
                <p class="text-gray-400 text-lg leading-relaxed mb-8">
                    My approach combines clean code, modern design principles, and effective collaboration to
                    deliver exceptional digital experiences.
                </p>
                <a href="{{ route('about') }}"
                    class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-full hover:shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105">
                    More About Me
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection