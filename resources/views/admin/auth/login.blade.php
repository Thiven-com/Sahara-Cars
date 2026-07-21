<?php $page = 'signin-2'; ?>
@extends('layout.mainlayout')
@section('content')
    <style>
        /* :root {
            --primary: #F97316;
            --primary-dark: #EA580C;
            --primary-light: #FED7AA;

            --dark: #111111;
            --light: #FFFFFF;
            --gray: #6B7280;
        } */

        body {
            margin: 0;
            font-family: Poppins, sans-serif;
            background: linear-gradient(135deg, #0f172a, #6B7280, #FFFFFF);
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .login-card {

            width: 430px;
            max-width: 100%;

            background: rgba(255, 255, 255, .12);

            backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, .25);

            border-radius: 28px;

            padding: 45px;

            box-shadow:
                0 25px 60px rgba(0, 0, 0, .25);

        }

        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo {
            height: 80px;
            margin-bottom: 20px;
        }

        .login-header h2 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .login-header p {
            color: rgba(255, 255, 255, .8);
        }

        .input-box {

            position: relative;

            margin-bottom: 22px;

        }

        .input-box i {

            position: absolute;

            left: 18px;

            top: 18px;

            color: #ffffffaa;

            font-size: 20px;

        }

        .input-box input {

            width: 100%;

            height: 58px;

            border: none;

            border-radius: 14px;

            padding-left: 55px;

            padding-right: 50px;

            background: rgba(255, 255, 255, .15);

            color: #fff;

            font-size: 15px;

            outline: none;

        }

        .input-box input::placeholder {
            color: #ffffff99;
        }

        .toggle-password {

            position: absolute;

            right: 18px;

            top: 19px;

            color: #fff;

            cursor: pointer;

        }

        .login-options {

            display: flex;

            justify-content: space-between;

            margin-bottom: 30px;

            color: #fff;

            font-size: 14px;

        }

        .login-options a {

            color: #fff;

            text-decoration: none;

        }

        .login-btn {

            width: 100%;

            height: 58px;

            border: none;

            border-radius: 15px;

            background: #fff;

            color: #2563eb;

            font-weight: 700;

            font-size: 17px;

            transition: .35s;

        }

        .login-btn:hover {

            transform: translateY(-4px);

            box-shadow: 0 15px 35px rgba(255, 255, 255, .35);

        }

        @media(max-width:576px) {

            .login-card {
                padding: 30px 22px;
            }

        }
    </style>
    <div class="login-wrapper">
        <div class="login-card">

            <div class="login-header">
                <img src="{{ asset($site->site_logo) }}" class="logo">

                <h2>Welcome Back 👋</h2>

                <p>Sign in to continue to your dashboard</p>
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

            <form action="{{ route('admin.loginAction') }}" method="POST">
                @csrf

                <div class="input-box">
                    <i class="ti ti-mail"></i>
                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email', $email ?? '') }}">
                </div>

                <div class="input-box">
                    <i class="ti ti-lock"></i>

                    <input type="password" name="password" class="pass-input" placeholder="Password">

                    <span class="toggle-password ti ti-eye-off"></span>
                </div>

                <div class="login-options">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember Me
                    </label>

                    <a href="{{ route('admin.password.request') }}">
                        Forgot Password?
                    </a>
                </div>

                <button class="login-btn">
                    Sign In
                </button>

            </form>

        </div>
    </div>
@endsection