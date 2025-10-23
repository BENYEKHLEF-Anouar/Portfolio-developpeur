@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Projects</h1>
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                <div class="card-body">
                    <h5>{{ $project['title'] }}</h5>
                    <p>{{ $project['description'] }}</p>
                    <a href="{{ route('project.details', $project['id']) }}" class="btn btn-outline-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
