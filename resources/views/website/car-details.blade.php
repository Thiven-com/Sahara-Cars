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

    <style>
        .gallery-card {

            overflow: hidden;

            border-radius: 20px;

            position: relative;

            box-shadow: var(--shadow);

            cursor: pointer;

        }

        .gallery-card img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: .5s;

        }

        .gallery-card:hover img {

            transform: scale(1.08);

        }

        .overlay {

            position: absolute;

            left: 0;
            right: 0;
            bottom: 0;

            padding: 25px;

            background: linear-gradient(transparent, rgba(0, 0, 0, .85));

            color: #fff;

            opacity: 0;

            transition: .35s;

        }

        .gallery-card:hover .overlay {

            opacity: 1;

        }

        .overlay h5 {

            margin-bottom: 8px;

        }

        .overlay i {

            background: #fff;

            color: #111;

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

        }

        .masonry {

            column-count: 3;

            column-gap: 22px;

        }

        .item {

            break-inside: avoid;

            margin-bottom: 22px;

        }

        @media(max-width:992px) {

            .masonry {

                column-count: 2;

            }

            .hero h1 {

                font-size: 44px;

            }

        }

        @media(max-width:600px) {

            .masonry {

                column-count: 1;

            }

            .hero {

                height: 60vh;

            }

        }
    </style>
    <section class="hero">

        <div class="swiper heroSwiper">

            <div class="swiper-wrapper">

                @if($car->galleries->count())
                    <div class="swiper-slide">
                        <img src="{{ asset($car->thumbnail) }}" alt="{{ $car->model }}">
                    </div>

                    @foreach($car->galleries as $gallery)

                        <div class="swiper-slide">
                            <img src="{{ asset($gallery->image) }}" alt="{{ $car->model }}">
                        </div>

                    @endforeach

                @else

                    <div class="swiper-slide">
                        <img src="{{ asset($car->thumbnail) }}" alt="{{ $car->model }}">
                    </div>

                @endif

            </div>

        </div>

        <div class="hero-content">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-7" data-aos="fade-right">

                        @if($car->featured)
                            <span class="badge bg-danger mb-3">
                                FEATURED
                            </span>
                        @endif

                        <h1>
                            {{ optional($car->brand)->name }}
                            {{ $car->model }}
                        </h1>

                        <p>

                            {{ $car->year }}
                            •

                            {{ $car->fuel_type }}
                            •

                            {{ $car->transmission }}
                            •

                            {{ number_format($car->kilometers) }} KM

                        </p>

                        {{-- <div class="d-flex gap-3 mt-4">

                            <a href="#test-drive" class="btn btn-danger">
                                Book Test Drive
                            </a>

                            <a href="#overview" class="btn btn-light">
                                View Details
                            </a>

                        </div> --}}

                    </div>

                    <div class="col-lg-5" data-aos="fade-left">

                        <div class="price-card floating">

                            <div class="price">

                                ₹{{ number_format($car->price) }}

                            </div>

                            <p>

                                {{ ucfirst($car->ownership) }}

                                •

                                {{ $car->registration_no }}

                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-3">

                    <div class="spec-card text-center">

                        <div class="quick-icon">
                            <i class="fa-solid fa-road"></i>
                        </div>

                        <h5>{{ number_format($car->kilometers) }} KM</h5>

                        <p>Driven</p>

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="spec-card text-center">

                        <div class="quick-icon">
                            <i class="fa-solid fa-gas-pump"></i>
                        </div>

                        <h5>{{ $car->fuel_type }}</h5>

                        <p>Fuel Type</p>

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="spec-card text-center">

                        <div class="quick-icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>

                        <h5>{{ $car->transmission }}</h5>

                        <p>Transmission</p>

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="spec-card text-center">

                        <div class="quick-icon">
                            <i class="fa-solid fa-calendar"></i>
                        </div>

                        <h5>{{ $car->year }}</h5>

                        <p>Model Year</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light" id="overview">

        <div class="container">

            <div class="row">

                <!-- LEFT CONTENT -->

                <div class="col-lg-8">

                    <!-- Vehicle Overview -->

                    <div class="spec-card mb-4" data-aos="fade-right">

                        <h2 class="fw-bold mb-4">
                            Vehicle Overview
                        </h2>

                        <p>
                            {!! nl2br(e($car->overview)) !!}
                        </p>

                        <hr>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <strong>Brand</strong>

                                <p class="text-muted">
                                    {{ optional($car->brand)->name }}
                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Category</strong>

                                <p class="text-muted">
                                    {{ optional($car->category)->name }}
                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Registration Number</strong>

                                <p class="text-muted">
                                    {{ $car->registration_no }}
                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Ownership</strong>

                                <p class="text-muted">
                                    {{ $car->ownership }}
                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Insurance</strong>

                                <p class="text-muted">
                                    {{ $car->insurance }}
                                </p>

                            </div>

                            <div class="col-md-6 mb-3">

                                <strong>Insurance Valid Till</strong>

                                <p class="text-muted">

                                    @if($car->insurance_valid_till)

                                        {{ \Carbon\Carbon::parse($car->insurance_valid_till)->format('d M Y') }}

                                    @else

                                        N/A

                                    @endif

                                </p>

                            </div>

                            <div class="col-md-6">

                                <strong>Service History</strong>

                                <p class="text-muted">
                                    {{ $car->service_history }}
                                </p>

                            </div>

                            <div class="col-md-6">

                                <strong>Accident History</strong>

                                <p class="text-muted">
                                    {{ $car->accident_history }}
                                </p>

                            </div>

                        </div>

                    </div>



                    <!-- FEATURES -->

                    <div class="spec-card mb-4" data-aos="fade-up">

                        <h2 class="fw-bold mb-4">

                            Features

                        </h2>

                        <div class="row g-3">

                            @forelse($car->features as $feature)

                                <div class="col-md-4">

                                    <div class="d-flex">

                                        <i class="{{ $feature->icon ?: 'fa-solid fa-circle-check' }} text-danger me-3 mt-1"></i>

                                        <span>{{ $feature->name }}</span>

                                    </div>

                                </div>

                            @empty

                                <div class="col-12">

                                    <p class="text-muted mb-0">

                                        Features not available.

                                    </p>

                                </div>

                            @endforelse

                        </div>

                    </div>



                    <!-- TECHNICAL SPECIFICATIONS -->

                    <div class="spec-card" data-aos="fade-up">

                        <h2 class="fw-bold mb-4">Technical Specifications</h2>

                        @php
                            $specifications = [
                                'Engine' => $car->engine,
                                'Power' => $car->power,
                                'Torque' => $car->torque,
                                'Fuel Tank' => $car->fuel_tank,
                                'Mileage' => $car->mileage,
                                'Drive Type' => $car->drive_type,
                                'Color' => $car->color,
                                'Seating Capacity' => $car->seating_capacity,
                                'Body Type' => $car->body_type,
                                'Ground Clearance' => $car->ground_clearance,
                                'Boot Space' => $car->boot_space,
                                'Top Speed' => $car->top_speed,
                                'Airbags' => $car->airbags,
                            ];
                        @endphp

                        <table class="table table-bordered align-middle">

                            <tbody>

                                @foreach($specifications as $label => $value)

                                    @if(!empty($value))

                                        <tr>

                                            <th width="35%">{{ $label }}</th>

                                            <td>{{ $value }}</td>

                                        </tr>

                                    @endif

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>
                <!-- RIGHT SIDEBAR -->

                <div class="col-lg-4">

                    <div class="spec-card position-sticky" style="top:100px;" data-aos="fade-left">

                        <h3 class="fw-bold">
                            Vehicle Details
                        </h3>

                        <hr>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Brand</span>
                            <strong>{{ optional($car->brand)->name }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Model</span>
                            <strong>{{ $car->model }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Year</span>
                            <strong>{{ $car->year }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Fuel</span>
                            <strong>{{ $car->fuel_type }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Transmission</span>
                            <strong>{{ $car->transmission }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Kilometers</span>
                            <strong>{{ number_format($car->kilometers) }} KM</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Ownership</span>
                            <strong>{{ $car->ownership }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Body Type</span>
                            <strong>{{ $car->body_type }}</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Color</span>
                            <strong>{{ $car->color }}</strong>
                        </div>

                        <hr>

                        <div class="text-center mb-4">

                            <h2 class="text-danger fw-bold mb-0">
                                ₹{{ number_format($car->price) }}
                            </h2>

                            <small class="text-muted">
                                Asking Price
                            </small>

                        </div>

                        <div class="d-grid gap-3">
                            <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">

                                <i class="fa-solid fa-paper-plane me-2"></i>

                                Enquire Now

                            </button>

                            <a href="https://wa.me/{{$site->phone}}?text={{ urlencode('Hi, I am interested in ' . $car->model) }}"
                                target="_blank" class="btn btn-success btn-lg">

                                <i class="fab fa-whatsapp me-2"></i>

                                WhatsApp

                            </a>

                            <a href="tel:{{$site->phone}}" class="btn btn-outline-dark btn-lg">

                                <i class="fa-solid fa-phone me-2"></i>

                                Call Dealer

                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="row">

                <!-- LEFT -->

                <div class="col-lg-7">

                    <div class="spec-card">

                        <h2 class="fw-bold mb-4">
                            Finance Calculator
                        </h2>

                        <div class="mb-4">

                            <label class="fw-semibold">
                                Vehicle Price
                            </label>

                            <input id="carPrice" type="range" min="100000" max="50000000" step="50000"
                                value="{{ $car->price }}" class="form-range">

                            <h4 id="priceValue">
                                ₹{{ number_format($car->price) }}
                            </h4>

                        </div>

                        <div class="mb-4">

                            <label class="fw-semibold">
                                Down Payment
                            </label>

                            <input id="downPayment" type="range" min="0" max="{{ $car->price }}" step="50000"
                                value="{{ round($car->price * 0.20) }}" class="form-range">

                            <h4 id="downValue">
                                ₹{{ number_format(round($car->price * 0.20)) }}
                            </h4>

                        </div>

                        <div class="mb-4">

                            <label class="fw-semibold">
                                Interest Rate
                            </label>

                            <input id="interestRate" type="range" min="6" max="15" step="0.1" value="8.5"
                                class="form-range">

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

                <!-- RIGHT -->

                <div class="col-lg-5">

                    <div class="spec-card">

                        <h4 class="fw-bold">
                            Estimated EMI
                        </h4>

                        <hr>

                        <h1 id="monthlyEMI" class="text-danger fw-bold">

                            ₹0

                        </h1>

                        <p>
                            Monthly Payment
                        </p>

                        <hr>

                        <p>
                            Loan Amount
                            <span id="loanAmount" class="float-end">
                                ₹0
                            </span>
                        </p>

                        <p>
                            Interest
                            <span id="interestPay" class="float-end">
                                ₹0
                            </span>
                        </p>

                        <p>
                            Total Payment
                            <span id="totalPay" class="float-end">
                                ₹0
                            </span>
                        </p>

                        <button class="btn btn-danger w-100 mt-4 btn-lg" data-bs-toggle="modal"
                            data-bs-target="#contactModal">

                            Apply For Finance

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Gallery
                </h2>
            </div>
            <div class="masonry">

                @forelse($car->galleries as $gallery)

                    <div class="item" data-aos="zoom-in">

                        <div class="gallery-card">

                            <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">

                            <div class="overlay">

                                <div class="d-flex justify-content-between align-items-center">

                                    <div>

                                        <h5>{{ $gallery->title ?: 'Gallery Image' }}</h5>

                                    </div>

                                    {{-- <i class="fa-solid fa-expand"></i> --}}

                                </div>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12 text-center py-5">

                        <h5>No Gallery Images Available</h5>

                    </div>

                @endforelse

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

                <a href="{{ route('buyCars') }}" class="btn btn-outline-danger">
                    View All
                </a>

            </div>

            <div class="swiper similarSwiper">

                <div class="swiper-wrapper">

                    @forelse($similarCars as $similar)

                        <div class="swiper-slide">

                            <div class="spec-card">

                                <img src="{{ asset($similar->thumbnail) }}" class="img-fluid rounded-4 mb-3"
                                    style="height:220px;width:100%;object-fit:cover;" alt="{{ $similar->model }}">

                                <h5 class="fw-bold">
                                    {{ optional($similar->brand)->name }}
                                    {{ $similar->model }}
                                </h5>

                                <p class="text-muted mb-2">

                                    <i class="fa-solid fa-calendar me-1"></i>
                                    {{ $similar->year }}

                                    &nbsp;|&nbsp;

                                    <i class="fa-solid fa-gas-pump me-1"></i>
                                    {{ $similar->fuel_type }}

                                </p>

                                <p class="text-muted mb-2">

                                    <i class="fa-solid fa-road me-1"></i>
                                    {{ number_format($similar->kilometers) }} KM

                                </p>

                                <h4 class="text-danger fw-bold mb-3">

                                    ₹{{ number_format($similar->price) }}

                                </h4>

                                <a href="{{ route('carDetails', $similar->slug) }}" class="btn btn-danger w-100">

                                    View Details

                                </a>

                            </div>

                        </div>

                    @empty

                        <div class="col-12">

                            <div class="alert alert-warning">

                                No Similar Cars Available.

                            </div>

                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </section>


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
    <!-- Premium Car Enquiry Modal -->

    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg">

                <div class="row g-0">

                    <!-- Left Side -->

                    <div class="col-lg-5 position-relative text-white">

                        <img src="{{ asset($car->thumbnail) }}" class="w-100 h-100"
                            style="object-fit:cover;min-height:650px;">

                        <div class="position-absolute top-0 start-0 end-0 bottom-0"
                            style="background:linear-gradient(180deg,rgba(0,0,0,.15),rgba(0,0,0,.85));">

                            <div class="d-flex flex-column justify-content-end h-100 p-4">

                                @if($car->featured)
                                    <span class="badge bg-danger mb-3 px-3 py-2">
                                        Featured Car
                                    </span>
                                @endif

                                <h2 class="fw-bold mb-2">
                                    {{ optional($car->brand)->name }}
                                    {{ $car->model }}
                                </h2>

                                <h3 class="text-warning fw-bold mb-4">
                                    ₹{{ number_format($car->price) }}
                                </h3>

                                <div class="row text-center g-3 mb-4">

                                    <div class="col-6">

                                        <div class="bg-dark bg-opacity-50 rounded-3 p-3">

                                            <i class="fa-solid fa-calendar fa-xl mb-2"></i>

                                            <div>{{ $car->year }}</div>

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="bg-dark bg-opacity-50 rounded-3 p-3">

                                            <i class="fa-solid fa-road fa-xl mb-2"></i>

                                            <div>{{ number_format($car->kilometers) }} KM</div>

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="bg-dark bg-opacity-50 rounded-3 p-3">

                                            <i class="fa-solid fa-gas-pump fa-xl mb-2"></i>

                                            <div>{{ $car->fuel_type }}</div>

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="bg-dark bg-opacity-50 rounded-3 p-3">

                                            <i class="fa-solid fa-gear fa-xl mb-2"></i>

                                            <div>{{ $car->transmission }}</div>

                                        </div>

                                    </div>

                                </div>

                                <ul class="list-unstyled mb-4">

                                    <li class="mb-2">
                                        <i class="fa-solid fa-circle-check text-success me-2"></i>
                                        Verified Vehicle
                                    </li>

                                    <li class="mb-2">
                                        <i class="fa-solid fa-circle-check text-success me-2"></i>
                                        Finance Available
                                    </li>

                                    <li class="mb-2">
                                        <i class="fa-solid fa-circle-check text-success me-2"></i>
                                        Free Test Drive
                                    </li>

                                    <li>
                                        <i class="fa-solid fa-circle-check text-success me-2"></i>
                                        Best Price Assurance
                                    </li>

                                </ul>

                                <div class="d-flex gap-3">

                                    <a href="tel:{{$site->phone}}" class="btn btn-light rounded-pill">

                                        <i class="fa-solid fa-phone me-2"></i>

                                        Call

                                    </a>

                                    <a href="https://wa.me/{{$site->phone}}?text={{ urlencode('Hi, I am interested in ' . $car->model) }}"
                                        target="_blank" class="btn btn-success rounded-pill">

                                        <i class="fab fa-whatsapp me-2"></i>

                                        WhatsApp

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Right Side -->

                    <div class="col-lg-7">

                        <div class="p-5">

                            <div class="d-flex justify-content-between align-items-center mb-4">

                                <div>

                                    <h2 class="fw-bold mb-1">

                                        Enquire Now

                                    </h2>

                                    <p class="text-muted mb-0">

                                        Fill in your details and our executive will contact you shortly.

                                    </p>

                                </div>

                                <button class="btn-close" data-bs-dismiss="modal"></button>

                            </div>

                            <form action="{{ route('enquiry.store') }}" method="POST">

                                @csrf

                                <input type="hidden" name="car_id" value="{{ $car->id }}">

                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Full Name

                                        </label>

                                        <input type="text" name="name" class="form-control form-control-lg" required>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Mobile Number

                                        </label>

                                        <input type="tel" name="mobile" class="form-control form-control-lg" required>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Email Address

                                        </label>

                                        <input type="email" name="email" class="form-control form-control-lg">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            City

                                        </label>

                                        <input type="text" name="city" class="form-control form-control-lg">

                                    </div>

                                </div>
                                <input type="hidden" name="enquiry_type" value="Vehicle Enquiry">
                                <div class="row">

                                    {{-- <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Enquiry Type

                                        </label>

                                        <select name="enquiry_type" class="form-select form-select-lg">

                                            <option value="Vehicle Enquiry">Vehicle Enquiry</option>

                                            <option value="Book Test Drive">Book Test Drive</option>

                                            <option value="Finance Assistance">Finance Assistance</option>

                                            <option value="Exchange Vehicle">Exchange Vehicle</option>

                                            <option value="Price Negotiation">Price Negotiation</option>

                                        </select>

                                    </div> --}}

                                    <div class="col-md-12 mb-3">

                                        <label class="form-label">

                                            Purchase Timeline

                                        </label>

                                        <select name="purchase_time" class="form-select form-select-lg">

                                            <option>Immediately</option>

                                            <option>Within 7 Days</option>

                                            <option>Within 30 Days</option>

                                            <option>Within 3 Months</option>

                                            <option>Just Looking</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="mb-3">

                                    <label class="form-label">

                                        Interested Vehicle

                                    </label>

                                    <input type="text" class="form-control form-control-lg"
                                        value="{{ optional($car->brand)->name }} {{ $car->model }}" readonly>

                                </div>

                                <div class="mb-4">

                                    <label class="form-label">

                                        Message

                                    </label>

                                    <textarea name="message" rows="4" class="form-control"
                                        placeholder="Tell us about your requirements..."></textarea>

                                </div>

                                <div class="d-grid">

                                    <button class="btn btn-danger btn-lg rounded-pill">

                                        <i class="fa-solid fa-paper-plane me-2"></i>

                                        Submit Enquiry

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="galleryModal" tabindex="-1">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content bg-dark border-0">

                <div class="modal-body p-0">

                    <img id="modalImage" src="" class="img-fluid w-100">

                </div>

            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#dc3545'
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
                confirmButtonColor: '#dc3545'
            });
        </script>
    @endif
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

            const price = Number(document.getElementById("carPrice").value);

            const down = Number(document.getElementById("downPayment").value);

            const principal = price - down;

            const annualRate = Number(document.getElementById("interestRate").value);

            const monthlyRate = annualRate / 12 / 100;

            const years = Number(document.getElementById("loanYears").value);

            const months = years * 12;

            let emi = 0;

            if (monthlyRate > 0) {

                emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) /
                    (Math.pow(1 + monthlyRate, months) - 1);

            }

            const total = emi * months;

            const interest = total - principal;

            document.getElementById("priceValue").innerHTML = formatINR(price);

            document.getElementById("downValue").innerHTML = formatINR(down);

            document.getElementById("interestText").innerHTML = annualRate + "%";

            document.getElementById("yearText").innerHTML = years + " Years";

            document.getElementById("monthlyEMI").innerHTML = formatINR(Math.round(emi));

            document.getElementById("loanAmount").innerHTML = formatINR(principal);

            document.getElementById("interestPay").innerHTML = formatINR(Math.round(interest));

            document.getElementById("totalPay").innerHTML = formatINR(Math.round(total));

        }

        document.getElementById("carPrice").addEventListener("input", calculateEMI);
        document.getElementById("downPayment").addEventListener("input", calculateEMI);
        document.getElementById("interestRate").addEventListener("input", calculateEMI);
        document.getElementById("loanYears").addEventListener("input", calculateEMI);

        calculateEMI();
    </script>

    <script>
        document.querySelectorAll(".gallery-card img")

            .forEach(img => {

                img.style.cursor = "pointer";

                img.onclick = function () {

                    document.getElementById("modalImage").src = this.src;

                    new bootstrap.Modal(

                        document.getElementById("galleryModal")

                    ).show();

                }

            });

    </script>
@endsection