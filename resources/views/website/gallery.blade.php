@extends('layouts.website')
@section('content')


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f8f9fb;
            overflow-x: hidden;
        }

        :root {

            --primary: #ff4d00;
            --dark: #111;
            --shadow: 0 15px 45px rgba(0, 0, 0, .15);

        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        header {

            position: absolute;
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
            margin: 0 14px;

        }

        .btn-main {

            background: var(--primary);
            padding: 14px 32px;
            border-radius: 50px;
            color: #fff;

        }

        .hero {

            height: 75vh;

            display: flex;
            align-items: center;

            background:

                linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),

                url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=2200");

            background-size: cover;
            background-position: center;

            animation: heroZoom 15s infinite alternate;

        }

        @keyframes heroZoom {

            from {

                background-size: 100%;

            }

            to {

                background-size: 110%;

            }

        }

        .hero h1 {

            font-size: 64px;
            font-weight: 800;
            color: #fff;

        }

        .hero p {

            color: #ddd;
            font-size: 18px;

        }

        .section {

            padding: 90px 0;

        }

        .filter-btn {

            padding: 12px 26px;

            border: none;

            border-radius: 40px;

            background: #fff;

            box-shadow: var(--shadow);

            margin: 6px;

            transition: .35s;

        }

        .filter-btn.active,
        .filter-btn:hover {

            background: var(--primary);

            color: #fff;

        }

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

        <div class="container">

            <div class="row">

                <div class="col-lg-7" data-aos="fade-right">

                    <h1>

                        Luxury Car Gallery

                    </h1>

                    <p>

                        Explore our premium collection of luxury vehicles,
                        showroom moments and customer deliveries.

                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Explore Gallery

                </h2>

                <p class="text-muted">

                    Luxury. Performance. Elegance.

                </p>

            </div>

            <div class="text-center mb-5">

                <button class="filter-btn active">

                    All

                </button>

                <button class="filter-btn">

                    BMW

                </button>

                <button class="filter-btn">

                    Audi

                </button>

                <button class="filter-btn">

                    Mercedes

                </button>

                <button class="filter-btn">

                    SUV

                </button>

                <button class="filter-btn">

                    Showroom

                </button>

            </div>

            <div class="masonry">
                <!-- BMW -->

                <div class="item" data-aos="zoom-in">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <h5>BMW M5</h5>

                                    <p>Luxury Sedan</p>

                                </div>

                                <i class="fa-solid fa-expand"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Audi -->

                <div class="item" data-aos="zoom-in" data-aos-delay="100">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Audi RS7</h5>

                                    <p>Performance Coupe</p>

                                </div>

                                <i class="fa-solid fa-camera"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Mercedes -->

                <div class="item" data-aos="zoom-in" data-aos-delay="200">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Mercedes AMG</h5>

                                    <p>Luxury Collection</p>

                                </div>

                                <i class="fa-solid fa-expand"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Jaguar -->

                <div class="item" data-aos="zoom-in">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Jaguar XF</h5>

                                    <p>Premium Sedan</p>

                                </div>

                                <i class="fa-solid fa-heart"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- BMW SUV -->

                <div class="item" data-aos="zoom-in" data-aos-delay="100">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>BMW X7</h5>

                                    <p>Luxury SUV</p>

                                </div>

                                <i class="fa-solid fa-expand"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Lexus -->

                <div class="item" data-aos="zoom-in" data-aos-delay="200">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Lexus RX</h5>

                                    <p>Hybrid Luxury</p>

                                </div>

                                <i class="fa-solid fa-expand"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Volvo -->

                <div class="item" data-aos="zoom-in">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Volvo XC90</h5>

                                    <p>Luxury SUV</p>

                                </div>

                                <i class="fa-solid fa-expand"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Porsche -->

                <div class="item" data-aos="zoom-in" data-aos-delay="100">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1502161254066-6c74afbf07aa?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Porsche 911</h5>

                                    <p>Sports Car</p>

                                </div>

                                <i class="fa-solid fa-expand"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Showroom -->

                <div class="item" data-aos="zoom-in" data-aos-delay="200">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Premium Showroom</h5>

                                    <p>Sahara Cars</p>

                                </div>

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Delivery -->

                <div class="item" data-aos="zoom-in">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c?w=900">

                        <div class="overlay">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h5>Customer Delivery</h5>

                                    <p>Happy Moments</p>

                                </div>

                                <i class="fa-solid fa-camera"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-dark">

        <div class="container">

            <div class="text-center mb-5 text-white">

                <h2>

                    Video Gallery

                </h2>

                <p>

                    Watch our premium collection in action.

                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4" data-aos="fade-up">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900">

                        <div class="overlay">

                            <div class="text-center">

                                <div
                                    style="width:70px;height:70px;background:#ff4d00;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;">

                                    <i class="fa-solid fa-play text-white fa-xl"></i>

                                </div>

                                <h5 class="mt-4">

                                    BMW Walkaround

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=900">

                        <div class="overlay">

                            <div class="text-center">

                                <div
                                    style="width:70px;height:70px;background:#ff4d00;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;">

                                    <i class="fa-solid fa-play text-white fa-xl"></i>

                                </div>

                                <h5 class="mt-4">

                                    Audi RS Review

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">

                    <div class="gallery-card">

                        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=900">

                        <div class="overlay">

                            <div class="text-center">

                                <div
                                    style="width:70px;height:70px;background:#ff4d00;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;">

                                    <i class="fa-solid fa-play text-white fa-xl"></i>

                                </div>

                                <h5 class="mt-4">

                                    Showroom Tour

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right">

                    <h6 class="text-danger fw-bold">

                        PREMIUM EXPERIENCE

                    </h6>

                    <h2 class="fw-bold mb-4">

                        Visit Our Luxury Showroom

                    </h2>

                    <p class="text-muted mb-4">

                        Experience India's finest collection of premium
                        luxury vehicles in an elegant showroom designed
                        for automotive enthusiasts.

                    </p>

                    <div class="row">

                        <div class="col-6 mb-3">

                            ✔ Certified Cars

                        </div>

                        <div class="col-6 mb-3">

                            ✔ Test Drive

                        </div>

                        <div class="col-6">

                            ✔ Finance Support

                        </div>

                        <div class="col-6">

                            ✔ Exchange

                        </div>

                    </div>

                    <a href="#" class="btn btn-danger btn-lg mt-4">

                        Book Showroom Visit

                    </a>

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1200"
                        class="img-fluid rounded-4 shadow">

                </div>

            </div>

        </div>

    </section>


    <section style="
    background:#111;
    padding:90px 0;
    ">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8 text-white">

                    <h2 class="fw-bold">

                        Looking For Your Dream Car?

                    </h2>

                    <p>

                        Browse hundreds of certified luxury vehicles.

                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="{{ route('buyCars') }}" class="btn btn-danger btn-lg px-5">

                        Browse Cars

                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- Lightbox -->

    <div class="modal fade" id="galleryModal" tabindex="-1">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content bg-dark border-0">

                <div class="modal-body p-0">

                    <img id="modalImage" src="" class="img-fluid w-100">

                </div>

            </div>

        </div>

    </div>

    <script>
        // Gallery Lightbox

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



        // Gallery Filter

        const filters = document.querySelectorAll(".filter-btn");

        filters.forEach(btn => {

            btn.onclick = function () {

                filters.forEach(x => x.classList.remove("active"));

                this.classList.add("active");

                // Connect with actual filtering if categories are added
            };

        });



        // Favorite Animation

        document.querySelectorAll(".fa-heart").forEach(icon => {

            icon.addEventListener("click", function (e) {

                e.stopPropagation();

                this.classList.toggle("text-danger");

                this.animate([

                    { transform: "scale(1)" },

                    { transform: "scale(1.4)" },

                    { transform: "scale(1)" }

                ], {

                    duration: 300

                });

            });

        });



        // Smooth Scroll

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {

            anchor.addEventListener("click", function (e) {

                const target = document.querySelector(

                    this.getAttribute("href")

                );

                if (target) {

                    e.preventDefault();

                    target.scrollIntoView({

                        behavior: "smooth"

                    });

                }

            });

        });

    </script>
@endsection