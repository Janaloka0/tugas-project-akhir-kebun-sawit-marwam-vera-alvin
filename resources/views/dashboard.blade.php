@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Dashboard, {{ Auth::user()->name }}</h1>
        <p>You are logged in as {{ Auth::user()->role }}</p>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
