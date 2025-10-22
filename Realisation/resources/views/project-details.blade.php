@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project['title'] }}</h1>
    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="img-fluid mb-3">
    <p>{{ $project['description'] }}</p>

    <p><strong>Start Date:</strong> {{ $project['start_date'] }}</p>
    <p><strong>End Date:</strong> {{ $project['end_date'] }}</p>

    <p><a href="{{ $project['github_link'] }}" target="_blank">GitHub</a> | 
       <a href="{{ $project['demo_link'] }}" target="_blank">Live Demo</a></p>

    <h4 class="mt-4">Technologies Used:</h4>
    <ul>
        @foreach ($project['technologies'] as $tech)
        <li>{{ $tech['name'] }}</li>
        @endforeach
    </ul>

    <a href="{{ route('projects') }}" class="btn btn-secondary mt-3">Back to Projects</a>
</div>
@endsection
