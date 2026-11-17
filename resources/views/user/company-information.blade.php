@extends('user.layout.app-master')
@section('title', 'Company Information - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Company Information</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Company Information</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Mission Hero Card -->
                    <div class="card border-0 shadow-sm mb-5" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                        <div class="card-body p-4 p-md-5">
                            <span class="badge px-3 py-2 rounded-pill mb-3" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">ABOUT GREYSTAR</span>
                            <h2 class="mb-3" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245; font-size: 32px;">Pioneering Global Real Estate &amp; Community Excellence</h2>
                            <p style="font-size: 16px; line-height: 1.8; color: #475569;">
                                Founded in 1993, Greystar is a fully integrated global real estate company offering expertise in investment management, development, and property management of rental housing. We operate in over 240 global markets across the United States, Europe, South America, and the Asia-Pacific region.
                            </p>
                            <p style="font-size: 16px; line-height: 1.8; color: #475569;">
                                Headquartered in Charleston, South Carolina, with principal offices in New York, London, Tokyo, and Sydney, Greystar manages more than 850,000 residential units and student beds globally. We pride ourselves on creating communities where residents thrive, investors find durable value, and team members build fulfilling careers.
                            </p>
                        </div>
                    </div>

                    <!-- 4 Statistics Counter Grid -->
                    <div class="row g-4 mb-5 text-center">
                        <div class="col-6 col-md-3">
                            <div class="p-4 rounded-4 shadow-sm h-100" style="background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); border-radius: 20px;">
                                <div class="h2 fw-bold mb-1" style="font-family: var(--font-heading); color: #0077D4;">850K+</div>
                                <small class="text-muted text-uppercase fw-bold" style="font-size: 11px; letter-spacing: 0.05em;">Units Managed</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-4 rounded-4 shadow-sm h-100" style="background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); border-radius: 20px;">
                                <div class="h2 fw-bold mb-1" style="font-family: var(--font-heading); color: #0A2245;">$75B+</div>
                                <small class="text-muted text-uppercase fw-bold" style="font-size: 11px; letter-spacing: 0.05em;">Gross AUM</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-4 rounded-4 shadow-sm h-100" style="background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); border-radius: 20px;">
                                <div class="h2 fw-bold mb-1" style="font-family: var(--font-heading); color: #0077D4;">240+</div>
                                <small class="text-muted text-uppercase fw-bold" style="font-size: 11px; letter-spacing: 0.05em;">Global Markets</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-4 rounded-4 shadow-sm h-100" style="background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); border-radius: 20px;">
                                <div class="h2 fw-bold mb-1" style="font-family: var(--font-heading); color: #0A2245;">30+</div>
                                <small class="text-muted text-uppercase fw-bold" style="font-size: 11px; letter-spacing: 0.05em;">Years of Leadership</small>
                            </div>
                        </div>
                    </div>

                    <!-- Core Pillars Card Grid -->
                    <div class="card border-0 shadow-sm mb-4" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08);">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="h4 fw-bold mb-4" style="font-family: var(--font-heading); color: #0A2245;">Our Pillars of Excellence</h3>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div style="width: 44px; height: 44px; border-radius: 12px; background: #EFF6FF; color: #0077D4; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                                            <i class="fa fa-handshake"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="font-family: var(--font-heading); color: #0A2245; font-size: 16px;">Integrity</h5>
                                            <p class="text-muted small mb-0">We conduct business with uncompromising honesty, ethics, and transparency in every transaction.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div style="width: 44px; height: 44px; border-radius: 12px; background: #FFFBEB; color: #D97706; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                                            <i class="fa fa-award"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="font-family: var(--font-heading); color: #0A2245; font-size: 16px;">Excellence</h5>
                                            <p class="text-muted small mb-0">Setting industry-defining benchmarks in modern apartment living, resident care, and asset operations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div style="width: 44px; height: 44px; border-radius: 12px; background: #F0FDF4; color: #15803D; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="font-family: var(--font-heading); color: #0A2245; font-size: 16px;">Community</h5>
                                            <p class="text-muted small mb-0">Fostering welcoming neighborhoods where individuals, families, and neighbors genuinely thrive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
