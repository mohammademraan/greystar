@extends('user.layout.app-master')
@section('title', 'Membership - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Membership Tier Upgrade Structure</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Membership</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="badge px-3 py-2 rounded-pill mb-2" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">MEMBERSHIP BENEFITS</span>
                <h2 style="font-family: var(--font-heading); font-weight: 800; color: #0A2245; font-size: 32px;">Choose Your Membership Level</h2>
                <p class="text-muted" style="font-size: 16px;">Advance your tier to unlock higher daily lot allocations and maximized profit rates across Greystar property portfolios.</p>
            </div>

            <!-- Tier Cards Grid -->
            <div class="row g-4 mb-5">
                <!-- Silver -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm text-center p-4" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); transition: transform 0.2s ease;">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-3 mx-auto" style="width: 64px; height: 64px; border-radius: 50%; background: #F1F5F9; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #64748B;">
                                <i class="fa fa-shield"></i>
                            </div>
                            <h3 class="h4 fw-bold" style="font-family: var(--font-heading); color: #0A2245;">Silver Tier</h3>
                            <span class="badge mb-3 mx-auto" style="background: #F1F5F9; color: #64748B; border-radius: 9999px; padding: 6px 16px; font-weight: 700;">Entry Tier</span>
                            <div class="my-3">
                                <span class="h1 fw-bold" style="font-family: var(--font-heading); color: #0A2245;">0.5%</span>
                                <span class="text-muted">/ per lot</span>
                            </div>
                            <ul class="list-unstyled text-start my-4 flex-grow-1" style="font-size: 14px; line-height: 2;">
                                <li><i class="fa fa-check text-success me-2"></i>Up to <strong>35 lots</strong> daily</li>
                                <li><i class="fa fa-check text-success me-2"></i>Standard profit rate: 0.5%</li>
                                <li><i class="fa fa-check text-success me-2"></i>Standard community access</li>
                                <li><i class="fa fa-check text-success me-2"></i>Email &amp; live support</li>
                            </ul>
                            <button class="btn btn-outline-secondary w-100 py-3" style="border-radius: 9999px; font-weight: 700;" disabled>Current / Entry</button>
                        </div>
                    </div>
                </div>

                <!-- Gold (Featured) -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-2 shadow text-center p-4 position-relative" style="border-radius: 24px; background: #ffffff; border-color: #FFD972 !important; box-shadow: 0 16px 40px rgba(0, 119, 212, 0.12) !important;">
                        <div class="position-absolute top-0 start-50 translate-middle">
                            <span class="badge px-3 py-2 rounded-pill" style="background: #F0B323; color: #0A2245; font-weight: 800; font-size: 12px; letter-spacing: 0.05em;">RECOMMENDED</span>
                        </div>
                        <div class="card-body d-flex flex-column mt-2">
                            <div class="mb-3 mx-auto" style="width: 64px; height: 64px; border-radius: 50%; background: #FFFBEB; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #D97706;">
                                <i class="fa fa-crown"></i>
                            </div>
                            <h3 class="h4 fw-bold" style="font-family: var(--font-heading); color: #0A2245;">Gold Tier</h3>
                            <span class="badge mb-3 mx-auto" style="background: #FEF3C7; color: #92400E; border-radius: 9999px; padding: 6px 16px; font-weight: 700;">Advanced Tier</span>
                            <div class="my-3">
                                <span class="h1 fw-bold" style="font-family: var(--font-heading); color: #0077D4;">0.9%</span>
                                <span class="text-muted">/ per lot</span>
                            </div>
                            <ul class="list-unstyled text-start my-4 flex-grow-1" style="font-size: 14px; line-height: 2;">
                                <li><i class="fa fa-check text-success me-2"></i>Up to <strong>41 lots</strong> daily</li>
                                <li><i class="fa fa-check text-success me-2"></i>Enhanced profit rate: 0.9%</li>
                                <li><i class="fa fa-check text-success me-2"></i>Priority lot queueing</li>
                                <li><i class="fa fa-check text-success me-2"></i>Priority concierge response</li>
                            </ul>
                            <a href="{{ url('/support') }}" class="btn btn-primary w-100 py-3" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 15px;">
                                Upgrade to Gold ($500)
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Platinum -->
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 border-0 shadow-sm text-center p-4" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); transition: transform 0.2s ease;">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-3 mx-auto" style="width: 64px; height: 64px; border-radius: 50%; background: #EFF6FF; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #0077D4;">
                                <i class="fa fa-gem"></i>
                            </div>
                            <h3 class="h4 fw-bold" style="font-family: var(--font-heading); color: #0A2245;">Platinum Tier</h3>
                            <span class="badge mb-3 mx-auto" style="background: #DBEAFE; color: #1E40AF; border-radius: 9999px; padding: 6px 16px; font-weight: 700;">Premium Tier</span>
                            <div class="my-3">
                                <span class="h1 fw-bold" style="font-family: var(--font-heading); color: #0A2245;">1.4%</span>
                                <span class="text-muted">/ per lot</span>
                            </div>
                            <ul class="list-unstyled text-start my-4 flex-grow-1" style="font-size: 14px; line-height: 2;">
                                <li><i class="fa fa-check text-success me-2"></i>Up to <strong>52 lots</strong> daily</li>
                                <li><i class="fa fa-check text-success me-2"></i>Maximum profit rate: 1.4%</li>
                                <li><i class="fa fa-check text-success me-2"></i>VIP residential property access</li>
                                <li><i class="fa fa-check text-success me-2"></i>Dedicated 24/7 personal manager</li>
                            </ul>
                            <a href="{{ url('/support') }}" class="btn btn-outline-primary w-100 py-3" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 15px;">
                                Contact for Platinum
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Table Card -->
            <div class="card border-0 shadow-sm mb-5" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="h4 fw-bold mb-4" style="font-family: var(--font-heading); color: #0A2245;">Tier Comparison Overview</h3>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead style="background: #F8FAFC;">
                                <tr>
                                    <th class="py-3 px-4" style="font-family: var(--font-heading); color: #0A2245;">Membership Level</th>
                                    <th class="py-3 px-4" style="font-family: var(--font-heading); color: #0A2245;">Total Lot Limit</th>
                                    <th class="py-3 px-4" style="font-family: var(--font-heading); color: #0A2245;">Profit Rate on Standard Lots</th>
                                    <th class="py-3 px-4" style="font-family: var(--font-heading); color: #0A2245;">Tier Classification</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3 px-4 fw-bold"><i class="fa fa-circle text-secondary me-2 small"></i>Silver</td>
                                    <td class="py-3 px-4">Up to 35 lots</td>
                                    <td class="py-3 px-4 fw-bold" style="color: #0077D4;">0.5% per lot</td>
                                    <td class="py-3 px-4"><span class="badge" style="background: #F1F5F9; color: #475569;">Entry Tier</span></td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 fw-bold"><i class="fa fa-circle text-warning me-2 small"></i>Gold</td>
                                    <td class="py-3 px-4">Up to 41 lots</td>
                                    <td class="py-3 px-4 fw-bold" style="color: #0077D4;">0.9% per lot</td>
                                    <td class="py-3 px-4"><span class="badge" style="background: #FEF3C7; color: #92400E;">Advanced Tier</span></td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 fw-bold"><i class="fa fa-circle text-primary me-2 small"></i>Platinum</td>
                                    <td class="py-3 px-4">Up to 52 lots</td>
                                    <td class="py-3 px-4 fw-bold" style="color: #0077D4;">1.4% per lot</td>
                                    <td class="py-3 px-4"><span class="badge" style="background: #DBEAFE; color: #1E40AF;">Premium Tier</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
