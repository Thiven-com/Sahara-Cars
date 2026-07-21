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

                {{-- <p class="text-muted">

                    Luxury. Performance. Elegance.

                </p> --}}

            </div>

            {{-- <div class="text-center mb-5">

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

            </div> --}}

            <div class="masonry">

                @forelse($galleries as $gallery)

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