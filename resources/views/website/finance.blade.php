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
            overflow-x: hidden;
        }

        :root {

            --primary: #ff4d00;
            --dark: #101010;
            --light: #ffffff;
            --shadow: 0 20px 50px rgba(0, 0, 0, .12);

        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        header {

            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

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
            margin: 0 12px;
            font-weight: 500;

        }

        .btn-call {

            background: var(--primary);
            color: #fff;
            padding: 14px 30px;
            border-radius: 50px;

        }

        .hero {

            height: 100vh;

            background:

                linear-gradient(rgba(0, 0, 0, .72), rgba(0, 0, 0, .72)),

                url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=2200");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;

            animation: zoomHero 15s infinite alternate;

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
            margin-bottom: 20px;

        }

        .hero h1 {

            font-size: 64px;
            font-weight: 800;
            line-height: 75px;
            color: #fff;

        }

        .hero p {

            font-size: 18px;
            color: #ddd;
            margin: 25px 0;

        }

        .hero-image {

            animation: floatCar 4s ease-in-out infinite;

        }

        @keyframes floatCar {

            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0);
            }

        }

        .hero-card {

            background: rgba(255, 255, 255, .08);

            backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, .15);

            padding: 35px;

            border-radius: 20px;

            color: #fff;

        }

        .hero-card h4 {

            font-weight: 700;

        }

        .hero-card p {

            margin: 0;
            color: #ddd;

        }

        .section {

            padding: 90px 0;

        }

        .emi-box {

            background: #fff;
            border-radius: 25px;
            padding: 40px;
            box-shadow: var(--shadow);

            margin-top: -90px;
            position: relative;
            z-index: 20;

        }

        .form-control,
        .form-select {

            height: 56px;
            border-radius: 12px;

        }

        .form-range {

            margin-top: 10px;

        }

        .result-card {

            background: linear-gradient(135deg, #111, #2b2b2b);

            border-radius: 20px;

            padding: 35px;

            color: #fff;

            height: 100%;

        }

        .result-card h2 {

            font-size: 44px;
            font-weight: 800;
            color: #ff4d00;

        }

        .counter-card {

            background: #fff;
            padding: 35px;
            border-radius: 18px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: .4s;

        }

        .counter-card:hover {

            transform: translateY(-8px);

        }

        .counter {

            font-size: 46px;
            font-weight: 800;
            color: var(--primary);

        }

        .btn-main {

            background: var(--primary);
            color: #fff;
            padding: 15px 35px;
            border-radius: 50px;

        }

        @media(max-width:991px) {

            .hero {

                height: auto;
                padding: 170px 0 120px;

            }

            .hero h1 {

                font-size: 42px;
                line-height: 52px;

            }

        }
    </style>
    <section class="hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7" data-aos="fade-right">

                    <h6>

                        CAR FINANCE

                    </h6>

                    <h1>

                        Drive Home Your
                        Dream Car Today

                    </h1>

                    <p>

                        Lowest interest rates,
                        instant approvals,
                        100% transparent process
                        and flexible EMI plans.

                    </p>

                    <a href="#calculator" class="btn btn-main">

                        Calculate EMI

                    </a>

                </div>

                <div class="col-lg-5" data-aos="fade-left">

                    <div class="hero-card hero-image">

                        <h4>

                            Finance Starts From

                        </h4>

                        <h2>

                            8.49%

                        </h2>

                        <p>

                            Interest Per Annum

                        </p>

                        <hr>

                        <div class="row">

                            <div class="col-6">

                                <strong>48 Hrs</strong>

                                <p>

                                    Approval

                                </p>

                            </div>

                            <div class="col-6">

                                <strong>100%</strong>

                                <p>

                                    Paperwork Support

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="calculator" class="section">

        <div class="container">

            <div class="emi-box">

                <div class="row">

                    <div class="col-lg-7">

                        <h2 class="fw-bold mb-4">

                            EMI Calculator

                        </h2>

                        <div class="mb-4">

                            <label>

                                Loan Amount

                            </label>

                            <input id="loanAmount" type="range" min="100000" max="10000000" step="50000" value="2500000"
                                class="form-range">

                            <h4 id="loanValue">

                                ₹25,00,000

                            </h4>

                        </div>

                        <div class="mb-4">

                            <label>

                                Interest Rate

                            </label>

                            <input id="interest" type="range" min="6" max="18" step="0.1" value="8.5" class="form-range">

                            <h4 id="interestValue">

                                8.5%

                            </h4>

                        </div>

                        <div>

                            <label>

                                Loan Tenure

                            </label>

                            <input id="years" type="range" min="1" max="7" value="5" class="form-range">

                            <h4 id="yearValue">

                                5 Years

                            </h4>

                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="result-card">

                            <h6>

                                Monthly EMI

                            </h6>

                            <h2 id="emi">

                                ₹51,300

                            </h2>

                            <hr>

                            <p>

                                Principal

                                <span class="float-end" id="principal">

                                    ₹25,00,000

                                </span>

                            </p>

                            <p>

                                Interest

                                <span class="float-end" id="interestAmount">

                                    ₹5,78,000

                                </span>

                            </p>

                            <p>

                                Total Payment

                                <span class="float-end" id="totalPayment">

                                    ₹30,78,000

                                </span>

                            </p>

                            <a href="#" class="btn btn-main w-100 mt-4">

                                Apply for Finance

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="section bg-light">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up">

                    <div class="counter-card">

                        <i class="fa-solid fa-hand-holding-dollar fa-3x text-danger mb-3"></i>

                        <div class="counter" data-target="5000">

                            0

                        </div>

                        <h5 class="mt-3">

                            Loans Approved

                        </h5>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="counter-card">

                        <i class="fa-solid fa-building-columns fa-3x text-danger mb-3"></i>

                        <div class="counter" data-target="18">

                            0

                        </div>

                        <h5 class="mt-3">

                            Partner Banks

                        </h5>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">

                    <div class="counter-card">

                        <i class="fa-solid fa-percent fa-3x text-danger mb-3"></i>

                        <div class="counter">

                            8.49%

                        </div>

                        <h5 class="mt-3">

                            Lowest Interest

                        </h5>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">

                    <div class="counter-card">

                        <i class="fa-solid fa-face-smile fa-3x text-danger mb-3"></i>

                        <div class="counter" data-target="98">

                            0

                        </div>

                        <h5 class="mt-3">

                            Approval Rate %

                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Why Finance Through Sahara Cars?

                </h2>

                <p class="text-muted">

                    Fast approval with complete transparency.

                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4" data-aos="zoom-in">

                    <div class="counter-card">

                        <i class="fa-solid fa-wallet fa-3x text-danger mb-4"></i>

                        <h4>

                            Lowest EMI

                        </h4>

                        <p>

                            Affordable monthly payments with flexible tenure.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">

                    <div class="counter-card">

                        <i class="fa-solid fa-bolt fa-3x text-danger mb-4"></i>

                        <h4>

                            Quick Approval

                        </h4>

                        <p>

                            Loan approvals within 24–48 hours.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">

                    <div class="counter-card">

                        <i class="fa-solid fa-file-circle-check fa-3x text-danger mb-4"></i>

                        <h4>

                            Minimal Documentation

                        </h4>

                        <p>

                            Simple paperwork with expert assistance.

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

                    Our Banking Partners

                </h2>

            </div>

            <div class="row text-center g-4">

                <div class="col">

                    <div class="counter-card">

                        <h3>HDFC</h3>

                    </div>

                </div>

                <div class="col">

                    <div class="counter-card">

                        <h3>ICICI</h3>

                    </div>

                </div>

                <div class="col">

                    <div class="counter-card">

                        <h3>SBI</h3>

                    </div>

                </div>

                <div class="col">

                    <div class="counter-card">

                        <h3>Axis</h3>

                    </div>

                </div>

                <div class="col">

                    <div class="counter-card">

                        <h3>Kotak</h3>

                    </div>

                </div>

                <div class="col">

                    <div class="counter-card">

                        <h3>IDFC</h3>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    Loan Process

                </h2>

                <p class="text-muted">

                    Just four simple steps.

                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3" data-aos="fade-up">

                    <div class="counter-card">

                        <div class="display-4 fw-bold text-danger">

                            1

                        </div>

                        <h4 class="mt-3">

                            Apply Online

                        </h4>

                        <p>

                            Submit your finance request.

                        </p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">

                    <div class="counter-card">

                        <div class="display-4 fw-bold text-danger">

                            2

                        </div>

                        <h4 class="mt-3">

                            Document Verification

                        </h4>

                        <p>

                            Upload required documents.

                        </p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">

                    <div class="counter-card">

                        <div class="display-4 fw-bold text-danger">

                            3

                        </div>

                        <h4 class="mt-3">

                            Approval

                        </h4>

                        <p>

                            Receive instant approval.

                        </p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">

                    <div class="counter-card">

                        <div class="display-4 fw-bold text-danger">

                            4

                        </div>

                        <h4 class="mt-3">

                            Drive Home

                        </h4>

                        <p>

                            Collect your dream vehicle.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="section bg-light">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right">

                    <h2 class="fw-bold mb-4">

                        Apply for Finance

                    </h2>

                    <div class="row g-3">

                        <div class="col-md-6">

                            <input type="text" class="form-control" placeholder="Full Name">

                        </div>

                        <div class="col-md-6">

                            <input type="tel" class="form-control" placeholder="Mobile Number">

                        </div>

                        <div class="col-md-6">

                            <input type="email" class="form-control" placeholder="Email Address">

                        </div>

                        <div class="col-md-6">

                            <select class="form-select">

                                <option>Select Car</option>

                                <option>BMW X5</option>

                                <option>Audi Q7</option>

                                <option>Mercedes GLC</option>

                            </select>

                        </div>

                        <div class="col-md-6">

                            <input type="number" class="form-control" placeholder="Monthly Income">

                        </div>

                        <div class="col-md-6">

                            <input type="number" class="form-control" placeholder="Required Loan">

                        </div>

                        <div class="col-12">

                            <button class="btn btn-main w-100">

                                Submit Application

                            </button>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6 text-center" data-aos="fade-left">

                    <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?w=900"
                        class="img-fluid rounded-4 shadow">

                </div>

            </div>

        </div>

    </section>
    <section class="section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Required Documents
                </h2>

                <p class="text-muted">
                    Keep these documents ready for faster approval.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3" data-aos="flip-left">

                    <div class="counter-card">

                        <i class="fa-solid fa-id-card fa-3x text-danger mb-4"></i>

                        <h5>PAN Card</h5>

                        <p>Identity verification document.</p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="flip-left" data-aos-delay="100">

                    <div class="counter-card">

                        <i class="fa-solid fa-address-card fa-3x text-danger mb-4"></i>

                        <h5>Aadhaar Card</h5>

                        <p>Proof of address.</p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="flip-left" data-aos-delay="200">

                    <div class="counter-card">

                        <i class="fa-solid fa-file-invoice-dollar fa-3x text-danger mb-4"></i>

                        <h5>Salary Slips</h5>

                        <p>Latest 3 months salary proof.</p>

                    </div>

                </div>

                <div class="col-lg-3" data-aos="flip-left" data-aos-delay="300">

                    <div class="counter-card">

                        <i class="fa-solid fa-building-columns fa-3x text-danger mb-4"></i>

                        <h5>Bank Statement</h5>

                        <p>Latest 6 months statement.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Happy Customers
                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="counter-card" data-aos="zoom-in">

                        <img src="https://randomuser.me/api/portraits/men/42.jpg" class="rounded-circle mb-3" width="90">

                        <h5>Rahul Sharma</h5>

                        <div class="text-warning mb-3">

                            ★★★★★

                        </div>

                        <p>

                            Very smooth finance process.
                            Approval received within one day.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="counter-card" data-aos="zoom-in" data-aos-delay="100">

                        <img src="https://randomuser.me/api/portraits/women/55.jpg" class="rounded-circle mb-3" width="90">

                        <h5>Priya Nair</h5>

                        <div class="text-warning mb-3">

                            ★★★★★

                        </div>

                        <p>

                            Lowest EMI and excellent customer support.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="counter-card" data-aos="zoom-in" data-aos-delay="200">

                        <img src="https://randomuser.me/api/portraits/men/61.jpg" class="rounded-circle mb-3" width="90">

                        <h5>Arjun Patel</h5>

                        <div class="text-warning mb-3">

                            ★★★★★

                        </div>

                        <p>

                            Entire documentation handled by Sahara Cars.

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

                    Frequently Asked Questions

                </h2>

            </div>

            <div class="accordion" id="financeFaq">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#one">

                            How quickly will my loan be approved?

                        </button>

                    </h2>

                    <div id="one" class="accordion-collapse collapse show" data-bs-parent="#financeFaq">

                        <div class="accordion-body">

                            Usually within 24–48 hours.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#two">

                            Can I pre-close my loan?

                        </button>

                    </h2>

                    <div id="two" class="accordion-collapse collapse" data-bs-parent="#financeFaq">

                        <div class="accordion-body">

                            Yes, depending on your lender's policy.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#three">

                            Is finance available for used cars?

                        </button>

                    </h2>

                    <div id="three" class="accordion-collapse collapse" data-bs-parent="#financeFaq">

                        <div class="accordion-body">

                            Yes. Finance is available for selected certified pre-owned vehicles.

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

                        Ready to Own Your Dream Car?

                    </h2>

                    <p>

                        Apply today and receive the best finance offer.

                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="#calculator" class="btn btn-main btn-lg">

                        Calculate EMI

                    </a>

                </div>

            </div>

        </div>

    </section>


    <script>

        const loan = document.getElementById("loanAmount");
        const interest = document.getElementById("interest");
        const years = document.getElementById("years");

        function formatINR(x) {

            return "₹" + Number(x).toLocaleString("en-IN");

        }

        function calcEMI() {

            const P = +loan.value;
            const R = (+interest.value) / 12 / 100;
            const N = (+years.value) * 12;

            const emi = (P * R * Math.pow(1 + R, N)) / (Math.pow(1 + R, N) - 1);

            const total = emi * N;
            const totalInterest = total - P;

            loanValue.innerHTML = formatINR(P);
            interestValue.innerHTML = interest.value + "%";
            yearValue.innerHTML = years.value + " Years";

            emi.innerHTML = formatINR(Math.round(emi));

            principal.innerHTML = formatINR(P);

            interestAmount.innerHTML = formatINR(Math.round(totalInterest));

            totalPayment.innerHTML = formatINR(Math.round(total));

        }

        loan.oninput = calcEMI;
        interest.oninput = calcEMI;
        years.oninput = calcEMI;

        calcEMI();

        document.querySelectorAll(".counter[data-target]").forEach(counter => {

            const update = () => {

                const target = +counter.dataset.target;

                const current = +counter.innerText;

                const inc = target / 80;

                if (current < target) {

                    counter.innerText = Math.ceil(current + inc);

                    requestAnimationFrame(update);

                } else {

                    counter.innerText = target + "+";

                }

            };

            update();

        });
    </script>
@endsection