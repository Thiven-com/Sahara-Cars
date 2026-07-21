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

.verify-card{
    width:450px;
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

.input-group{
    margin-bottom:20px;
}

.form-control{
    height:58px;
    background:rgba(255,255,255,.15);
    border:none;
    color:#fff;
    text-align:center;
    font-size:22px;
    font-weight:600;
    letter-spacing:8px;
}

.form-control::placeholder{
    color:rgba(255,255,255,.6);
    letter-spacing:2px;
    font-size:16px;
}

.form-control:focus{
    background:rgba(255,255,255,.18);
    color:#fff;
    box-shadow:none;
}

.input-group-text{
    background:rgba(255,255,255,.15);
    border:none;
    color:#fff;
}

.btn-verify{
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

.btn-verify:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(255,255,255,.25);
}

.bottom-links{
    margin-top:25px;
    text-align:center;
}

.bottom-links a{
    color:#fff;
    text-decoration:none;
    font-weight:500;
}

.bottom-links a:hover{
    text-decoration:underline;
}

.alert{
    border-radius:12px;
}

@media(max-width:576px){

    .verify-card{
        padding:30px 22px;
    }

}
</style>

<div class="login-wrapper">

    <div class="verify-card">

        <div class="logo">
            <img src="{{ asset($site->site_logo) }}" alt="Logo">
        </div>

        <div class="heading">
            <h2>Verify OTP 🔐</h2>
            <p>Enter the 6-digit verification code sent to your registered email.</p>
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

        <form method="POST" action="{{ route('admin.password.verifyOtp') }}">
            @csrf

            <input type="hidden" name="email" value="{{ session('email') }}">

            <label class="form-label">OTP Code</label>

            <div class="input-group">

                <input
                    type="text"
                    name="otp"
                    maxlength="6"
                    autocomplete="one-time-code"
                    class="form-control @error('otp') is-invalid @enderror"
                    placeholder="000000"
                    required>

                <span class="input-group-text">
                    <i class="ti ti-key"></i>
                </span>

            </div>

            @error('otp')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <button type="submit" class="btn-verify">
                Verify OTP
            </button>

            <div class="bottom-links mt-4">

                <a href="{{ route('admin.password.request') }}">
                    <i class="ti ti-refresh"></i>
                    Resend OTP
                </a>

                <br><br>

                <a href="{{ route('admin.login') }}">
                    <i class="ti ti-arrow-left"></i>
                    Back to Login
                </a>

            </div>

        </form>

    </div>

</div>

@endsection