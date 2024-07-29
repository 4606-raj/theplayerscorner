@extends('layouts.main')

@section('content')
    <div style="min-height: 100vh">
        <h1 class="text-light text-center mt-4">Welcome to Player's profile, {{ Auth::user()->first_name }}</h1>
    </div>
@endsection