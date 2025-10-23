@extends('layouts.app')

@section('title', 'Projects - Anouar')

@section('content')
<!-- Header Section -->
        <section class="py-24 relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">My Projects</span>
                </h1>
                <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                    A collection of my work showcasing full-stack development, modern design, and creative problem-solving.
                </p>
            </div>
        </section>

        <!-- Projects Grid -->
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    @foreach ($projects as $project)
                    <div class="glass-card rounded-2xl overflow-hidden border border-white/10 hover:border-cyan-500 transition-all duration-300 transform hover:-translate-y-2 shadow-lg hover:shadow-xl flex flex-col project-card">
                        <img src="{{ asset($project['image']) }}" alt="Screenshot of {{ $project['title'] }}" class="w-full h-56 object-cover project-image">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold mb-3 text-cyan-400">{{ $project['title'] }}</h3>
                            <p class="text-gray-300 mb-6 flex-grow">{{ $project['description'] }}</p>
                            <a href="{{ route('project.details', ['id' => $project['id']]) }}" class="inline-block mt-auto px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-center font-semibold rounded-full shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-105">View Details</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
