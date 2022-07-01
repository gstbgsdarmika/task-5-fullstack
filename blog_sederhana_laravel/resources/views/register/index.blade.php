@extends('layouts.main2')
@section('container')
<title>Register</title>
<section id="register" class="d-flex">
    <div class="register-left w-50 h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-10">
                <img src="img/register.png" alt="" class="img-register">
                <p><span class="fw-bold color-acsent">Maju Bersama</span> hadir untuk membantu mahasiswa ataupun siswa untuk mempermudah dalam pencarian informasi lomba, webinar beasiswa hingga event - event lainnya.
                </p>
            </div>
        </div>
    </div>

    <div class="register-right w-50 h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-10">
                <div class="card-register">
                    <div class="content-register">
                    <div class="title-register">
                        <h1>Daftar <span class="color-acsent">Maju Bersama</span></h1>
                        <p>Sudah punya akun MajuBersama? <a href="/login" class="text-decoration-none"><span class="color-acsent"> Masuk</span></a></p>
                    </div>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="register-form">
                                <div>
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" required value="{{ old('name') }}"> 
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Enter your username" required value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror  
                                </div>

                                <div>
                                    <label for="email" class="form-label">Email</label>
                                    <input  type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" required value="{{ old('email') }}"> 
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                </div>

                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" required>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror   
                                </div>

                                <button class="daftar" type="submit">Register</button>  
                                <button class="signin-google">
                                    <img src="img/icons/google.svg" alt="">
                                Sign In With Google
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection