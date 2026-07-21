@extends('layouts.website')
@section('content')

    <section class="hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7" data-aos="fade-right">

                    <h5>WELCOME TO SAHARA CARS</h5>

                    <h1>
                        Find Your Perfect
                        Luxury Car
                    </h1>

                    <p>

                        Discover premium pre-owned luxury cars with
                        certified inspection, warranty support and
                        best market prices.

                    </p>

                    <div class="hero-btn">

                        <a href="{{ route('buyCars') }}" class="btn-red">
                            Browse Cars
                        </a>

                        {{-- <a href="{{ route('sellCar') }}" class="btn-white">
                            Sell Your Car
                        </a> --}}

                    </div>

                    <div class="hero-features">

                        <div class="feature-box">

                            <i class="fa-solid fa-shield"></i>

                            <div>

                                <h6>100+ Point Inspection</h6>

                                <small>Certified Quality</small>

                            </div>

                        </div>

                        <div class="feature-box">

                            <i class="fa-solid fa-indian-rupee-sign"></i>

                            <div>

                                <h6>Best Market Price</h6>

                                <small>Guaranteed</small>

                            </div>

                        </div>

                        <div class="feature-box">

                            <i class="fa-solid fa-handshake"></i>

                            <div>

                                <h6>Easy Finance</h6>

                                <small>Quick Approval</small>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">

                    <!-- Car image comes here in Part 2 -->

                </div>

            </div>

        </div>

    </section>

    <!--=========================
                SEARCH SECTION
                ==========================-->

    <section class="container">

        <form action="{{ route('buyCars') }}" method="GET">

            <div class="search-box" data-aos="fade-up">

                <div class="row g-3 align-items-end">

                    <!-- Search -->

                    <div class="col-lg-4">

                        <label class="fw-semibold mb-2">
                            Search Car
                        </label>

                        <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                            placeholder="BMW, Audi, Mercedes...">

                    </div>

                    <!-- Brand -->

                    <div class="col-lg-3">

                        <label class="fw-semibold mb-2">
                            Brand
                        </label>

                        <select name="brand" class="form-select">

                            <option value="">All Brands</option>

                            @foreach($brands as $brand)

                                <option value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>

                                    {{ $brand->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- Fuel -->

                    <div class="col-lg-3">

                        <label class="fw-semibold mb-2">
                            Fuel
                        </label>

                        <select name="fuel" class="form-select">

                            <option value="">All</option>

                            <option value="Petrol" {{ request('fuel') == 'Petrol' ? 'selected' : '' }}>
                                Petrol
                            </option>

                            <option value="Diesel" {{ request('fuel') == 'Diesel' ? 'selected' : '' }}>
                                Diesel
                            </option>

                            <option value="Electric" {{ request('fuel') == 'Electric' ? 'selected' : '' }}>
                                Electric
                            </option>

                            <option value="Hybrid" {{ request('fuel') == 'Hybrid' ? 'selected' : '' }}>
                                Hybrid
                            </option>

                        </select>

                    </div>

                    <!-- Search Button -->

                    <div class="col-lg-1 d-grid">

                        <button type="submit" class="btn btn-danger">

                            <i class="fa-solid fa-magnifying-glass"></i>

                        </button>

                    </div>

                </div>

            </div>

        </form>

    </section>

    <!--=========================
                LATEST CARS
                ==========================-->

    <section class="section">

        <div class="container">

            <div class="section-title">

                <div data-aos="fade-up">
                    <h2>Latest Car Collection</h2>
                    <p class="text-muted">
                        Explore our newest premium pre-owned arrivals.
                    </p>
                </div>

                <a href="{{ route('buyCars') }}" class="view-btn">
                    View All Cars
                </a>

            </div>

            <div class="row g-4">

                @forelse($latestCars as $car)

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ ($loop->index + 1) * 100 }}">

                        <div class="car-card">

                            <div class="car-image">

                                <img src="{{ asset($car->thumbnail) }}" alt="{{ $car->model }}">

                                <span class="badge-year">
                                    {{ $car->year }}
                                </span>

                                @if($car->featured)

                                    <span class="badge-new">
                                        Featured
                                    </span>

                                @else

                                    <span class="badge-new">
                                        {{ optional($car->brand)->name }}
                                    </span>

                                @endif

                            </div>

                            <div class="card-body">

                                <div class="car-name">

                                    {{ optional($car->brand)->name }}
                                    {{ $car->model }}

                                </div>

                                <div class="specs">

                                    <span>

                                        <i class="fa-solid fa-gas-pump"></i>

                                        {{ $car->fuel_type }}

                                    </span>

                                    <span>

                                        <i class="fa-solid fa-road"></i>

                                        {{ number_format($car->kilometers) }} km

                                    </span>

                                    <span>

                                        <i class="fa-solid fa-location-dot"></i>

                                        {{ strtoupper(substr($car->registration_no, 0, 2)) }}

                                    </span>

                                </div>

                                <div class="price">

                                    ₹ {{ number_format($car->price) }}

                                </div>

                                <div class="card-bottom">

                                    <div class="call-icons">

                                        <a href="https://wa.me/{{$site->phone}}" target="_blank">

                                            <i class="fab fa-whatsapp"></i>

                                        </a>

                                        <a href="tel:{{$site->phone}}">

                                            <i class="fa-solid fa-phone"></i>

                                        </a>

                                    </div>

                                    <a href="{{ route('carDetails', $car->slug) }}" class="view-car">

                                        View Details

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <div class="alert alert-info text-center">

                            No Cars Available

                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>
    <!-- =========================
                WHY CHOOSE SAHARA CARS
                ========================= -->

    <section class="features">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="text-white fw-bold">
                    Why Choose Sahara Cars
                </h2>

                <p class="text-light">
                    Trusted by thousands of customers for premium pre-owned luxury cars.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="feature-item" data-aos="flip-left">

                        <i class="fa-solid fa-car-side"></i>

                        <h4>500+ Cars</h4>

                        <p>
                            Premium inspected luxury vehicles.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="feature-item" data-aos="flip-left">

                        <i class="fa-solid fa-shield-heart"></i>

                        <h4>Warranty</h4>

                        <p>
                            Up to 2 Years Extended Warranty.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="feature-item" data-aos="flip-left">

                        <i class="fa-solid fa-wallet"></i>

                        <h4>Easy Finance</h4>

                        <p>
                            Lowest Interest Rates Available.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="feature-item" data-aos="flip-left">

                        <i class="fa-solid fa-headset"></i>

                        <h4>24×7 Support</h4>

                        <p>
                            Dedicated customer assistance.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>





    <!-- =========================
                COUNTER
                ========================= -->

    <section class="section bg-white">

        <div class="container">

            <div class="row text-center">

                <div class="col-lg-3 col-6">

                    <h2 class="fw-bold text-danger counter" data-count="15"> 0 </h2>

                    <p>Years Experience</p>

                </div>

                <div class="col-lg-3 col-6">

                    <!-- <h2 class="fw-bold text-danger">12K+</h2> -->
                    <h2 class="fw-bold text-danger counter" data-count="12000"> 0 </h2>

                    <p>Cars Sold</p>

                </div>

                <div class="col-lg-3 col-6">

                    <h2 class="fw-bold text-danger">4.9★</h2>

                    <p>Google Rating</p>

                </div>

                <div class="col-lg-3 col-6">
                    <h2 class="fw-bold text-danger">98%</h2>

                    <p>Happy Customers</p>

                </div>

            </div>

        </div>

    </section>





    <!-- =========================
                FINANCE SECTION
                ========================= -->

    <section class="section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right">

                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900" class="rounded-4 shadow">

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <h6 class="text-danger fw-bold">

                        CAR LOAN

                    </h6>

                    <h2 class="fw-bold mb-4">

                        Finance Your Dream Car
                        with Lowest EMI

                    </h2>

                    <p class="text-muted mb-4">

                        Get instant approval from leading banks.
                        Enjoy attractive interest rates, flexible repayment
                        options and minimum documentation.

                    </p>

                    <div class="row">

                        <div class="col-6 mb-3">

                            ✔ Zero Hidden Charges

                        </div>

                        <div class="col-6 mb-3">

                            ✔ Instant Approval

                        </div>

                        <div class="col-6 mb-3">

                            ✔ Lowest Interest

                        </div>

                        <div class="col-6 mb-3">

                            ✔ Doorstep Service

                        </div>

                    </div>

                    <a href="#" class="btn-special mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">

                        Apply Loan

                    </a>

                </div>

            </div>

        </div>

    </section>





    <!-- =========================
                TESTIMONIALS
                ========================= -->

    <section class="section bg-light">

        <div class="container" data-aos="zoom-in-up">

            <div class="section-title">

                <div>

                    <h2>

                        Customer Reviews

                    </h2>

                    <p>

                        What our happy customers say.

                    </p>

                </div>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="car-card p-4">

                        <div class="mb-3">

                            ★★★★★

                        </div>

                        <p>

                            Purchased my BMW from Sahara Cars.
                            Excellent condition and transparent pricing.

                        </p>

                        <hr>

                        <h5>

                            Rahul Sharma

                        </h5>

                        <small>

                            Bangalore

                        </small>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="car-card p-4">

                        <div class="mb-3">

                            ★★★★★

                        </div>

                        <p>

                            Very professional staff and smooth finance process.
                            Highly recommended.

                        </p>

                        <hr>

                        <h5>

                            Anjali Rao

                        </h5>

                        <small>

                            Hyderabad

                        </small>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="car-card p-4">

                        <div class="mb-3">

                            ★★★★★

                        </div>

                        <p>

                            Luxury car buying experience like never before.
                            Amazing collection.

                        </p>

                        <hr>

                        <h5>

                            Mohammed Imran

                        </h5>

                        <small>

                            Chennai

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="my-5">

        <h2 class="fw-bold text-center mb-5">
            Popular Brands
        </h2>

        <div class="row g-4 justify-content-center">

            @forelse($brands as $index => $brand)

                <div class="col-lg-2 col-md-3 col-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">

                    <a href="{{ route('buyCars', ['brand' => $brand->id]) }}" class="text-decoration-none">

                        <div class="card border-0 shadow-sm rounded-4 text-center h-100 py-4">

                            @if($brand->logo)
                                <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}" class="mx-auto mb-3"
                                    style="height:60px;object-fit:contain;">
                            @else
                                <i class="fa-solid fa-car-side fa-3x text-danger mb-3"></i>
                            @endif

                            <h5 class="fw-bold mb-0">
                                {{ strtoupper($brand->name) }}
                            </h5>

                        </div>

                    </a>

                </div>

            @empty

                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No Brands Available
                    </div>
                </div>

            @endforelse

        </div>

    </section>
    <!-- =========================
                NEWSLETTER
                ========================= -->

    <section class="section" style="background:#ff3b00;color:#fff;" data-aos="fade-up">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h2 class="fw-bold mb-2">
                        Stay Updated
                    </h2>

                    <p>
                        Get notified about newly listed luxury cars and exclusive offers.
                    </p>

                </div>

                <div class="col-lg-6">

                    <form class="row g-2">

                        <div class="col-md-8">

                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email">

                        </div>

                        <div class="col-md-4">

                            <button class="btn btn-dark w-100 btn-lg">

                                Subscribe

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection