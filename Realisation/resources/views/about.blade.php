@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Header Section -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">About Me</span>
        </h1>
        <p class="text-xl text-gray-400 mt-4 max-w-3xl mx-auto">
            A developer dedicated to creating exceptional and purposeful web experiences.
        </p>
    </div>
</section>

<!-- About Content -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 items-center mb-24">
            <div class="flex justify-center lg:justify-start">
                <img src="{{ $developer['profile_picture'] }}" alt="{{ $developer['first_name'] }} {{ $developer['last_name'] }}, a web developer, smiling confidently" class="rounded-2xl shadow-2xl w-80 h-80 object-cover border border-white/10">
            </div>
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold mb-6 text-cyan-400">Hello, I'm {{ $developer['first_name'] }} {{ $developer['last_name'] }}</h2>
                <div class="space-y-4 text-lg text-gray-400 leading-relaxed">
                    <p>{{ $developer['bio'] }}</p>
                </div>
            </div>
        </div>

        <!-- Developer Stats -->
        <!-- <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold"><span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">By The Numbers</span></h2>
                <p class="text-lg text-gray-400 mt-4 max-w-2xl mx-auto">A snapshot of my development journey and achievements.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="stat-card glass-card rounded-2xl p-8 text-center border border-cyan-600/50 hover:border-cyan-500 transition-all duration-300">
                    <div class="text-5xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-2">2+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Years Experience</div>
                </div>
                <div class="stat-card glass-card rounded-2xl p-8 text-center border border-purple-600/50 hover:border-purple-500 transition-all duration-300">
                    <div class="text-5xl font-bold bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent mb-2">15+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Projects Completed</div>
                </div>
                <div class="stat-card glass-card rounded-2xl p-8 text-center border border-green-600/50 hover:border-green-500 transition-all duration-300">
                    <div class="text-5xl font-bold bg-gradient-to-r from-green-400 to-emerald-500 bg-clip-text text-transparent mb-2">10+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Technologies Mastered</div>
                </div>
                <div class="stat-card glass-card rounded-2xl p-8 text-center border border-orange-600/50 hover:border-orange-500 transition-all duration-300">
                    <div class="text-5xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent mb-2">16+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Average Project Score</div>
                </div>
            </div>
        </div> -->

        <!-- Development Approach -->
        <!-- <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold"><span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">My Development Philosophy</span></h2>
                <p class="text-lg text-gray-400 mt-4 max-w-2xl mx-auto">The principles that guide my work and shape every project I build.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-card rounded-2xl p-8 border border-cyan-600/50 hover:border-cyan-500 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-cyan-400 mb-4">Clean Code</h3>
                    <p class="text-gray-400 leading-relaxed">Writing maintainable, well-documented code that follows best practices and industry standards. Every line of code should tell a story.</p>
                </div>
                <div class="glass-card rounded-2xl p-8 border border-purple-600/50 hover:border-purple-500 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-400 mb-4">User-Centered Design</h3>
                    <p class="text-gray-400 leading-relaxed">Creating intuitive interfaces that prioritize user experience. Beautiful design means nothing if it doesn't serve the user's needs effectively.</p>
                </div>
                <div class="glass-card rounded-2xl p-8 border border-green-600/50 hover:border-green-500 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-400 mb-4">Performance First</h3>
                    <p class="text-gray-400 leading-relaxed">Optimizing every aspect of the application for speed and efficiency. Fast-loading, responsive applications create better experiences for everyone.</p>
                </div>
            </div>
        </div> -->

        <!-- Quote Section -->
        <div class="mb-24">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 rounded-2xl transform -rotate-1"></div>
                <div class="relative glass-card rounded-2xl p-12 border border-cyan-600/50">
                    <svg class="w-12 h-12 text-cyan-400/30 mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-2xl md:text-3xl text-gray-200 leading-relaxed mb-6 italic">
                        Code is like humor. When you have to explain it, it's bad.
                    </p>
                    <div class="flex items-center">
                        <div class="w-1 h-12 bg-gradient-to-b from-cyan-400 to-blue-500 rounded-full mr-4"></div>
                        <div>
                            <p class="text-cyan-400 font-semibold">Cory House</p>
                            <p class="text-gray-400 text-sm">Software Architect & Educator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold"><span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Get In Touch</span></h2>
                <p class="text-lg text-gray-400 mt-4 max-w-2xl mx-auto">Feel free to reach out for collaborations, opportunities, or just a friendly chat about technology.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <a href="mailto:{{ $developer['email'] }}" class="glass-card rounded-2xl p-8 border border-cyan-600/50 hover:border-cyan-500 transition-all duration-300 group">
                    <div class="flex items-center space-x-6">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-cyan-400 mb-1">Email</h3>
                            <p class="text-gray-400">{{ $developer['email'] }}</p>
                        </div>
                    </div>
                </a>
                <a href="tel:{{ $developer['phone'] }}" class="glass-card rounded-2xl p-8 border border-purple-600/50 hover:border-purple-500 transition-all duration-300 group">
                    <div class="flex items-center space-x-6">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-purple-400 mb-1">Phone</h3>
                            <p class="text-gray-400">{{ $developer['phone'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-500/10"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center glass-card rounded-2xl p-12">
            <h2 class="text-4xl font-bold mb-4"><span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Let's Work Together</span></h2>
            <p class="text-gray-400 text-lg mb-8 max-w-2xl mx-auto">I'm always excited to collaborate on interesting projects. If you have an idea, let's create something amazing together!</p>
            <a href="mailto:{{ $developer['email'] }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 transition-all duration-300 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Send an Email
            </a>
        </div>
    </div>
</section>


@endsection