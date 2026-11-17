@extends('user.layout.app-master')
@section('title', 'Security Center - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Security Center</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Security</li>
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
                    @if (session('pass_status'))
                        <div class="alert alert-info" style="border-radius: 12px;">{{ session('pass_status') }}</div>
                    @endif

                    <div class="card shadow-sm border-0" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                        <div class="card-body p-4 p-md-5">
                            <div class="mb-4 text-center">
                                <span class="badge px-3 py-2 rounded-pill mb-2" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">SECURITY CENTER</span>
                                <h2 class="h3 fw-bold" style="font-family: var(--font-heading); color: #0A2245;">Manage Passwords</h2>
                                <p class="text-muted small">Update your Greystar account and withdrawal credentials to ensure maximum protection.</p>
                            </div>

                            <div class="d-flex justify-content-center gap-2 mb-4 p-1 bg-light rounded-pill" style="max-width: 380px; margin: 0 auto;">
                                <button class="tab-button btn btn-primary flex-fill active" onclick="openTab('login', event)" style="border-radius: 9999px; font-weight: 700; font-size: 14px;">Login Password</button>
                                <button class="tab-button btn btn-light flex-fill" onclick="openTab('wallet', event)" style="border-radius: 9999px; font-weight: 700; font-size: 14px; color: #64748B;">Wallet Password</button>
                            </div>

                            <div id="login" class="tab-content active">
                                <form method="POST" action="{{ route('change.login.password') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="current-password-login" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Current Login Password</label>
                                        <input type="password" id="current-password-login" name="current_password" class="form-control form-control-lg" placeholder="••••••••" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="new-password-login" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">New Login Password</label>
                                        <input type="password" id="new-password-login" name="new_password" class="form-control form-control-lg" placeholder="••••••••" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="reenter-password-login" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Confirm New Password</label>
                                        <input type="password" id="reenter-password-login" name="new_password_confirmation" class="form-control form-control-lg" placeholder="••••••••" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                    </div>

                                    <div class="submit-section">
                                        <button class="btn btn-primary w-100 py-3" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">Update Login Password</button>
                                    </div>
                                </form>
                            </div>

                            <div id="wallet" class="tab-content" style="display:none;">
                                <form method="POST" action="{{ route('change.wallet.password') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="current-password-wallet" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Current Wallet Password</label>
                                        <input type="password" id="current-password-wallet" name="current_wallet_password" class="form-control form-control-lg" placeholder="••••••••" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="new-password-wallet" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">New Wallet Password</label>
                                        <input type="password" id="new-password-wallet" name="new_wallet_password" class="form-control form-control-lg" placeholder="••••••••" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="reenter-password-wallet" class="form-label fw-bold" style="font-family: var(--font-heading); color: #0A2245; font-size: 14px;">Confirm Wallet Password</label>
                                        <input type="password" id="reenter-password-wallet" name="new_wallet_password_confirmation" class="form-control form-control-lg" placeholder="••••••••" style="border-radius: 12px; border: 1px solid rgba(10, 34, 69, 0.15);" required>
                                    </div>

                                    <div class="submit-section">
                                        <button class="btn btn-primary w-100 py-3" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">Update Wallet Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function openTab(tabName, evt) {
        const contents = document.getElementsByClassName('tab-content');
        for (let i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
            contents[i].classList.remove('active');
        }
        const buttons = document.getElementsByClassName('tab-button');
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active');
        }
        document.getElementById(tabName).style.display = 'block';
        document.getElementById(tabName).classList.add('active');
        if (evt && evt.currentTarget) evt.currentTarget.classList.add('active');
    }
    // default visible
    document.getElementById('login').style.display = 'block';
</script>

@endsection
