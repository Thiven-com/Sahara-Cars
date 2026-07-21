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
            background: #f7f8fb;
        }

        :root {
            --primary: #ff3b00;
            --dark: #111;
            --shadow: 0 15px 40px rgba(0, 0, 0, .08);
        }

        a {
            text-decoration: none;
        }

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
            margin: 0 15px;
        }

        .btn-call {
            background: var(--primary);
            color: #fff;
            padding: 12px 30px;
            border-radius: 40px;
        }

        .hero {

            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)),
                url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1900");

            background-size: cover;
            background-position: center;

            padding: 110px 0;

            color: #fff;

        }

        .hero h1 {

            font-size: 60px;
            font-weight: 800;
            margin-bottom: 20px;

        }

        .hero p {

            font-size: 18px;
            color: #ddd;

        }

        .sell-form {

            background: #fff;
            border-radius: 20px;
            padding: 35px;
            box-shadow: var(--shadow);

            margin-top: -70px;

            position: relative;

            z-index: 10;

        }

        .sell-form h3 {

            font-weight: 700;
            margin-bottom: 30px;

        }

        .form-control,
        .form-select {

            height: 56px;
            border-radius: 12px;

        }

        textarea.form-control {

            height: auto;

        }

        .btn-sell {

            height: 58px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-weight: 600;

        }

        .section {

            padding: 80px 0;

        }

        .step-card {

            background: #fff;
            padding: 30px;
            border-radius: 18px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: .3s;

        }

        .step-card:hover {

            transform: translateY(-8px);

        }

        .step-card i {

            font-size: 50px;
            color: var(--primary);
            margin-bottom: 20px;

        }

        @media(max-width:991px) {

            .hero {

                padding: 80px 0;

            }

            .hero h1 {

                font-size: 42px;

            }

            .sell-form {

                margin-top: 30px;

            }

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

        .hero i {

            animation: floating 4s ease-in-out infinite;

        }

        .form-control,
        .form-select {

            transition: .3s;

        }

        .form-control:focus,
        .form-select:focus {

            border-color: #ff5722;

            box-shadow: 0 0 0 .25rem rgba(255, 87, 34, .18);

        }

        .step-card {

            transition: .4s;

        }

        .step-card:hover {

            transform: translateY(-10px);

            box-shadow: 0 25px 60px rgba(0, 0, 0, .15);

        }

        .btn-sell {

            transition: .35s;

        }

        .btn-sell:hover {

            transform: translateY(-4px);

            box-shadow: 0 20px 40px rgba(255, 87, 34, .35);

        }

        .upload-box {

            border: 2px dashed #ff5722;

            border-radius: 20px;

            padding: 40px;

            text-align: center;

            cursor: pointer;

            transition: .35s;

        }

        .upload-box:hover {

            background: #fff7f4;

        }
    </style>

    <!-- HERO -->

    <section class="hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7" data-aos="fade-right">

                    <h6 class="text-danger fw-bold">

                        SELL YOUR CAR

                    </h6>

                    <h1>

                        Get the Best Price
                        for Your Car

                    </h1>

                    <p>

                        Sell your used car with Sahara Cars.
                        Free inspection, instant valuation,
                        secure payment and hassle-free paperwork.

                    </p>

                    <div class="mt-4">

                        <a href="#sellForm" class="btn btn-danger btn-lg px-5">

                            Get Free Valuation

                        </a>

                    </div>

                </div>

                <div class="col-lg-5 text-center" data-aos="fade-left">

                    <i class="fa-solid fa-car-side" style="font-size:180px;color:#ff3b00;"></i>

                </div>

            </div>

        </div>

    </section>

    <!-- FORM -->

    <section class="container">

        <div class="sell-form" id="sellForm" data-aos="fade-up">

            <h3>

                Vehicle Information

            </h3>

            <div class="row g-4">

                <div class="col-lg-6">

                    <label class="mb-2">

                        Owner Name

                    </label>

                    <input type="text" class="form-control" placeholder="Enter Name">

                </div>

                <div class="col-lg-6">

                    <label class="mb-2">

                        Mobile Number

                    </label>

                    <input type="text" class="form-control" placeholder="+91">

                </div>

                <div class="col-lg-4">

                    <label class="mb-2">

                        Car Brand

                    </label>

                    <select class="form-select">

                        <option>BMW</option>

                        <option>Audi</option>

                        <option>Mercedes</option>

                        <option>Volvo</option>

                        <option>Jaguar</option>

                    </select>

                </div>

                <div class="col-lg-4">

                    <label class="mb-2">

                        Model

                    </label>

                    <input type="text" class="form-control" placeholder="Car Model">

                </div>

                <div class="col-lg-4">

                    <label class="mb-2">

                        Year

                    </label>

                    <select class="form-select">

                        <option>2025</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>

                    </select>

                </div>

                <div class="col-lg-4">

                    <label class="mb-2">

                        Fuel Type

                    </label>

                    <select class="form-select">

                        <option>Petrol</option>

                        <option>Diesel</option>

                        <option>Electric</option>

                        <option>Hybrid</option>

                    </select>

                </div>

                <div class="col-lg-4">

                    <label class="mb-2">

                        Transmission

                    </label>

                    <select class="form-select">

                        <option>Automatic</option>

                        <option>Manual</option>

                    </select>

                </div>

                <div class="col-lg-4">

                    <label class="mb-2">

                        KM Driven

                    </label>

                    <input type="number" class="form-control" placeholder="45000">

                </div>
                <!-- Upload Images -->

                <div class="col-lg-12">

                    <label class="mb-2 fw-semibold">
                        Upload Car Photos
                    </label>

                    <input type="file" class="form-control" multiple>

                    <small class="text-muted">
                        Upload up to 10 high-quality images.
                    </small>

                </div>

                <!-- Registration Number -->

                <div class="col-lg-4">

                    <label class="mb-2">
                        Registration Number
                    </label>

                    <input type="text" class="form-control" placeholder="KA01AB1234">

                </div>

                <!-- City -->

                <div class="col-lg-4">

                    <label class="mb-2">
                        City
                    </label>

                    <select class="form-select">

                        <option>Bangalore</option>
                        <option>Hyderabad</option>
                        <option>Chennai</option>
                        <option>Mumbai</option>
                        <option>Delhi</option>

                    </select>

                </div>

                <!-- Ownership -->

                <div class="col-lg-4">

                    <label class="mb-2">
                        Ownership
                    </label>

                    <select class="form-select">

                        <option>1st Owner</option>
                        <option>2nd Owner</option>
                        <option>3rd Owner</option>

                    </select>

                </div>

                <!-- Insurance -->

                <div class="col-lg-4">

                    <label class="mb-2">
                        Insurance Status
                    </label>

                    <select class="form-select">

                        <option>Comprehensive</option>
                        <option>Third Party</option>
                        <option>Expired</option>

                    </select>

                </div>

                <!-- Insurance Validity -->

                <div class="col-lg-4">

                    <label class="mb-2">
                        Insurance Valid Till
                    </label>

                    <input type="date" class="form-control">

                </div>

                <!-- Service History -->

                <div class="col-lg-4">

                    <label class="mb-2">
                        Service History
                    </label>

                    <select class="form-select">

                        <option>Authorized Service Center</option>
                        <option>Local Garage</option>
                        <option>Not Available</option>

                    </select>

                </div>

                <!-- Expected Price -->

                <div class="col-lg-6">

                    <label class="mb-2">
                        Expected Selling Price
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            ₹
                        </span>

                        <input type="number" class="form-control" placeholder="2500000">

                    </div>

                </div>

                <!-- Loan -->

                <div class="col-lg-6">

                    <label class="mb-2">
                        Outstanding Loan
                    </label>

                    <select class="form-select">

                        <option>No Loan</option>
                        <option>Loan Active</option>

                    </select>

                </div>

                <!-- Description -->

                <div class="col-lg-12">

                    <label class="mb-2">
                        Additional Information
                    </label>

                    <textarea class="form-control" rows="5"
                        placeholder="Tell us about your car, accessories, modifications, accident history, etc."></textarea>

                </div>

                <!-- Terms -->

                <div class="col-lg-12">

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" id="agree">

                        <label class="form-check-label" for="agree">

                            I confirm that the information provided is accurate.

                        </label>

                    </div>

                </div>

                <!-- Submit -->

                <div class="col-lg-12 d-grid">

                    <button class="btn-sell">

                        <i class="fa-solid fa-car me-2"></i>

                        Get Instant Valuation

                    </button>

                </div>

            </div>

        </div>

    </section>


    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Why Sell With Sahara Cars?
                </h2>

                <p class="text-muted">
                    Fast, transparent, and hassle-free car selling experience.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="100">

                        <i class="fa-solid fa-money-bill-wave"></i>

                        <h5>Best Price</h5>

                        <p>
                            Get the highest market value for your vehicle.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="200">

                        <i class="fa-solid fa-file-contract"></i>

                        <h5>Free Paperwork</h5>

                        <p>
                            RC transfer and documentation handled by us.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="300">

                        <i class="fa-solid fa-credit-card"></i>

                        <h5>Instant Payment</h5>

                        <p>
                            Receive payment directly to your bank account.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="400">

                        <i class="fa-solid fa-shield-halved"></i>

                        <h5>Secure Process</h5>

                        <p>
                            Verified buyers and secure transactions.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Sell Your Car in 4 Easy Steps
                </h2>

                <p class="text-muted">
                    Simple, transparent and hassle-free process.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                    <div class="step-card">

                        <div class="display-4 fw-bold text-danger mb-3">
                            1
                        </div>

                        <h5>Submit Details</h5>

                        <p>
                            Fill in your vehicle information and upload photos.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="200">

                        <div class="display-4 fw-bold text-danger mb-3">
                            2
                        </div>

                        <h5>Free Inspection</h5>

                        <p>
                            Our experts inspect your car at your convenience.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="300">

                        <div class="display-4 fw-bold text-danger mb-3">
                            3
                        </div>

                        <h5>Best Offer</h5>

                        <p>
                            Receive the best market price with instant approval.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="step-card" data-aos="zoom-in" data-aos-delay="400">

                        <div class="display-4 fw-bold text-danger mb-3">
                            4
                        </div>

                        <h5>Instant Payment</h5>

                        <p>
                            Complete paperwork and receive payment immediately.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="py-5" style="background:#111;">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8 text-white" data-aos="fade-left">

                    <h2 class="fw-bold">

                        Get Your Free Car Valuation Today

                    </h2>

                    <p class="mb-0">

                        No hidden charges. Free inspection. Instant payment.

                    </p>

                </div>

                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-right">

                    <a href="#sellForm" class="btn btn-danger btn-lg px-5">

                        Start Selling

                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="section">

        <div class="container">

            <div class="text-center mb-5" data-aos="fade-down">

                <h2 class="fw-bold">

                    Frequently Asked Questions

                </h2>

            </div>

            <div class="accordion" id="faq" data-aos="fade-up">

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">

                    <h2 class="accordion-header">

                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">

                            How long does it take to sell my car?

                        </button>

                    </h2>

                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faq">

                        <div class="accordion-body">

                            Most cars are evaluated within 24 hours and purchased within 1–2 business days.

                        </div>

                    </div>

                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">

                            Is inspection free?

                        </button>

                    </h2>

                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">

                            Yes. Vehicle inspection and valuation are completely free.

                        </div>

                    </div>

                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">

                            When will I receive payment?

                        </button>

                    </h2>

                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">

                            Payment is transferred immediately after document verification.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script>

        // Simple form validation

        document.querySelector(".btn-sell").addEventListener("click", function (e) {

            e.preventDefault();

            const name = document.querySelector("input[type='text']").value;

            const phone = document.querySelectorAll("input[type='text']")[1].value;

            if (name === "" || phone === "") {

                alert("Please fill Owner Name and Mobile Number.");

                return;

            }

            alert("Thank you! Your request has been submitted successfully.");

        });



        // Smooth scroll

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