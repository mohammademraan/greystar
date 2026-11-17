@extends('user.layout.app-master')
@section('title', 'Get In Touch - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Get In Touch</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Get In Touch</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card shadow-sm border-0 text-center" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                        <div class="card-body p-4 p-md-5">
                            <img src="{{ asset('images/service-banner.png') }}" alt="Live Chat Icon" class="img-fluid mb-4" style="max-width: 220px; border-radius: 16px;">
                            <span class="badge px-3 py-2 rounded-pill mb-2" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">DIRECT CONCIERGE</span>
                            <h2 class="h3 fw-bold mb-2" style="font-family: var(--font-heading); color: #0A2245;">Contact Us via Live Chat</h2>
                            <p class="text-muted mb-4">Have an inquiry regarding lots, rewards, or account security? Our concierge team is active and ready to support you.</p>

                            <div class="d-inline-flex align-items-center gap-2 px-4 py-2 rounded-pill mb-4" style="background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.08);">
                                <i class="fa fa-clock-o text-primary"></i>
                                <span class="small fw-semibold" style="color: #0A2245;">Consultant Hours: 10:00 - 22:00 EST</span>
                            </div>

                            <div>
                                <button class="btn btn-primary px-5 py-3" onclick="openLiveChat()" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">
                                    Connect with Greystar Support <i class="fa fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
