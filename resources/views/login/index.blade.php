@extends('partials.login')
@section('title')
    Samalogi | Login
@endsection

@section('content')
@if (session()->has('success'))
    {{session('success')}}
@endif

@if (session()->has('error'))
    {{session('error')}}
@endif

<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <a href="/">
                <img class="mb-4" src="img/logo_samalogi.png" width="260px">
                </a>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-4">
                    <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                        <input type="username" name="username" class="form-control" @error('username') is-invalid @enderror id="username" aria-describedby="emailHelp" placeholder="Username" required>
                    </div>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                    <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                        <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror id="password" placeholder="Password" required>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                    </div>
                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-primary btn-login"><i class="bi bi-box-arrow-in-left"></i> Login</button>
                    </div>
                </form>
            </div>
            </div>
    </div>
@endsection
