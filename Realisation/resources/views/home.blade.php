@extends('layouts.app')

@section('content')
<div class="container text-center">
    <img src="{{ $developer['profile_picture'] }}" alt="Profile Picture" width="120" class="rounded-circle mb-3">
    <h1>{{ $developer['first_name'] }} {{ $developer['last_name'] }}</h1>
    <h3>{{ $developer['title'] }}</h3>
    <p>{{ $developer['bio'] }}</p>

    <h2 class="mt-5">Featured Projects</h2>
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                <div class="card-body">
                    <h5>{{ $project['title'] }}</h5>
                    <p>{{ $project['description'] }}</p>
                    <a href="{{ route('project.details', $project['id']) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
