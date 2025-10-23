@extends('layouts.app')

@section('content')
<div class="container text-center">
    <img src="{{ $developer['profile_picture'] }}" alt="Profile" width="120" class="rounded-circle mb-3">
    <h1>{{ $developer['first_name'] }} {{ $developer['last_name'] }}</h1>
    <h4>{{ $developer['title'] }}</h4>
    <p>{{ $developer['bio'] }}</p>
    <p>Email: <a href="mailto:{{ $developer['email'] }}">{{ $developer['email'] }}</a></p>
    <p>Phone: {{ $developer['phone'] }}</p>
</div>
@endsection
