@extends('layout')

@section('title', 'Login')

@section('content')
<div class="login-page bg-body-secondary">
    <div class="login-logo"></div>
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
            <form action="/login" method='post'>
                @csrf
                <div class="input-group mb-3"> <input type="text" name='name' class="form-control" placeholder='username'></div>
                <div class="input-group mb-3"> <input type="password" name='password' class="form-control" placeholder="Password"></div>
                <div class="col-4">
                    <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button> </div>
                </div>
                <!-- <button type="submit">masuk</button> -->

            </form>
        </div>
    </div>
</div>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@endsection