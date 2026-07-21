<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $site->site_name ?? "SAHARA CARS" }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f5f5f5;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        img {
            width: 100%;
            display: block;
        }

        :root {

            --primary: #ff3b00;
            --dark: #0b0b0b;
            --light: #ffffff;
            --gray: #7c7c7c;
            --shadow: 0 20px 50px rgba(0, 0, 0, .12);

        }

        /*======================
HEADER
=======================*/

        header {

            position: absolute;
            top: 0;
            left: 0;
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

        .navbar-nav .nav-link {

            color: #fff;
            font-weight: 500;
            margin: 0 15px;
            transition: .3s;

        }

        .navbar-nav .nav-link:hover {

            color: var(--primary);

        }

        .contact-icons {

            display: flex;
            align-items: center;
            gap: 18px;

        }

        .contact-icons i {

            height: 46px;
            width: 46px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            color: var(--primary);

        }

        .btn-special {

            background: var(--primary);
            color: #fff;
            padding: 14px 34px;
            border-radius: 40px;
            font-weight: 600;
            transition: .4s;

        }

        .btn-special:hover {

            background: #fff;
            color: #111;

        }

        /*=====================
HERO
======================*/

        .hero {

            height: 100vh;
            background: url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1920") center center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;

        }

        .hero::before {

            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, .72);

        }

        .hero .container {

            position: relative;
            z-index: 2;

        }

        .hero h5 {

            color: var(--primary);
            font-weight: 600;
            margin-bottom: 20px;

        }

        .hero h1 {

            font-size: 70px;
            font-weight: 800;
            line-height: 80px;
            color: #fff;
            margin-bottom: 20px;

        }

        .hero p {

            font-size: 18px;
            color: #ddd;
            width: 650px;
            max-width: 100%;
            margin-bottom: 35px;

        }

        .hero-btn {

            display: flex;
            gap: 20px;

        }

        .hero-btn a {

            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;

        }

        .btn-red {

            background: var(--primary);
            color: #fff;

        }

        .btn-white {

            background: #fff;
            color: #111;

        }

        .hero-features {

            display: flex;
            margin-top: 70px;
            gap: 45px;
            flex-wrap: wrap;

        }

        .feature-box {

            display: flex;
            align-items: center;
            color: #fff;

        }

        .feature-box i {

            font-size: 32px;
            color: var(--primary);
            margin-right: 15px;

        }

        /*======================
SEARCH BOX
=======================*/

        .search-box {

            background: #fff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-top: -90px;
            position: relative;
            z-index: 5;

        }

        .search-box select,
        .search-box input {

            height: 58px;

        }

        .search-btn {

            height: 58px;
            width: 100%;
            background: var(--primary);
            border: none;
            color: #fff;
            border-radius: 12px;
            font-weight: 600;

        }

        /*=====================
SECTION
======================*/

        .section {

            padding: 90px 0;

        }

        .section-title {

            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 45px;

        }

        .section-title h2 {

            font-weight: 700;
            font-size: 42px;

        }

        .view-btn {

            padding: 14px 35px;
            background: #111;
            color: #fff;
            border-radius: 40px;

        }

        /*======================
CAR CARD
=======================*/

        .car-card {

            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: .35s;

        }

        .car-card:hover {

            transform: translateY(-12px);

        }

        .car-image {

            height: 250px;
            overflow: hidden;
            position: relative;

        }

        .car-image img {

            height: 100%;
            object-fit: cover;
            transition: .5s;

        }

        .car-card:hover img {

            transform: scale(1.08);

        }

        .badge-year {

            position: absolute;
            top: 18px;
            left: 18px;
            background: var(--primary);
            color: #fff;
            padding: 8px 14px;
            border-radius: 30px;

        }

        .badge-new {

            position: absolute;
            top: 18px;
            right: 18px;
            background: #111;
            color: #fff;
            padding: 8px 14px;
            border-radius: 30px;

        }

        .card-body {

            padding: 28px;

        }

        .car-name {

            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;

        }

        .specs {

            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;

        }

        .price {

            font-size: 34px;
            font-weight: 700;
            color: #111;

        }

        .card-bottom {

            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;

        }

        .call-icons {

            display: flex;
            gap: 12px;

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

        .view-car {

            padding: 12px 25px;
            background: #FF5722;
            color: #fff;
            border-radius: 40px;

        }

        /*======================
FEATURES
=======================*/

        .features {

            background: #111;
            padding: 80px 0;

        }

        .feature-item {

            text-align: center;
            color: #fff;

        }

        .feature-item i {

            font-size: 48px;
            margin-bottom: 20px;
            color: var(--primary);

        }

        /*======================
FOOTER
=======================*/

        footer {

            background: #000;
            padding: 70px 0;
            color: #ccc;

        }

        footer h4 {

            color: #fff;
            margin-bottom: 25px;

        }

        footer ul {

            list-style: none;
            padding: 0;

        }

        footer ul li {

            margin-bottom: 12px;

        }

        footer ul li a {

            color: #aaa;

        }

        footer ul li a:hover {

            color: #fff;

        }

        .copy {

            border-top: 1px solid rgba(255, 255, 255, .08);
            margin-top: 40px;
            padding-top: 25px;
            text-align: center;

        }

        /*======================
RESPONSIVE
=======================*/

        @media(max-width:991px) {

            .hero {

                height: auto;
                padding: 160px 0 120px;

            }

            .hero h1 {

                font-size: 48px;
                line-height: 58px;

            }

            .hero-features {

                gap: 25px;

            }

            .section-title {

                flex-direction: column;
                align-items: flex-start;
                gap: 20px;

            }

        }

        @keyframes floating {

            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }

        }

        .hero-car {

            animation: floating 4s ease-in-out infinite;

        }

        .btn-special,
        .btn-red,
        .view-car {

            transition: .35s;

        }

        .btn-special:hover,
        .btn-red:hover,
        .view-car:hover {

            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(255, 87, 34, .35);

        }

        .car-card:hover {

            transform: translateY(-12px);

        }

        .hero {

            animation: heroZoom 12s infinite alternate;

        }

        @keyframes heroZoom {

            from {

                background-size: 100%;

            }

            to {

                background-size: 110%;

            }

        }
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($site->favicon) }}">


</head>

<body>

    <header>

        <div class="container">

            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="{{ route('home') }}" style="max-width: 200px">
                    <img src="{{ asset($site->site_logo) }}" alt="">
                </a>

                <button class="navbar-toggler bg-white" data-bs-toggle="collapse" data-bs-target="#menu">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="menu">

                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('buyCars') }}">Buy Cars</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('sellCar') }}">Sell Car</a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('finance') }}">Finance</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#contactModal">Contact</a>
                        </li>

                    </ul>

                    <div class="contact-icons">

                        <a target="_blank" href="https://wa.me/{{$site->phone}}">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a target="_blank" href="tel:{{$site->phone}}">
                            <i class="fa-solid fa-phone"></i>
                        </a>

                        <a href="#" class="btn-special" data-bs-toggle="modal" data-bs-target="#contactModal">
                            Speak To Specialist
                        </a>

                    </div>

                </div>

            </nav>

        </div>

    </header>

    @yield('content')




    <!-- =========================
FOOTER
========================= -->

    <footer data-aos="fade-up">

        <div class="container">

            <div class="row">

                <div class="col-lg-4">

                    {{-- <h4>SAHARA CARS</h4> --}}
                     <a class="navbar-brand" href="{{ route('home') }}" style="max-width: 200px">
                    <img src="{{ asset($site->site_logo) }}" alt="">
                </a>

                    <p>

                        India's trusted destination for premium pre-owned
                        luxury cars. Buy, Sell and Finance your dream vehicle
                        with complete confidence.

                    </p>

                    <div class="d-flex gap-3 mt-4">

                        <a href="#"><i class="fab fa-facebook fa-lg text-white"></i></a>

                        <a href="#"><i class="fab fa-instagram fa-lg text-white"></i></a>

                        <a href="#"><i class="fab fa-youtube fa-lg text-white"></i></a>

                        <a href="#"><i class="fab fa-linkedin fa-lg text-white"></i></a>

                    </div>

                </div>

                <div class="col-lg-2">

                    <h4>Quick Links</h4>

                    <ul>

                        <li><a href="{{ route('home') }}">Home</a></li>

                        <li><a href="{{ route('buyCars') }}">Buy Cars</a></li>

                        {{-- <li><a href="{{ route('sellCar') }}">Sell Car</a></li> --}}

                        <li><a href="{{ route('finance') }}">Finance</a></li>

                        <li><a href="{{ route('about') }}">About</a></li>

                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a></li>

                    </ul>

                </div>
                @php
                    $footerBrands = App\Models\Brand::where('status', 1)->inRandomOrder()->take(5)->get();
                @endphp
                <div class="col-lg-3">

                    <h4>Brands</h4>

                    <ul>

                        @forelse($footerBrands as $brand)

                            <li>
                                <a href="{{ route('buyCars', ['brand' => $brand->id]) }}">
                                    {{ $brand->name }}
                                </a>
                            </li>

                        @empty

                            <li>
                                <span class="text-muted">No Brands Available</span>
                            </li>

                        @endforelse

                    </ul>

                </div>

                <div class="col-lg-3">

                    <h4>Contact</h4>

                    <p>

                        <i class="fa-solid fa-location-dot"></i>

                        {{$site->address}}

                    </p>

                    <p>

                        <a target="_blank" href="tel:{{$site->phone}}">
                            <i class="fa-solid fa-phone"></i>
                            {{$site->phone}}
                        </a>

                    </p>

                    <p>

                        <i class="fa-solid fa-envelope"></i>

                        {{$site->email}}

                    </p>

                    <p>

                        <a target="_blank" href="https://wa.me/{{$site->phone}}">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        WhatsApp Support

                    </p>

                </div>

            </div>

            <div class="copy">

                © 2026 Sahara Cars. All Rights Reserved. Designed by <a href="https://www.thiven.com"
                    target="_blank">THIVEN</a>

            </div>

        </div>

    </footer>

    <!-- Contact Modal -->

    <div class="modal fade" id="contactModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content border-0 rounded-4 overflow-hidden">

                <div class="row g-0">

                    <!-- Left -->

                    <div class="col-lg-5 text-white p-5" style="background:linear-gradient(135deg,#111,#ff4d00);">

                        {{-- <h2 class="fw-bold mb-3">
                            Sahara Cars
                        </h2> --}}
                        <a class="navbar-brand" href="{{ route('home') }}" style="max-width: 200px">
                            <img src="{{ asset($site->site_logo) }}" alt="">
                        </a>

                        <p class="mb-4">

                            Looking for your dream car?

                            Our experts will contact you within
                            30 minutes.

                        </p>

                        <div class="mb-4">

                            <h6>

                                <a target="_blank" href="tel:{{$site->phone}}">
                                    <i class="fa-solid fa-phone me-2"></i>

                                    {{$site->phone}}
                                </a>

                            </h6>

                            <h6>

                                <i class="fab fa-whatsapp me-2"></i>

                                WhatsApp Support

                            </h6>

                            <h6>

                                <i class="fa-solid fa-envelope me-2"></i>

                                info@saharacars.com

                            </h6>

                            <h6>

                                <i class="fa-solid fa-location-dot me-2"></i>

                                {{$site->address}}

                            </h6>

                        </div>

                        <div class="d-flex gap-3">

                            <a href="https://wa.me/{{$site->phone}}" class="btn btn-light rounded-pill">

                                <i class="fab fa-whatsapp"></i>

                            </a>

                            <a class="btn btn-light rounded-pill" target="_blank" href="tel:{{$site->phone}}">

                                <i class="fa-solid fa-phone"></i>

                            </a>

                        </div>

                    </div>

                    <!-- Right -->

                    <div class="col-lg-7" data-aos="fade-right">

                        <div class="p-5">

                            <div class="d-flex justify-content-between align-items-center mb-4">

                                <h3 class="fw-bold">

                                    Contact Us

                                </h3>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                            </div>

                            <form action="{{ route('contact.store') }}" method="POST">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control form-control-lg" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" name="mobile" class="form-control form-control-lg" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control form-control-lg">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Message</label>

                                    <textarea name="message" rows="4" class="form-control"></textarea>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-danger btn-lg rounded-pill">
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



    <!-- Floating Buttons -->

    <a href="#" id="topBtn" style="
position:fixed;
right:25px;
bottom:25px;
width:55px;
height:55px;
border-radius:50%;
background:#ff3b00;
display:flex;
justify-content:center;
align-items:center;
color:#fff;
font-size:22px;
box-shadow:0 15px 30px rgba(0,0,0,.25);
display:none;
z-index:9999;
">

        <i class="fa-solid fa-arrow-up"></i>

    </a>

    <a href="https://wa.me/{{$site->phone}}" style="
position:fixed;
left:25px;
bottom:25px;
width:60px;
height:60px;
border-radius:50%;
background:#25D366;
display:flex;
justify-content:center;
align-items:center;
color:#fff;
font-size:28px;
box-shadow:0 15px 30px rgba(0,0,0,.25);
z-index:9999;
" target="_blank">

        <i class="fab fa-whatsapp"></i>

    </a>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        // Sticky Navbar

        window.addEventListener("scroll", function () {

            let nav = document.querySelector(".navbar");

            if (window.scrollY > 80) {

                nav.style.background = "#111";
                nav.style.padding = "12px 0";
                nav.style.borderRadius = "12px";

            } else {

                nav.style.background = "transparent";
                nav.style.padding = "18px 0";

            }

        });



        // Scroll Button

        const topBtn = document.getElementById("topBtn");

        window.addEventListener("scroll", () => {

            if (window.scrollY > 400) {

                topBtn.style.display = "flex";

            } else {

                topBtn.style.display = "none";

            }

        });

        topBtn.onclick = function (e) {

            e.preventDefault();

            window.scrollTo({

                top: 0,

                behavior: "smooth"

            });

        }



        // Smooth Scroll

        document.querySelectorAll("a[href^='#']").forEach(anchor => {

            anchor.addEventListener("click", function (e) {

                const target = document.querySelector(this.getAttribute("href"));

                if (target) {

                    e.preventDefault();

                    target.scrollIntoView({

                        behavior: "smooth"

                    });

                }

            });

        });



        // Search Button Demo

        const searchBtn = document.querySelector(".search-btn");

        if (searchBtn) {

            searchBtn.addEventListener("click", () => {

                // alert("Search functionality can be connected to your Laravel backend.");

            });

        }



        // Card Animation

        const cards = document.querySelectorAll(".car-card");

        cards.forEach(card => {

            card.addEventListener("mouseenter", () => {

                card.style.transform = "translateY(-12px)";

            });

            card.addEventListener("mouseleave", () => {

                card.style.transform = "translateY(0px)";

            });

        });

    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 900,
            easing: 'ease-in-out',
            once: true,
            offset: 80
        });
    </script>
    <script>
        document.querySelectorAll(".counter").forEach(counter => {

            const update = () => {

                const target = +counter.dataset.count;

                const current = +counter.innerText;

                const inc = target / 20;

                if (current < target) {

                    counter.innerText = Math.ceil(current + inc);

                    requestAnimationFrame(update);

                } else {

                    counter.innerText = target + "+";

                }

            }

            update();

        });
    </script>
</body>

</html>