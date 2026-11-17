@extends('user.layout.app-master')
@section('title', 'Redemption - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Redemption</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Redemption</li>
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
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card shadow-sm border-0" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                                    <div class="card-body p-4 p-md-5">

                                        @if (session('error'))
                                            <div class="alert alert-danger" style="border-radius: 12px;">{{ session('error') }}</div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success" style="border-radius: 12px;">{{ session('success') }}</div>
                                        @endif

                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom">
                                            <div>
                                                <h4 class="mb-1" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245;">Redeem Balance</h4>
                                                <small class="text-muted">Account: {{ Auth::user()->name }}</small>
                                            </div>
                                            <div class="text-md-end">
                                                <div class="h3 mb-0" style="font-family: var(--font-heading); font-weight: 800; color: #0077D4;">${{ number_format($adjustedTotalFunds, 2) }}</div>
                                                <small class="text-muted">Available to Redeem</small>
                                            </div>
                                        </div>

                                        <form action="{{ route('redeem') }}" method="POST">
                                            @csrf

                                            <h5 class="mb-3" style="font-family: var(--font-heading); font-weight: 700; color: #0A2245;">Select Preset Amount ($)</h5>
                                            <div class="d-flex justify-content-between flex-wrap gap-2 mb-4">
                                                <button class="btn btn-outline-primary" type="button" onclick="setAmount(100)" style="border-radius: 9999px; font-weight: 700; padding: 8px 18px;">$100</button>
                                                <button class="btn btn-outline-primary" type="button" onclick="setAmount(150)" style="border-radius: 9999px; font-weight: 700; padding: 8px 18px;">$150</button>
                                                <button class="btn btn-outline-primary" type="button" onclick="setAmount(200)" style="border-radius: 9999px; font-weight: 700; padding: 8px 18px;">$200</button>
                                                <button class="btn btn-outline-primary" type="button" onclick="setAmount(1000)" style="border-radius: 9999px; font-weight: 700; padding: 8px 18px;">$1,000</button>
                                                <button class="btn btn-outline-primary" type="button" onclick="setAmount(1500)" style="border-radius: 9999px; font-weight: 700; padding: 8px 18px;">$1,500</button>
                                                <button class="btn btn-outline-primary" type="button" onclick="setAmount(2000)" style="border-radius: 9999px; font-weight: 700; padding: 8px 18px;">$2,000</button>
                                            </div>

                                            <h5 class="mb-2" style="font-family: var(--font-heading); font-weight: 700; color: #0A2245;">Custom Amount</h5>
                                            <div class="row g-2 mb-4">
                                                <div class="col-8 col-sm-9">
                                                    <input type="text" id="otherAmount" name="amount" class="form-control form-control-lg" placeholder="Enter amount to redeem" style="border-radius: 12px; font-weight: 700; color: #0A2245; border: 1px solid rgba(10, 34, 69, 0.15);">
                                                </div>
                                                <div class="col-4 col-sm-3">
                                                    <button type="button" class="btn btn-outline-secondary w-100 h-100 fw-bold" onclick="setAmount({{ json_encode($adjustedTotalFunds) }})" style="border-radius: 12px;">All Max</button>
                                                </div>
                                            </div>

                                            <h5 class="mb-2" style="font-family: var(--font-heading); font-weight: 700; color: #0A2245;">Redemption Password</h5>
                                            <div class="mb-4">
                                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your wallet password" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                            </div>

                                            <button class="btn btn-primary w-100 py-3" type="submit" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">
                                                Submit Redemption Request <i class="fa fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>

                                        <div class="alert alert-light mt-4 mb-0 text-center" style="border-radius: 12px; background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.08); font-size: 13px; color: #64748B;">
                                            <i class="fa fa-shield-alt text-primary me-1"></i> Redemptions are safely audited and typically processed to your bound wallet within an hour.
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- /.contact-form -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function setAmount(value) {
        document.getElementById("otherAmount").value = value;
    }
</script>

@endsection