@extends('layouts.main2')
@section('container')
<title>Login</title>
<section id="login" class="d-flex">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-10">
                <img src="img/login.png" alt="" class="img-login">
            </div>
        </div>
    </div>

    <div class="login-right w-50 h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-10">
                <div class="card-login">
                    <div class="content-login">
                        <div class="title-login">
                            <h1><span>Login </span><span class="color-acsent">Maju Bersama</span></h1>
                            <p class="mt-2">Selamat datang kembali! Silakan masukkan detail Anda.</p>
                        </div>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="login-form">
                                <div>
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" autofocus required value="{{ old('email') }}" > 
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                </div>

                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>   
                                    <a href="#" class="text-decoration-none text-center">Forgot password</a>     
                                    <button class="signin">Log in</button>  
                                    <button class="signin-google">
                                        <img src="img/icons/google.svg" alt="">Sign In With Google
                                    </button>
                                <div class="text-center mb-5">
                                    <span class="d-inline">Don't have an account? <a href="/register" class="d-inline text-decoration-none">Sign up for free</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection