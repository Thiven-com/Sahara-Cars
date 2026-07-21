<?php $page = 'signin-2'; ?>
@extends('layout.mainlayout')

@section('content')

<style>
body{
    margin:0;
    font-family:Poppins,sans-serif;
    background:linear-gradient(135deg,#1E293B,#4B5563,#9CA3AF);
}

.login-wrapper{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.reset-card{
    width:460px;
    max-width:100%;
    background:rgba(255,255,255,.12);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);
    border:1px solid rgba(255,255,255,.18);
    border-radius:28px;
    padding:45px;
    box-shadow:0 25px 60px rgba(0,0,0,.25);
}

.logo{
    text-align:center;
    margin-bottom:20px;
}

.logo img{
    height:80px;
}

.heading{
    text-align:center;
    margin-bottom:35px;
}

.heading h2{
    color:#fff;
    font-weight:700;
    margin-bottom:8px;
}

.heading p{
    color:rgba(255,255,255,.8);
    margin:0;
}

.form-label{
    color:#fff;
    font-weight:500;
    margin-bottom:8px;
}

.pass-group{
    position:relative;
    margin-bottom:20px;
}

.pass-group .form-control{
    height:58px;
    background:rgba(255,255,255,.15);
    border:none;
    color:#fff;
    padding-right:50px;
}

.pass-group .form-control::placeholder{
    color:rgba(255,255,255,.65);
}

.pass-group .form-control:focus{
    background:rgba(255,255,255,.18);
    color:#fff;
    box-shadow:none;
}

.pass-group .toggle-password{
    position:absolute;
    right:18px;
    top:18px;
    color:#fff;
    cursor:pointer;
    font-size:18px;
}

.btn-reset{
    width:100%;
    height:58px;
    border:none;
    border-radius:15px;
    background:#fff;
    color:#2563EB;
    font-size:17px;
    font-weight:700;
    transition:.3s;
}

.btn-reset:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(255,255,255,.25);
}

.back-login{
    margin-top:25px;
    text-align:center;
}

.back-login a{
    color:#fff;
    text-decoration:none;
    font-weight:500;
}

.back-login a:hover{
    text-decoration:underline;
}

.alert{
    border-radius:12px;
}

@media(max-width:576px){

    .reset-card{
        padding:30px 22px;
    }

}
</style>

<div class="login-wrapper">

    <div class="reset-card">

        <div class="logo">
            <img src="{{ asset('website/images/logo1.png') }}" alt="Logo">
        </div>

        <div class="heading">
            <h2>Reset Password 🔒</h2>
            <p>Create a new secure password for your account.</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.password.resetOtp') }}">
            @csrf

            <input type="hidden" name="email" value="{{ $email }}">

            <div class="mb-3">
                <label class="form-label">New Password</label>

                <div class="pass-group">

                    <input
                        type="password"
                        name="password"
                        class="form-control pass-input @error('password') is-invalid @enderror"
                        placeholder="Enter New Password"
                        required>

                    <span class="ti ti-eye-off toggle-password"></span>

                </div>

                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label">Confirm Password</label>

                <div class="pass-group">

                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control pass-input"
                        placeholder="Confirm Password"
                        required>

                    <span class="ti ti-eye-off toggle-password"></span>

                </div>

            </div>

            <button type="submit" class="btn-reset">
                Reset Password
            </button>

            <div class="back-login">

                <a href="{{ route('admin.login') }}">
                    <i class="ti ti-arrow-left"></i>
                    Back to Login
                </a>

            </div>

        </form>

    </div>

</div>

@endsection