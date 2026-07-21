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
            background: #f6f7fb;
        }

        :root {

            --primary: #ff3b00;
            --dark: #111;
            --shadow: 0 15px 40px rgba(0, 0, 0, .08);

        }

        a {
            text-decoration: none;
        }

        /*=========================
                                                            HEADER
                                                            =========================*/

        header {

            background: #111;

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
            margin: 0 12px;

        }

        .btn-call {

            background: var(--primary);
            padding: 12px 30px;
            color: #fff;
            border-radius: 50px;

        }

        /*=========================
                                                            PAGE HEADER
                                                            =========================*/

        .page-header {

            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)),
                url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1900");

            background-size: cover;
            background-position: center;

            padding: 120px 0;

            color: #fff;

        }

        .page-header h1 {

            font-size: 58px;
            font-weight: 700;

        }

        .breadcrumb-item a {

            color: #fff;

        }

        .breadcrumb-item.active {

            color: #ddd;

        }

        /*=========================
                                                            FILTER
                                                            =========================*/

        .filter-card {

            background: #fff;
            padding: 25px;
            border-radius: 18px;
            box-shadow: var(--shadow);

            position: sticky;
            top: 30px;

        }

        .filter-title {

            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;

        }

        .filter-card h6 {

            margin-top: 20px;
            margin-bottom: 12px;

            font-weight: 600;

        }

        .form-check {

            margin-bottom: 10px;

        }

        .form-range {

            margin-top: 10px;

        }

        /*=========================
                                                            TOOLBAR
                                                            =========================*/

        .toolbar {

            background: #fff;
            padding: 18px 25px;
            border-radius: 15px;
            box-shadow: var(--shadow);

            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 30px;

        }

        .toolbar .left {

            font-weight: 600;

        }

        .toolbar .right {

            display: flex;
            gap: 15px;
            align-items: center;

        }

        .view-btn {

            height: 45px;
            width: 45px;
            border-radius: 10px;
            border: none;
            background: #f1f1f1;

        }

        .view-btn.active {

            background: var(--primary);
            color: #fff;

        }

        /*=========================
                                                            SECTION
                                                            =========================*/

        .section {

            padding: 70px 0;

        }

        /*=========================
                                                            EMPTY GRID
                                                            =========================*/

        .car-grid-placeholder {

            background: #fff;
            border-radius: 20px;
            padding: 80px;
            text-align: center;
            box-shadow: var(--shadow);

        }

        .car-grid-placeholder i {

            font-size: 60px;
            color: var(--primary);

            margin-bottom: 20px;

        }

        .car-grid-placeholder h3 {

            font-weight: 700;

        }

        .car-grid-placeholder p {

            color: #666;

        }

        /*=========================
                                                            RESPONSIVE
                                                            =========================*/

        @media(max-width:991px) {

            .toolbar {

                flex-direction: column;
                gap: 20px;

            }

            .page-header h1 {

                font-size: 38px;

            }

        }


        .view-car {
            padding: 12px 25px;
            background: #FF5722;
            color: #fff;
            border-radius: 40px;

        }

        .call-icons i {
            height: 45px;
            width: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f5f5f5;
            color: var(--primary);
        }

        .card {
            transition: .4s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, .18);
        }

        .card:hover img {
            transform: scale(1.08);
        }

        .card img {
            transition: .5s;
        }

        .position-relative::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, .45),
                    transparent 60%);
        }

        .view-car,
        .btn-call {

            transition: .35s;

        }

        .view-car:hover,
        .btn-call:hover {

            transform: translateY(-4px);

            box-shadow: 0 15px 35px rgba(255, 87, 34, .35);

        }

        .badge {

            padding: 10px 18px;

            font-size: 13px;

            border-radius: 50px;

            backdrop-filter: blur(10px);

        }

        .filter-card {

            transition: .35s;

        }

        .filter-card:hover {

            transform: translateY(-6px);

        }
    </style>

    <section class="page-header">

        <div class="container" data-aos="fade-right">

            <h1>Buy Premium Cars</h1>

            <nav>

                <ol class="breadcrumb">

                    <li class="breadcrumb-item">

                        <a href="{{ route('home') }}">

                            Home

                        </a>

                    </li>

                    <li class="breadcrumb-item active">

                        Buy Cars

                    </li>

                </ol>

            </nav>

        </div>

    </section>

    <!-- CONTENT -->

    <section class="section">

        <div class="container">

            <div class="row">

                <!-- FILTER -->

                <div class="col-lg-3" data-aos="fade-right">

                    <form action="{{ route('buyCars') }}" method="GET">

                        <div class="filter-card">

                            <div class="filter-title mb-4">
                                <i class="fa-solid fa-filter me-2"></i>
                                Filter Cars
                            </div>

                            <!-- Search -->

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Search
                                </label>

                                <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                                    placeholder="BMW, Audi, Mercedes">

                            </div>

                            <!-- Brand -->

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
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

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Fuel Type
                                </label>

                                <select name="fuel" class="form-select">

                                    <option value="">All Fuel Types</option>

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

                            <div class="d-grid gap-2">

                                <button type="submit" class="btn btn-danger">

                                    <i class="fa-solid fa-magnifying-glass me-2"></i>

                                    Apply Filters

                                </button>

                                <a href="{{ route('buyCars') }}" class="btn btn-outline-secondary">

                                    <i class="fa-solid fa-rotate-right me-2"></i>

                                    Reset

                                </a>

                            </div>

                        </div>

                    </form>

                </div>

                <!-- RIGHT -->

                <div class="col-lg-9">

                    <div class="toolbar" data-aos="fade-up">

                        <div class="left">

                            Showing
                            <strong>{{ $cars->total() }} Cars</strong>

                        </div>

                        <div class="right">

                            <select class="form-select">

                                <option>Newest First</option>

                                <option>Price Low to High</option>

                                <option>Price High to Low</option>

                                <option>Latest Model</option>

                            </select>

                            <button class="view-btn active">

                                <i class="fa-solid fa-table-cells"></i>

                            </button>

                            <button class="view-btn">

                                <i class="fa-solid fa-list"></i>

                            </button>

                        </div>

                    </div>

                    <!-- GRID START -->

                    <!-- <div class="car-grid-placeholder"> -->

                    <!-- =========================
                                                            CAR GRID
                                                            ========================= -->

                    <div class="row g-4">

                        @forelse($cars as $car)

                            <div class="col-lg-4 col-md-6" data-aos="zoom-in">

                                <div class="card shadow-sm border-0 rounded-4 overflow-hidden h-100">

                                    <div class="position-relative">

                                        <img src="{{ asset($car->thumbnail) }}" class="card-img-top"
                                            style="height:220px;object-fit:cover;">

                                        @if($car->featured)

                                            <span class="badge bg-danger position-absolute top-0 start-0 m-3">

                                                Featured

                                            </span>

                                        @endif

                                        <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-3">

                                            <i class="far fa-heart"></i>

                                        </button>

                                    </div>

                                    <div class="card-body">

                                        <h5 class="fw-bold">

                                            {{ $car->brand->name ?? '' }}
                                            {{ $car->model }}

                                        </h5>

                                        <p class="text-muted">

                                            {{ $car->year }}
                                            •
                                            {{ $car->fuel_type }}
                                            •
                                            {{ $car->transmission }}

                                        </p>

                                        <div class="row text-center small mb-3">

                                            <div class="col">

                                                <i class="fa-solid fa-road text-danger"></i><br>

                                                {{ number_format($car->kilometers) }} KM

                                            </div>

                                            <div class="col">

                                                <i class="fa-solid fa-gas-pump text-danger"></i><br>

                                                {{ $car->fuel_type }}

                                            </div>

                                            <div class="col">

                                                <i class="fa-solid fa-gear text-danger"></i><br>

                                                {{ $car->transmission }}

                                            </div>

                                        </div>

                                        <h4 class="fw-bold text-danger">

                                            ₹ {{ number_format($car->price) }}

                                        </h4>

                                        <small class="text-muted">

                                            {{ $car->price_in_words ?? '' }}

                                        </small>

                                    </div>

                                    <div class="card-footer bg-white border-0 pb-4">

                                        <div class="d-flex gap-2">

                                            <a href="{{ route('carDetails', $car->slug) }}"
                                                class="btn btn-danger w-100 view-car">

                                                View Details

                                            </a>

                                            <a href="https://wa.me/919876543210" target="_blank" class="call-icons">

                                                <i class="fab fa-whatsapp"></i>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @empty

                            <div class="col-12">

                                <div class="alert alert-warning text-center">

                                    No Cars Found

                                </div>

                            </div>

                        @endforelse

                    </div>

                </div>

                <!-- GRID END -->

            </div>

        </div>

        </div>

    </section>


    <section class="mt-5" data-aos="fade-up">

        <nav>
            <div class="mt-5">

                {{ $cars->links() }}

            </div>

        </nav>

    </section>


    <section class="my-5">

        <div class="card border-0 rounded-4 overflow-hidden">

            <div class="row g-0 align-items-center">

                <div class="col-lg-6 p-5 bg-dark text-white" data-aos="fade-right">

                    <h6 class="text-danger fw-bold">

                        EASY FINANCE

                    </h6>

                    <h2 class="fw-bold mb-4">

                        Own Your Dream Car Today

                    </h2>

                    <p>

                        Get attractive interest rates, instant approvals,
                        zero hidden charges and flexible EMI options.

                    </p>

                    <a href="#" class="btn btn-danger btn-lg mt-3">

                        Apply Now

                    </a>

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1200" class="img-fluid"
                        style="height:100%;object-fit:cover;">

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


    <section class="bg-danger rounded-4 p-5 my-5 text-white">

        <div class="row align-items-center" data-aos="fade-up">

            <div class="col-lg-6" data-aos="fade-right">

                <h2>

                    Never Miss New Arrivals

                </h2>

                <p>

                    Subscribe to receive notifications for premium
                    luxury vehicles.

                </p>

            </div>

            <div class="col-lg-6" data-aos="fade-lef">

                <div class="input-group">

                    <input type="email" class="form-control form-control-lg" placeholder="Enter Email">

                    <button class="btn btn-dark">

                        Subscribe

                    </button>

                </div>

            </div>

        </div>

    </section>
    <script>
        // Wishlist
        document.querySelectorAll(".fa-heart").forEach(icon => {

            icon.addEventListener("click", function () {

                this.classList.toggle("far");

                this.classList.toggle("fas");

                this.classList.toggle("text-danger");

            });

        });
        // Grid/List Toggle

        const gridBtn = document.querySelectorAll(".view-btn")[0];

        const listBtn = document.querySelectorAll(".view-btn")[1];

        gridBtn.onclick = function () {

            gridBtn.classList.add("active");

            listBtn.classList.remove("active");

        };

        listBtn.onclick = function () {

            listBtn.classList.add("active");

            gridBtn.classList.remove("active");

            // alert("List View Layout can be added here.");

        };



        // Filter Button

        document.querySelector(".btn-danger.w-100").onclick = function () {

            // alert("Connect this with Laravel or API filtering.");

        };

    </script>
@endsection