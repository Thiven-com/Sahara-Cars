<?php $page = 'index'; ?>
@extends('layout.mainlayout')

@section('content')

<style>
:root{
    --primary:#4B5563;
    --secondary:#9CA3AF;
    --dark:#111827;
    --white:#FFFFFF;
    --light:#F8FAFC;
    --text:#6B7280;
    --border:#E5E7EB;
}

.page-wrapper{
    min-height:100vh;
    background:linear-gradient(135deg,#1E293B 0%,#4B5563 45%,#9CA3AF 100%);
}

.content{
    padding:30px;
}

/* ===============================
   HEADER
==================================*/

.dashboard-header{
    position:relative;
    overflow:hidden;
    border-radius:24px;
    padding:45px;
    margin-bottom:35px;

    background:rgba(255,255,255,.12);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);

    border:1px solid rgba(255,255,255,.18);

    box-shadow:0 25px 60px rgba(0,0,0,.25);
}

.dashboard-header::before{
    content:"";
    position:absolute;
    width:260px;
    height:260px;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    top:-120px;
    right:-90px;
}

.dashboard-header::after{
    content:"";
    position:absolute;
    width:180px;
    height:180px;
    border-radius:50%;
    background:rgba(255,255,255,.06);
    left:-60px;
    bottom:-60px;
}

.dashboard-header h2{
    color:#fff;
    font-size:34px;
    font-weight:700;
    margin-bottom:10px;
    position:relative;
    z-index:2;
}

.dashboard-header p{
    color:rgba(255,255,255,.85);
    margin:0;
    position:relative;
    z-index:2;
}

/* ===============================
   CARD
==================================*/

.dashboard-card{
    background:#fff;
    border-radius:22px;
    padding:28px;
    position:relative;
    overflow:hidden;

    transition:.35s;

    box-shadow:0 12px 35px rgba(0,0,0,.08);
}

.dashboard-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 45px rgba(0,0,0,.15);
}

.dashboard-card::before{
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:6px;
    height:100%;
    background:linear-gradient(#4B5563,#9CA3AF);
}

.dashboard-icon{
    width:72px;
    height:72px;
    border-radius:20px;

    background:linear-gradient(135deg,#4B5563,#9CA3AF);

    display:flex;
    justify-content:center;
    align-items:center;

    color:#fff;
    font-size:30px;

    box-shadow:0 12px 30px rgba(75,85,99,.30);
}

.dashboard-title{
    font-size:14px;
    color:#6B7280;
    margin-bottom:8px;
}

.dashboard-count{
    font-size:38px;
    font-weight:700;
    color:#111827;
    margin-bottom:10px;
}

.dashboard-growth{
    display:inline-block;
    padding:6px 15px;

    border-radius:30px;

    background:#EEF2F7;
    color:#374151;

    font-size:13px;
    font-weight:600;
}

/* ===============================
   FOOTER
==================================*/

.copyright-footer{

    margin-top:35px;

    background:rgba(255,255,255,.92);

    backdrop-filter:blur(10px);

    border-radius:18px;

    padding:22px;

    text-align:center;

    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.copyright-footer p{
    margin-bottom:6px;
    font-weight:600;
}

.copyright-footer small{
    color:#666;
}

/* ===============================
   RESPONSIVE
==================================*/

@media(max-width:768px){

    .content{
        padding:20px;
    }

    .dashboard-header{
        padding:30px;
    }

    .dashboard-header h2{
        font-size:28px;
    }

}
</style>

<div class="page-wrapper">

    <div class="content">

        <div class="dashboard-header">

            <h2>Welcome Back 👋</h2>

            <p>
                Sahara Cars Admin Dashboard
            </p>

        </div>

        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="dashboard-title">
                                Total Enquiries
                            </div>

                            <div class="dashboard-count">
                                {{ number_format($data['enquiries']) }}
                            </div>

                            <span class="dashboard-growth">
                                Active
                            </span>

                        </div>

                        <div class="dashboard-icon">
                            <i class="ti ti-users"></i>
                        </div>

                    </div>

                </div>

            </div>

            {{-- Add more cards below using the same design --}}

        </div>

        <div class="copyright-footer">

            <p>
                © {{ date('Y') }} Sahara Cars. All Rights Reserved.
            </p>

            <small>
                Designed & Developed By ThiVen
            </small>

        </div>

    </div>

</div>

@endsection