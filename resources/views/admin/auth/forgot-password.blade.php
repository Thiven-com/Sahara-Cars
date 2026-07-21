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

.forgot-card{
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
    margin-bottom:25px;
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
    margin-bottom:25px;
}

.input-group-text{
    background:rgba(255,255,255,.15);
    border:none;
    color:#fff;
}

.form-control{
    height:58px;
    background:rgba(255,255,255,.15);
    border:none;
    color:#fff;
}

.form-control:focus{
    background:rgba(255,255,255,.18);
    color:#fff;
    box-shadow:none;
}

.form-control::placeholder{
    color:rgba(255,255,255,.7);
}

.btn-send{
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

.btn-send:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(255,255,255,.25);
}

.back-login{
    text-align:center;
    margin-top:25px;
}

.back-login a{
    color:#fff;
    text-decoration:none;
}

.alert{
    border-radius:12px;
}

@media(max-width:576px){

    .forgot-card{
        padding:30px 22px;
    }

}
</style>

<div class="login-wrapper">

    <div class="forgot-card">

        <div class="logo">
            <img src="{{ asset('website/images/logo1.png') }}" alt="Logo">
        </div>

        <div class="heading">
            <h2>Forgot Password 🔐</h2>
            <p>Enter your registered email to receive an OTP.</p>
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

        <form method="POST" action="{{ route('admin.password.sendOtp') }}">
            @csrf

            <label class="form-label">Email Address</label>

            <div class="input-group">

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Email Address"
                    required>

                <span class="input-group-text">
                    <i class="ti ti-mail"></i>
                </span>

            </div>

            <button type="submit" class="btn-send">
                Send OTP
            </button>

            <div class="back-login">
                <a href="{{ route('admin.login') }}">
                    <i class="ti ti-arrow-left"></i> Back to Login
                </a>
            </div>

        </form>

    </div>

</div>

@endsection