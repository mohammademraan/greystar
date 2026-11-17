@extends('user.layout.app-master')
@section('title', 'Recharge - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Add Funds</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Recharge</li>
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
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-3 border-bottom">
                                            <div>
                                                <h4 class="mb-1" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245;">Account Balance</h4>
                                                <small class="text-muted">{{ Auth::user()->name }}</small>
                                            </div>
                                            <div class="text-md-end">
                                                <div class="h3 mb-0" style="font-family: var(--font-heading); font-weight: 800; color: #0077D4;">${{ number_format($totalBalance, 2) }}</div>
                                                <small class="text-muted">Available Funds</small>
                                            </div>
                                        </div>

                                        <h5 class="mb-3" style="font-family: var(--font-heading); font-weight: 700; color: #0A2245;">Select Preset Amount ($)</h5>
                                        <div class="d-flex justify-content-between flex-wrap gap-2 mb-4">
                                            <button type="button" class="btn btn-outline-primary amount-preset-btn" onclick="setAmount(50)">$50</button>
                                            <button type="button" class="btn btn-outline-primary amount-preset-btn" onclick="setAmount(100)">$100</button>
                                            <button type="button" class="btn btn-outline-primary amount-preset-btn" onclick="setAmount(200)">$200</button>
                                            <button type="button" class="btn btn-outline-primary amount-preset-btn" onclick="setAmount(1000)">$1,000</button>
                                            <button type="button" class="btn btn-outline-primary amount-preset-btn" onclick="setAmount(3000)">$3,000</button>
                                            <button type="button" class="btn btn-outline-primary amount-preset-btn" onclick="setAmount(5000)">$5,000</button>
                                        </div>

                                        <h5 class="mb-2" style="font-family: var(--font-heading); font-weight: 700; color: #0A2245;">Selected Amount</h5>
                                        <div class="mb-4">
                                            <input type="text" id="amount" class="form-control form-control-lg" placeholder="Select or enter amount" style="border-radius: 12px; font-weight: 700; color: #0A2245; background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.15);" readonly>
                                        </div>

                                        <form>
                                            <input type="hidden" name="amount" id="inputAmount">
                                            <a href="{{ url('/support') }}" class="btn btn-primary w-100 py-3" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">
                                                Contact Support to Add Funds <i class="fa fa-arrow-right ms-2"></i>
                                            </a>
                                        </form>
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
        document.getElementById("amount").value = value;
        document.getElementById("inputAmount").value = value;
    }
</script>


@endsection