@extends('user.layout.app-master')
@section('title', 'Support - Greystar')
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
                            <li class="active">Support</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @if (session('blc_message'))
                        <div class="alert alert-info" style="border-radius: 12px;">{{ session('blc_message') }}</div>
                    @endif
                    <div class="card shadow-sm border-0" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                        <div class="card-body p-4 p-md-5 text-center">
                            <span class="badge px-3 py-2 rounded-pill mb-3" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">24/7 CUSTOMER CONCIERGE</span>
                            <h2 class="h3 fw-bold mb-3" style="font-family: var(--font-heading); color: #0A2245;">We're Here to Help You</h2>
                            <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                                Experience world-class customer service with Greystar. Whether you need support with lot allocation, account verification, wallet management, or community inquiries, our specialized support concierges are standing by to assist you.
                            </p>

                            <div class="row g-3 mb-4 text-start">
                                <div class="col-md-4">
                                    <div class="p-3 rounded-4" style="background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.06);">
                                        <i class="fa fa-clock-o text-primary fa-lg mb-2"></i>
                                        <div class="fw-bold" style="color: #0A2245; font-size: 14px;">Hours</div>
                                        <small class="text-muted">11:00 - 23:00 EST</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded-4" style="background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.06);">
                                        <i class="fa fa-bolt text-warning fa-lg mb-2"></i>
                                        <div class="fw-bold" style="color: #0A2245; font-size: 14px;">Response</div>
                                        <small class="text-muted">&lt; 2 Minutes Average</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded-4" style="background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.06);">
                                        <i class="fa fa-shield text-success fa-lg mb-2"></i>
                                        <div class="fw-bold" style="color: #0A2245; font-size: 14px;">Security</div>
                                        <small class="text-muted">Encrypted Direct Chat</small>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary w-100 py-3" onclick="openLiveChat()" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">
                                <i class="fa fa-comments me-2"></i> Launch Live Concierge Chat
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
