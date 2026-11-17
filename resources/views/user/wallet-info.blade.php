@extends('user.layout.app-master')
@section('title', 'Wallet Information - Greystar')
@section('content')

@php
    $hasWallet = !empty($wallet);
    // current values (preserve old input first)
    $valletAddress = old('vallet-address', optional($wallet)->vallet_address);
    $phoneNumber = old('phone-number', optional($wallet)->phone);
    $selectedCurrency = old('currency', optional($wallet)->type);
    $selectedBlockchain = old('blockchain', optional($wallet)->blockchain);
@endphp

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Wallet Information</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Wallet Info</li>
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

                                        {{-- Session messages --}}
                                        @if (session('error'))
                                            <div class="alert alert-danger" style="border-radius: 12px;">{{ session('error') }}</div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success" style="border-radius: 12px;">{{ session('success') }}</div>
                                        @endif

                                        {{-- Validation errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger" style="border-radius: 12px;">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="balance-section mb-4 text-center">
                                            <span class="badge px-3 py-2 rounded-pill mb-2" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">WALLET SETTINGS</span>
                                            <h3 class="fw-bold mb-1" style="font-family: var(--font-heading); color: #0A2245;">{{ Auth::user()->name }}'s Withdrawal Destination</h3>
                                            <p class="text-muted small">Bind your cryptocurrency wallet to securely receive automated withdrawals</p>
                                        </div>

                                        @if($hasWallet)
                                            <div class="alert alert-info d-flex align-items-center gap-2 mb-4" style="border-radius: 12px; background: #EFF6FF; border: 1px solid #BFDBFE; color: #1E40AF;">
                                                <i class="fa fa-lock fa-lg"></i>
                                                <div>Your wallet details are verified and locked for your security. To update your bound address, please contact Concierge Support.</div>
                                            </div>
                                        @endif

                                        {{-- Note: keep the route as-is; if your POST route name differs update the action --}}
                                        <form action="{{ route('wallet-information.save', [], false) }}" method="POST" novalidate>
                                            @csrf

                                            <div class="mb-3">
                                                <label for="vallet-address" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Wallet Address</label>
                                                <input
                                                    type="text"
                                                    id="vallet-address"
                                                    name="vallet-address"
                                                    value="{{ $valletAddress }}"
                                                    placeholder="Enter your public wallet address"
                                                    class="form-control form-control-lg font-monospace"
                                                    style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15); font-size: 14px;"
                                                    @if($hasWallet) disabled aria-disabled="true" @endif
                                                    required
                                                >
                                            </div>

                                            <div class="mb-3">
                                                <label for="phone-number" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Contact Telephone Number</label>
                                                <input
                                                    type="tel"
                                                    id="phone-number"
                                                    name="phone-number"
                                                    value="{{ $phoneNumber }}"
                                                    placeholder="+1 (555) 000-0000"
                                                    class="form-control form-control-lg"
                                                    style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15); font-size: 14px;"
                                                    @if($hasWallet) disabled aria-disabled="true" @endif
                                                    required
                                                >
                                            </div>

                                            <div class="row g-3 mb-4">
                                                <div class="col-md-6">
                                                    <label for="currency" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Receiving Currency</label>
                                                    <select id="currency" name="currency" class="form-select form-select-lg" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15); font-size: 14px;" @if($hasWallet) disabled aria-disabled="true" @endif required>
                                                        <option value="">Choose currency</option>
                                                        <option value="ETH" {{ $selectedCurrency == 'ETH' ? 'selected' : '' }}>ETH (Ethereum)</option>
                                                        <option value="BTC" {{ $selectedCurrency == 'BTC' ? 'selected' : '' }}>BTC (Bitcoin)</option>
                                                        <option value="USDT" {{ $selectedCurrency == 'USDT' ? 'selected' : '' }}>USDT (Tether)</option>
                                                        <option value="USDC" {{ $selectedCurrency == 'USDC' ? 'selected' : '' }}>USDC (USD Coin)</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="blockchain" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Network Protocol</label>
                                                    <select id="blockchain" name="blockchain" class="form-select form-select-lg" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15); font-size: 14px;" @if($hasWallet) disabled aria-disabled="true" @endif required>
                                                        <option value="">Choose network</option>
                                                        <option value="ERC20" {{ $selectedBlockchain == 'ERC20' ? 'selected' : '' }}>ERC20</option>
                                                        <option value="BTC" {{ $selectedBlockchain == 'BTC' ? 'selected' : '' }}>BTC</option>
                                                        <option value="USDC" {{ $selectedBlockchain == 'USDC' ? 'selected' : '' }}>USDC</option>
                                                        <option value="USDT" {{ $selectedBlockchain == 'USDT' ? 'selected' : '' }}>USDT (TRC20 / ERC20)</option>
                                                        <option value="Aptos" {{ $selectedBlockchain == 'Aptos' ? 'selected' : '' }}>Aptos</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary w-100 py-3"
                                                    style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;"
                                                    @if($hasWallet) disabled aria-disabled="true" @endif
                                                >
                                                    {{ $hasWallet ? 'Wallet Information Locked' : 'Save & Bind Wallet' }} <i class="fa fa-shield ms-2"></i>
                                                </button>
                                            </div>
                                        </form>

                                        <p class="small text-muted mt-3 mb-0 text-center"><i class="fa fa-info-circle me-1"></i>Please ensure your network and address correspond correctly to guarantee successful withdrawal delivery.</p>

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

{{-- client-side niceties: basic validation & demo script --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form[action$="wallet-information.save"], form[action$="wallet-information.save/"]') || document.querySelector('form');
        if (!form) return;

        // If fields are disabled (wallet exists), skip client-side validation and prevent submit (button also disabled)
        const firstInput = form.querySelector('#vallet-address');
        if (firstInput && firstInput.disabled) {
            // nothing to do - inputs disabled and button disabled
            return;
        }

        form.addEventListener('submit', function (e) {
            // Simple client-side sanitization/validation (non-blocking server remains authoritative)
            const addr = document.getElementById('vallet-address').value.trim();
            const phone = document.getElementById('phone-number').value.trim();
            const currency = document.getElementById('currency').value;
            const blockchain = document.getElementById('blockchain').value;
            let errors = [];

            if (!addr) errors.push('Wallet address is required.');
            if (!phone) errors.push('Phone number is required.');
            if (!currency) errors.push('Please select a currency.');
            if (!blockchain) errors.push('Please select a blockchain network.');

            if (errors.length) {
                e.preventDefault();
                // show a minimal inline alert (server-side messages still authoritative)
                let alertBox = document.querySelector('#client-side-wallet-errors');
                if (!alertBox) {
                    alertBox = document.createElement('div');
                    alertBox.id = 'client-side-wallet-errors';
                    alertBox.className = 'alert alert-danger';
                    form.parentNode.insertBefore(alertBox, form);
                }
                alertBox.innerHTML = '<ul class="mb-0"><li>' + errors.join('</li><li>') + '</li></ul>';
                window.scrollTo({ top: alertBox.offsetTop - 20, behavior: 'smooth' });
            }
        });
    });
</script>

@endsection
