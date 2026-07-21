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
            --shadow: 0 20px 50px rgba(0, 0, 0, .12);

        }

        a {
            text-decoration: none;
        }

        header {

            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
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
            padding: 14px 35px;
            border-radius: 50px;
            color: #fff;

        }

        .hero {

            height: 100vh;

            background:

                linear-gradient(rgba(0, 0, 0, .72), rgba(0, 0, 0, .72)),

                url("https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=2200");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;

            animation: zoomHero 16s infinite alternate;

        }

        @keyframes zoomHero {

            from {
                background-size: 100%;
            }

            to {
                background-size: 110%;
            }

        }

        .hero h6 {

            color: var(--primary);
            font-weight: 700;

        }

        .hero h1 {

            font-size: 68px;
            font-weight: 800;
            line-height: 78px;
            color: #fff;
            margin: 20px 0;

        }

        .hero p {

            font-size: 18px;
            color: #ddd;

        }

        .hero-box {

            background: rgba(255, 255, 255, .08);

            backdrop-filter: blur(15px);

            padding: 35px;

            border-radius: 20px;

            color: #fff;

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

        .story-card {

            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow);

        }

        .counter-card {

            background: #fff;
            padding: 35px;
            border-radius: 18px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: .4s;

        }

        .counter-card:hover {

            transform: translateY(-8px);

        }

        .counter {

            font-size: 48px;
            font-weight: 800;
            color: var(--primary);

        }

        @media(max-width:991px) {

            .hero {

                height: auto;
                padding: 170px 0 120px;

            }

            .hero h1 {

                font-size: 44px;
                line-height: 55px;

            }

        }
    </style>

    <section class="hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7" data-aos="fade-right">

                    <h6>

                        ABOUT SAHARA CARS

                    </h6>

                    <h1>

                        Driven By Trust,
                        Powered By Passion

                    </h1>

                    <p>

                        We help thousands of customers buy and sell premium luxury vehicles with complete transparency,
                        certified inspections and world-class customer service.

                    </p>

                    <a href="#story" class="btn btn-main mt-4">

                        Explore Our Journey

                    </a>

                </div>

                <div class="col-lg-5" data-aos="fade-left">

                    <div class="hero-box">

                        <h3>

                            15+ Years

                        </h3>

                        <p>

                            Delivering premium automotive experiences.

                        </p>

                        <hr>

                        <div class="row text-center">

                            <div class="col">

                                <h4>

                                    12K+

                                </h4>

                                <small>

                                    Cars Sold

                                </small>

                            </div>

                            <div class="col">

                                <h4>

                                    4.9★

                                </h4>

                                <small>

                                    Google Rating

                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="story" class="section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right">

                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900"
                        class="img-fluid rounded-4 shadow">

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <div class="story-card">

                        <h6 class="text-danger">

                            OUR STORY

                        </h6>

                        <h2 class="fw-bold mb-4">

                            Luxury Cars,
                            Exceptional Service

                        </h2>

                        <p>

                            Sahara Cars was founded with a single vision—to make buying and selling premium cars
                            transparent, stress-free, and enjoyable.

                            Today we offer certified pre-owned luxury vehicles, finance assistance, exchange programs,
                            and unmatched customer support.

                        </p>

                        <p>

                            Every vehicle undergoes a rigorous inspection before reaching our showroom, ensuring
                            confidence with every purchase.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h6 class="text-danger fw-bold">
                    WHO WE ARE
                </h6>

                <h2 class="fw-bold">
                    Our Mission & Vision
                </h2>

                <p class="text-muted">
                    Building trust through premium automotive experiences.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-6" data-aos="fade-right">

                    <div class="story-card h-100">

                        <div class="mb-4">

                            <i class="fa-solid fa-bullseye fa-3x text-danger"></i>

                        </div>

                        <h3 class="fw-bold">

                            Our Mission

                        </h3>

                        <p class="mt-3">

                            To make buying, selling and financing premium
                            cars simple, transparent and enjoyable.

                            We focus on customer satisfaction,
                            fair pricing,
                            quality inspection and hassle-free ownership.

                        </p>

                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <div class="story-card h-100">

                        <div class="mb-4">

                            <i class="fa-solid fa-eye fa-3x text-danger"></i>

                        </div>

                        <h3 class="fw-bold">

                            Our Vision

                        </h3>

                        <p class="mt-3">

                            To become India's most trusted luxury automobile
                            destination through innovation,
                            technology,
                            integrity and outstanding customer service.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="counter-card" data-aos="zoom-in">

                        <div class="counter" data-target="15">

                            0

                        </div>

                        <h5 class="mt-3">

                            Years Experience

                        </h5>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="counter-card" data-aos="zoom-in" data-aos-delay="100">

                        <div class="counter" data-target="12000">

                            0

                        </div>

                        <h5 class="mt-3">

                            Cars Delivered

                        </h5>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="counter-card" data-aos="zoom-in" data-aos-delay="200">

                        <div class="counter" data-target="6500">

                            0

                        </div>

                        <h5 class="mt-3">

                            Happy Customers

                        </h5>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="counter-card" data-aos="zoom-in" data-aos-delay="300">

                        <div class="counter">

                            4.9★

                        </div>

                        <h5 class="mt-3">

                            Google Rating

                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Why Choose Sahara Cars

                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-4" data-aos="flip-left">

                    <div class="story-card text-center">

                        <i class="fa-solid fa-shield-halved fa-3x text-danger mb-4"></i>

                        <h4>

                            Certified Vehicles

                        </h4>

                        <p>

                            Every vehicle undergoes
                            a comprehensive quality inspection.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4" data-aos="flip-left" data-aos-delay="100">

                    <div class="story-card text-center">

                        <i class="fa-solid fa-handshake fa-3x text-danger mb-4"></i>

                        <h4>

                            Transparent Pricing

                        </h4>

                        <p>

                            No hidden charges.
                            Fair market valuation every time.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4" data-aos="flip-left" data-aos-delay="200">

                    <div class="story-card text-center">

                        <i class="fa-solid fa-headset fa-3x text-danger mb-4"></i>

                        <h4>

                            Premium Support

                        </h4>

                        <p>

                            Dedicated relationship manager
                            throughout your ownership journey.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Our Journey

                </h2>

            </div>

            <div class="row">

                <div class="col-lg-10 mx-auto">

                    <div class="border-start border-4 border-danger ps-5">

                        <div class="mb-5" data-aos="fade-right">

                            <h4>

                                2010

                            </h4>

                            <p>

                                Started Sahara Cars with a vision
                                to redefine the luxury used-car market.

                            </p>

                        </div>

                        <div class="mb-5" data-aos="fade-left">

                            <h4>

                                2015

                            </h4>

                            <p>

                                Expanded operations
                                across multiple cities
                                with certified inspection centres.

                            </p>

                        </div>

                        <div class="mb-5" data-aos="fade-right">

                            <h4>

                                2020

                            </h4>

                            <p>

                                Launched online vehicle booking,
                                digital finance
                                and doorstep delivery.

                            </p>

                        </div>

                        <div data-aos="fade-left">

                            <h4>

                                2026

                            </h4>

                            <p>

                                Serving thousands of satisfied customers
                                across India.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h6 class="text-danger fw-bold">
                    OUR LEADERSHIP
                </h6>

                <h2 class="fw-bold">
                    Meet Our Team
                </h2>

                <p class="text-muted">
                    Experienced professionals committed to delivering exceptional automotive experiences.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in">

                    <div class="story-card text-center">

                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-4 shadow"
                            width="140">

                        <h4 class="fw-bold">
                            Rajesh Kumar
                        </h4>

                        <p class="text-danger fw-semibold">
                            Founder & CEO
                        </p>

                        <p>
                            Leading Sahara Cars with innovation, transparency and customer-first values.
                        </p>

                        <div class="d-flex justify-content-center gap-3 mt-3">

                            <i class="fab fa-linkedin fa-lg text-primary"></i>
                            <i class="fab fa-facebook fa-lg text-primary"></i>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                    <div class="story-card text-center">

                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle mb-4 shadow"
                            width="140">

                        <h4 class="fw-bold">
                            Anjali Sharma
                        </h4>

                        <p class="text-danger fw-semibold">
                            Sales Director
                        </p>

                        <p>
                            Helping customers choose the perfect luxury vehicle.
                        </p>

                        <div class="d-flex justify-content-center gap-3 mt-3">

                            <i class="fab fa-linkedin fa-lg text-primary"></i>
                            <i class="fab fa-instagram fa-lg text-danger"></i>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">

                    <div class="story-card text-center">

                        <img src="https://randomuser.me/api/portraits/men/71.jpg" class="rounded-circle mb-4 shadow"
                            width="140">

                        <h4 class="fw-bold">
                            Vikram Patel
                        </h4>

                        <p class="text-danger fw-semibold">
                            Finance Head
                        </p>

                        <p>
                            Specialist in automotive finance and customer loan approvals.
                        </p>

                        <div class="d-flex justify-content-center gap-3 mt-3">

                            <i class="fab fa-linkedin fa-lg text-primary"></i>
                            <i class="fab fa-facebook fa-lg text-primary"></i>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">

                    <div class="story-card text-center">

                        <img src="https://randomuser.me/api/portraits/women/62.jpg" class="rounded-circle mb-4 shadow"
                            width="140">

                        <h4 class="fw-bold">
                            Priya Reddy
                        </h4>

                        <p class="text-danger fw-semibold">
                            Customer Success
                        </p>

                        <p>
                            Dedicated to delivering an outstanding ownership experience.
                        </p>

                        <div class="d-flex justify-content-center gap-3 mt-3">

                            <i class="fab fa-linkedin fa-lg text-primary"></i>
                            <i class="fab fa-instagram fa-lg text-danger"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Awards & Achievements
                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6" data-aos="flip-up">

                    <div class="counter-card">

                        <i class="fa-solid fa-trophy fa-3x text-warning mb-4"></i>

                        <h5>Best Luxury Dealer</h5>

                        <p>2025</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="100">

                    <div class="counter-card">

                        <i class="fa-solid fa-award fa-3x text-danger mb-4"></i>

                        <h5>Customer Choice</h5>

                        <p>2024</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="200">

                    <div class="counter-card">

                        <i class="fa-solid fa-medal fa-3x text-success mb-4"></i>

                        <h5>Top Rated Dealer</h5>

                        <p>Google Reviews</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="300">

                    <div class="counter-card">

                        <i class="fa-solid fa-star fa-3x text-warning mb-4"></i>

                        <h5>Premium Partner</h5>

                        <p>Luxury Brands</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Inside Sahara Cars

                </h2>

                <p class="text-muted">

                    Take a look at our premium showroom.

                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4" data-aos="zoom-in">

                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=900"
                        class="img-fluid rounded-4 shadow">

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">

                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=900"
                        class="img-fluid rounded-4 shadow">

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">

                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=900"
                        class="img-fluid rounded-4 shadow">

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Customer Reviews

                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="story-card text-center" data-aos="fade-up">

                        <div class="text-warning fs-4">

                            ★★★★★

                        </div>

                        <p class="mt-4">

                            Outstanding customer support and transparent pricing.

                        </p>

                        <hr>

                        <h5>

                            Rahul Sharma

                        </h5>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="story-card text-center" data-aos="fade-up" data-aos-delay="100">

                        <div class="text-warning fs-4">

                            ★★★★★

                        </div>

                        <p class="mt-4">

                            Buying my BMW here was a fantastic experience.

                        </p>

                        <hr>

                        <h5>

                            Sneha Reddy

                        </h5>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="story-card text-center" data-aos="fade-up" data-aos-delay="200">

                        <div class="text-warning fs-4">

                            ★★★★★

                        </div>

                        <p class="mt-4">

                            Professional team and hassle-free finance process.

                        </p>

                        <hr>

                        <h5>

                            Arjun Mehta

                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-dark text-white">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right">

                    <h6 class="text-danger fw-bold">

                        OUR SHOWROOM

                    </h6>

                    <h2 class="fw-bold mb-4">

                        Experience Luxury Like Never Before

                    </h2>

                    <p class="mb-4">

                        Visit Sahara Cars to explore India's finest collection of certified luxury vehicles.
                        Our showroom combines premium hospitality with expert guidance, making every visit memorable.

                    </p>

                    <div class="row">

                        <div class="col-6 mb-3">

                            ✔ Certified Vehicles

                        </div>

                        <div class="col-6 mb-3">

                            ✔ Finance Assistance

                        </div>

                        <div class="col-6">

                            ✔ Exchange Support

                        </div>

                        <div class="col-6">

                            ✔ Test Drive

                        </div>

                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <div class="position-relative rounded-4 overflow-hidden shadow">

                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1200" class="img-fluid">

                        <a href="#" class="position-absolute top-50 start-50 translate-middle">

                            <div style="
        width:90px;
        height:90px;
        background:#ff4d00;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        box-shadow:0 20px 50px rgba(255,77,0,.35);
        ">

                                <i class="fa-solid fa-play text-white fa-2x"></i>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="py-5" style="background:#ff4d00;">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8 text-white">

                    <h2 class="fw-bold">

                        Ready To Find Your Dream Car?

                    </h2>

                    <p class="mb-0">

                        Browse our premium collection or connect with our experts today.

                    </p>

                </div>

                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                    <a href="{{ route('buyCars') }}" class="btn btn-light btn-lg px-5">

                        Browse Cars

                    </a>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-right">

                    <h2 class="fw-bold mb-4">

                        Get In Touch

                    </h2>

                    <p class="text-muted">

                        We'd love to help you buy, sell or finance your next luxury vehicle.

                    </p>

                    <div class="mb-4">

                        <h5>

                            <i class="fa-solid fa-location-dot text-danger me-2"></i>

                            Address

                        </h5>

                        <p>

                            Sahara Cars,
                            Bangalore,
                            Karnataka,
                            India

                        </p>

                    </div>

                    <div class="mb-4">

                        <h5>

                            <i class="fa-solid fa-phone text-danger me-2"></i>

                            Phone

                        </h5>

                        <p>

                            +91 98765 43210

                        </p>

                    </div>

                    <div>

                        <h5>

                            <i class="fa-solid fa-envelope text-danger me-2"></i>

                            Email

                        </h5>

                        <p>

                            info@saharacars.com

                        </p>

                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-left">

                    <div class="story-card">

                        <input class="form-control mb-3" placeholder="Full Name">

                        <input class="form-control mb-3" placeholder="Email">

                        <input class="form-control mb-3" placeholder="Phone Number">

                        <textarea class="form-control mb-3" rows="5" placeholder="Message"></textarea>

                        <button class="btn btn-main w-100">

                            Send Message

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <script>

        // Animated Counters
        document.querySelectorAll(".counter[data-target]").forEach(counter => {

            const update = () => {

                const target = +counter.dataset.target;

                const current = +counter.innerText;

                const increment = target / 80;

                if (current < target) {

                    counter.innerText = Math.ceil(current + increment);

                    requestAnimationFrame(update);

                } else {

                    counter.innerText = target + "+";

                }

            };

            update();

        });

        // Smooth Anchor Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {

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

    </script>
@endsection