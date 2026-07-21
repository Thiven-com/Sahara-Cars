@extends('layouts.website')
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
        }

        body {
            background: #f8f9fb;
            overflow-x: hidden;
        }

        :root {

            --primary: #ff4d00;
            --dark: #111;
            --shadow: 0 20px 50px rgba(0, 0, 0, .12);

        }

        a {
            text-decoration: none;
        }

        header {

            position: absolute;
            top: 0;
            width: 100%;
            z-index: 999;

        }

        .navbar {

            padding: 18px 0;
            transition: .4s;

        }

        .navbar-brand {

            font-size: 34px;
            font-weight: 800;
            color: #fff;

        }

        .navbar-brand span {

            color: var(--primary);

        }

        .nav-link {

            color: #fff !important;
            margin: 0 15px;

        }

        .btn-main {

            background: var(--primary);
            color: #fff;
            padding: 14px 34px;
            border-radius: 50px;

        }

        .hero {

            height: 100vh;
            position: relative;

        }

        .hero .swiper {

            height: 100%;

        }

        .hero img {

            width: 100%;
            height: 100vh;
            object-fit: cover;

        }

        .hero::after {

            content: '';

            position: absolute;

            inset: 0;

            background: linear-gradient(rgba(0, 0, 0, .55), rgba(0, 0, 0, .55));

        }

        .hero-content {

            position: absolute;

            left: 0;
            right: 0;
            top: 50%;

            transform: translateY(-50%);

            z-index: 20;

            color: #fff;

        }

        .hero h1 {

            font-size: 60px;
            font-weight: 800;

        }

        .hero p {

            font-size: 18px;

            color: #ddd;

        }

        .price-card {

            background: rgba(255, 255, 255, .1);

            backdrop-filter: blur(18px);

            padding: 35px;

            border-radius: 20px;

            border: 1px solid rgba(255, 255, 255, .2);

        }

        .price {

            font-size: 42px;

            font-weight: 800;

            color: #ff4d00;

        }

        .thumb-slider {

            margin-top: 15px;

        }

        .thumb-slider img {

            height: 90px;

            border-radius: 12px;

            cursor: pointer;

        }

        .floating {

            animation: floating 4s infinite ease-in-out;

        }

        @keyframes floating {

            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0);
            }

        }

        .section {

            padding: 90px 0;

        }

        .spec-card {

            background: #fff;

            padding: 30px;

            border-radius: 20px;

            box-shadow: var(--shadow);

            transition: .35s;

        }

        .spec-card:hover {

            transform: translateY(-8px);

        }

        .quick-icon {

            width: 70px;
            height: 70px;

            background: #fff3ee;

            display: flex;

            justify-content: center;
            align-items: center;

            border-radius: 50%;

            color: var(--primary);

            font-size: 28px;

            margin: auto;

            margin-bottom: 20px;

        }
    </style>
    <section class="hero">

        <div class="swiper heroSwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=2200">

                </div>

                <div class="swiper-slide">

                    <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=2200">

                </div>

                <div class="swiper-slide">

                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=2200">

                </div>

            </div>

        </div>

        <div class="hero-content">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-7" data-aos="fade-right">

                        <span class="badge bg-danger mb-3">

                            CERTIFIED

                        </span>

                        <h1>

                            BMW X5 M Sport

                        </h1>

                        <p>

                            2024 • Diesel • Automatic • 18,000 KM

                        </p>

                        <div class="d-flex gap-3 mt-4">

                            <a class="btn btn-danger">

                                Book Test Drive

                            </a>

                            <a class="btn btn-light">

                                View Inspection

                            </a>

                        </div>

                    </div>

                    <div class="col-lg-5" data-aos="fade-left">

                        <div class="price-card floating">

                            <div class="price">

                                ₹82,90,000

                            </div>

                            <p>

                                EMI Starts at ₹1,14,900/month

                            </p>

                            <hr>

                            <div class="row text-center">

                                <div class="col">

                                    <i class="fa-solid fa-heart fa-xl"></i>

                                </div>

                                <div class="col">

                                    <i class="fa-solid fa-share-nodes fa-xl"></i>

                                </div>

                                <div class="col">

                                    <i class="fa-solid fa-code-compare fa-xl"></i>

                                </div>

                                <div class="col">

                                    <i class="fa-solid fa-360-degrees fa-xl"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-3" data-aos="zoom-in">

                    <div class="spec-card text-center">

                        <div class="quick-icon">

                            <i class="fa-solid fa-road"></i>

                        </div>

                        <h5>

                            18,000 KM

                        </h5>

                        <p>

                            Driven

                        </p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">

                    <div class="spec-card text-center">

                        <div class="quick-icon">

                            <i class="fa-solid fa-gas-pump"></i>

                        </div>

                        <h5>

                            Diesel

                        </h5>

                        <p>

                            Fuel Type

                        </p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="200">

                    <div class="spec-card text-center">

                        <div class="quick-icon">

                            <i class="fa-solid fa-gear"></i>

                        </div>

                        <h5>

                            Automatic

                        </h5>

                        <p>

                            Transmission

                        </p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="300">

                    <div class="spec-card text-center">

                        <div class="quick-icon">

                            <i class="fa-solid fa-calendar"></i>

                        </div>

                        <h5>

                            2024

                        </h5>

                        <p>

                            Model Year

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <div class="spec-card mb-4" data-aos="fade-right">

                        <h2 class="fw-bold mb-4">

                            Vehicle Overview

                        </h2>

                        <p>

                            The BMW X5 M Sport combines luxury,
                            performance and advanced technology.
                            Powered by a refined diesel engine with
                            automatic transmission, it delivers
                            outstanding driving comfort while maintaining
                            excellent fuel efficiency.

                            Every Sahara Cars Certified vehicle undergoes
                            a comprehensive inspection before delivery.

                        </p>

                        <hr>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <strong>Registration</strong>

                                <p class="text-muted">

                                    KA 01 XX 1234

                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Ownership</strong>

                                <p class="text-muted">

                                    1st Owner

                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Insurance</strong>

                                <p class="text-muted">

                                    Comprehensive

                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Valid Till</strong>

                                <p class="text-muted">

                                    March 2027

                                </p>

                            </div>

                            <div class="col-md-6">

                                <strong>Service History</strong>

                                <p class="text-muted">

                                    Authorized BMW Service

                                </p>

                            </div>

                            <div class="col-md-6">

                                <strong>Accident History</strong>

                                <p class="text-success">

                                    No Major Accident

                                </p>

                            </div>

                        </div>

                    </div>





                    <!-- FEATURES -->

                    <div class="spec-card" data-aos="fade-up">

                        <h2 class="fw-bold mb-4">

                            Features

                        </h2>

                        <div class="row g-3">

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    360° Camera

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Panoramic Sunroof

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Leather Seats

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Apple CarPlay

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Android Auto

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Adaptive Cruise Control

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    HUD Display

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Wireless Charging

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="d-flex">

                                    <i class="fa-solid fa-circle-check text-danger me-3 mt-1"></i>

                                    Ambient Lighting

                                </div>

                            </div>

                        </div>

                    </div>





                    <!-- SPEC TABLE -->

                    <div class="spec-card mt-4" data-aos="fade-up">

                        <h2 class="fw-bold mb-4">

                            Technical Specifications

                        </h2>

                        <table class="table">

                            <tbody>

                                <tr>

                                    <th>Engine</th>

                                    <td>2993 cc Twin Turbo</td>

                                </tr>

                                <tr>

                                    <th>Power</th>

                                    <td>286 HP</td>

                                </tr>

                                <tr>

                                    <th>Torque</th>

                                    <td>650 Nm</td>

                                </tr>

                                <tr>

                                    <th>Transmission</th>

                                    <td>8-Speed Automatic</td>

                                </tr>

                                <tr>

                                    <th>Fuel Tank</th>

                                    <td>80 Litres</td>

                                </tr>

                                <tr>

                                    <th>Mileage</th>

                                    <td>14.2 km/l</td>

                                </tr>

                                <tr>

                                    <th>Drive Type</th>

                                    <td>AWD</td>

                                </tr>

                                <tr>

                                    <th>Color</th>

                                    <td>Carbon Black</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>





                <!-- RIGHT SIDEBAR -->

                <div class="col-lg-4">

                    <div class="spec-card position-sticky" style="top:100px;" data-aos="fade-left">

                        <h3 class="fw-bold">

                            Inspection Report

                        </h3>

                        <hr>

                        <p>

                            Engine

                            <span class="float-end">

                                98%

                            </span>

                        </p>

                        <div class="progress mb-4">

                            <div class="progress-bar bg-success" style="width:98%;">

                            </div>

                        </div>

                        <p>

                            Transmission

                            <span class="float-end">

                                96%

                            </span>

                        </p>

                        <div class="progress mb-4">

                            <div class="progress-bar bg-success" style="width:96%;">

                            </div>

                        </div>

                        <p>

                            Suspension

                            <span class="float-end">

                                95%

                            </span>

                        </p>

                        <div class="progress mb-4">

                            <div class="progress-bar bg-success" style="width:95%;">

                            </div>

                        </div>

                        <p>

                            Interior

                            <span class="float-end">

                                99%

                            </span>

                        </p>

                        <div class="progress mb-4">

                            <div class="progress-bar bg-success" style="width:99%;">

                            </div>

                        </div>

                        <p>

                            Exterior

                            <span class="float-end">

                                97%

                            </span>

                        </p>

                        <div class="progress mb-4">

                            <div class="progress-bar bg-success" style="width:97%;">

                            </div>

                        </div>

                        <hr>

                        <div class="d-grid gap-3">

                            <button class="btn btn-danger btn-lg">

                                Book Test Drive

                            </button>

                            <button class="btn btn-success btn-lg">

                                <i class="fab fa-whatsapp"></i>

                                WhatsApp

                            </button>

                            <button class="btn btn-outline-dark btn-lg">

                                Call Dealer

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="row">

                <div class="col-lg-7" data-aos="fade-right">

                    <div class="spec-card">

                        <h2 class="fw-bold mb-4">

                            Finance Calculator

                        </h2>

                        <div class="mb-4">

                            <label class="fw-semibold">

                                Vehicle Price

                            </label>

                            <input id="carPrice" type="range" min="1000000" max="20000000" step="50000" value="8290000"
                                class="form-range">

                            <h4 id="priceValue">

                                ₹82,90,000

                            </h4>

                        </div>

                        <div class="mb-4">

                            <label class="fw-semibold">

                                Down Payment

                            </label>

                            <input id="downPayment" type="range" min="0" max="5000000" step="50000" value="1500000"
                                class="form-range">

                            <h4 id="downValue">

                                ₹15,00,000

                            </h4>

                        </div>

                        <div class="mb-4">

                            <label class="fw-semibold">

                                Interest Rate

                            </label>

                            <input id="interestRate" type="range" min="6" max="15" step=".1" value="8.5" class="form-range">

                            <h4 id="interestText">

                                8.5%

                            </h4>

                        </div>

                        <div class="mb-4">

                            <label class="fw-semibold">

                                Loan Tenure

                            </label>

                            <input id="loanYears" type="range" min="1" max="7" value="5" class="form-range">

                            <h4 id="yearText">

                                5 Years

                            </h4>

                        </div>

                    </div>

                </div>



                <div class="col-lg-5" data-aos="fade-left">

                    <div class="spec-card">

                        <h4 class="fw-bold">

                            Estimated EMI

                        </h4>

                        <hr>

                        <h1 id="monthlyEMI" class="text-danger fw-bold">

                            ₹1,14,900

                        </h1>

                        <p>

                            Monthly Payment

                        </p>

                        <hr>

                        <p>

                            Loan Amount

                            <span id="loanAmount" class="float-end">

                                ₹67,90,000

                            </span>

                        </p>

                        <p>

                            Interest

                            <span id="interestPay" class="float-end">

                                ₹15,40,000

                            </span>

                        </p>

                        <p>

                            Total Payment

                            <span id="totalPay" class="float-end">

                                ₹83,30,000

                            </span>

                        </p>

                        <button class="btn btn-danger w-100 mt-4 btn-lg">

                            Apply For Finance

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="row">

                <div class="col-lg-5" data-aos="fade-right">

                    <div class="spec-card text-center">

                        <img src="https://randomuser.me/api/portraits/men/32.jpg" width="130"
                            class="rounded-circle shadow mb-4">

                        <h3>

                            Rajesh Kumar

                        </h3>

                        <p class="text-danger">

                            Verified Dealer

                        </p>

                        <hr>

                        <div class="d-grid gap-3">

                            <a href="#" class="btn btn-success">

                                <i class="fab fa-whatsapp"></i>

                                WhatsApp

                            </a>

                            <a href="#" class="btn btn-danger">

                                <i class="fa-solid fa-phone"></i>

                                Call Dealer

                            </a>

                            <a href="#" class="btn btn-dark">

                                <i class="fa-solid fa-video"></i>

                                Video Call

                            </a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-7" data-aos="fade-left">

                    <div class="spec-card">

                        <h2 class="fw-bold">

                            Book Test Drive

                        </h2>

                        <div class="row mt-4">

                            <div class="col-md-6 mb-3">

                                <input class="form-control" placeholder="Full Name">

                            </div>

                            <div class="col-md-6 mb-3">

                                <input class="form-control" placeholder="Phone Number">

                            </div>

                            <div class="col-md-6 mb-3">

                                <input class="form-control" type="date">

                            </div>

                            <div class="col-md-6 mb-3">

                                <input class="form-control" type="time">

                            </div>

                            <div class="col-12 mb-3">

                                <textarea rows="4" class="form-control" placeholder="Message"></textarea>

                            </div>

                            <div class="col-12">

                                <button class="btn btn-danger btn-lg w-100">

                                    Schedule Test Drive

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Visit Our Showroom

                </h2>

            </div>

            <div class="rounded-4 overflow-hidden shadow" data-aos="zoom-in">

                <iframe src="https://www.google.com/maps?q=Bangalore&output=embed" width="100%" height="450"
                    style="border:0;" loading="lazy">

                </iframe>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-5">

                <h2 class="fw-bold">

                    Similar Cars

                </h2>

                <a href="buy-cars.html" class="btn btn-outline-danger">

                    View All

                </a>

            </div>

            <div class="swiper similarSwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class="spec-card">

                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800"
                                class="img-fluid rounded-4 mb-3">

                            <h5>

                                BMW X3

                            </h5>

                            <h4 class="text-danger">

                                ₹54.9 Lakh

                            </h4>

                            <button class="btn btn-danger w-100">

                                View Details

                            </button>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="spec-card">

                            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=800"
                                class="img-fluid rounded-4 mb-3">

                            <h5>

                                Audi Q7

                            </h5>

                            <h4 class="text-danger">

                                ₹69.9 Lakh

                            </h4>

                            <button class="btn btn-danger w-100">

                                View Details

                            </button>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="spec-card">

                            <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=800"
                                class="img-fluid rounded-4 mb-3">

                            <h5>

                                Mercedes GLC

                            </h5>

                            <h4 class="text-danger">

                                ₹61.5 Lakh

                            </h4>

                            <button class="btn btn-danger w-100">

                                View Details

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h6 class="text-danger fw-bold">

                    CUSTOMER FEEDBACK

                </h6>

                <h2 class="fw-bold">

                    What Our Customers Say

                </h2>

            </div>

            <div class="swiper reviewSwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class="spec-card">

                            <div class="d-flex align-items-center mb-4">

                                <img src="https://randomuser.me/api/portraits/men/42.jpg" width="70"
                                    class="rounded-circle me-3">

                                <div>

                                    <h5 class="mb-0">

                                        Rahul Sharma

                                    </h5>

                                    <small class="text-muted">

                                        Verified Buyer

                                    </small>

                                </div>

                            </div>

                            <div class="text-warning fs-5 mb-3">

                                ★★★★★

                            </div>

                            <p>

                                Excellent buying experience. Vehicle condition
                                was exactly as promised and finance approval
                                was completed within one day.

                            </p>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="spec-card">

                            <div class="d-flex align-items-center mb-4">

                                <img src="https://randomuser.me/api/portraits/women/51.jpg" width="70"
                                    class="rounded-circle me-3">

                                <div>

                                    <h5 class="mb-0">

                                        Sneha Reddy

                                    </h5>

                                    <small class="text-muted">

                                        Verified Buyer

                                    </small>

                                </div>

                            </div>

                            <div class="text-warning fs-5 mb-3">

                                ★★★★★

                            </div>

                            <p>

                                Professional team, transparent pricing and
                                amazing customer support throughout the
                                purchase process.

                            </p>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="spec-card">

                            <div class="d-flex align-items-center mb-4">

                                <img src="https://randomuser.me/api/portraits/men/61.jpg" width="70"
                                    class="rounded-circle me-3">

                                <div>

                                    <h5 class="mb-0">

                                        Arjun Patel

                                    </h5>

                                    <small class="text-muted">

                                        Verified Buyer

                                    </small>

                                </div>

                            </div>

                            <div class="text-warning fs-5 mb-3">

                                ★★★★★

                            </div>

                            <p>

                                One of the best luxury car dealerships in India.
                                Highly recommended.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="swiper-pagination mt-4"></div>

            </div>

        </div>

    </section> --}}

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Frequently Asked Questions

                </h2>

            </div>

            <div class="accordion" id="faq">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">

                            Can I finance this vehicle?

                        </button>

                    </h2>

                    <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faq">

                        <div class="accordion-body">

                            Yes. We provide finance through multiple
                            leading banks with competitive interest rates.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">

                            Is this vehicle certified?

                        </button>

                    </h2>

                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">

                            Every Sahara Cars Certified vehicle undergoes
                            a detailed inspection before delivery.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q3">

                            Can I exchange my current car?

                        </button>

                    </h2>

                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">

                            Yes.
                            We provide instant valuation and exchange
                            offers.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section style="background:#111;padding:90px 0;">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8 text-white">

                    <h2 class="fw-bold">

                        Ready To Own This BMW X5?

                    </h2>

                    <p>

                        Book a test drive today or talk to our experts.

                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="#" class="btn btn-danger btn-lg">

                        Book Test Drive

                    </a>

                </div>

            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".heroSwiper", {
            loop: true,
            autoplay: {
                delay: 3500
            },
            effect: "fade"
        });

        new Swiper(".similarSwiper", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            autoplay: {
                delay: 3000
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1200: { slidesPerView: 3 }
            }
        });

        new Swiper(".reviewSwiper", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 4500
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });

        function formatINR(value) {
            return "₹" + Number(value).toLocaleString("en-IN");
        }

        function calculateEMI() {

            const price = +carPrice.value;
            const down = +downPayment.value;
            const principalValue = price - down;

            const rate = (+interestRate.value) / 12 / 100;
            const months = (+loanYears.value) * 12;

            const emi = (principalValue * rate * Math.pow(1 + rate, months)) /
                (Math.pow(1 + rate, months) - 1);

            const total = emi * months;
            const interest = total - principalValue;

            priceValue.innerHTML = formatINR(price);
            downValue.innerHTML = formatINR(down);
            interestText.innerHTML = interestRate.value + "%";
            yearText.innerHTML = loanYears.value + " Years";

            monthlyEMI.innerHTML = formatINR(Math.round(emi));
            loanAmount.innerHTML = formatINR(principalValue);
            interestPay.innerHTML = formatINR(Math.round(interest));
            totalPay.innerHTML = formatINR(Math.round(total));

        }

        carPrice.oninput = calculateEMI;
        downPayment.oninput = calculateEMI;
        interestRate.oninput = calculateEMI;
        loanYears.oninput = calculateEMI;

        calculateEMI();
    </script>
@endsection