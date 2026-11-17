@extends('user.layout.app-master')
@section('title', 'Profile - Greystar')
@section('content')
    <div class="page-bottom pbottom-70 mt-5 pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Summary Card (Hero) -->
                    <div class="card border-0 mb-4 shadow-sm" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08);">
                        <div class="card-body p-4">
                            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-3">
                                <div class="me-md-3">
                                    <div style="width: 72px; height: 72px; border-radius: 50%; background: linear-gradient(135deg, #0A2245 0%, #0077D4 100%); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: 800; box-shadow: 0 4px 14px rgba(0, 119, 212, 0.3);">
                                        {{ strtoupper(substr($userData['user']->username ?? 'U', 0, 1)) }}
                                    </div>
                                </div>
                                <div class="flex-grow-1 w-100">
                                    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between w-100 gap-3">
                                        <div>
                                            <h2 class="h4 mb-1" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245;">{{ $userData['user']->username }}</h2>
                                            <span class="badge" style="background: #FFF7ED; color: #C2410C; border: 1px solid #FFEDD5; border-radius: 9999px; padding: 6px 14px; font-weight: 700;">
                                                <i class="fa fa-gem me-1"></i>{{ $userData['membership_level']->level_name }}
                                            </span>
                                        </div>
                                        <div class="d-flex gap-2 flex-wrap">
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inviteModal" style="border-radius: 9999px; padding: 10px 20px; font-weight: 700;">
                                                <i class="fa fa-qrcode me-2"></i>Invitation Code
                                            </button>
                                            <a href="{{ url('user.logout') }}" class="btn btn-outline-danger" style="border-radius: 9999px; padding: 10px 20px; font-weight: 700;">
                                                <i class="fa fa-sign-out me-2"></i>Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08);">
                                <div class="card-body d-flex align-items-center p-4">
                                    <div class="me-3" style="width: 56px; height: 56px; border-radius: 16px; background: #F0FDF4; color: #15803D; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                        <i class="fa fa-wallet"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small text-uppercase fw-bold mb-1" style="letter-spacing: 0.05em;">Account Balance</div>
                                        <div class="h3 mb-0" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245;">${{ number_format($userData['total_funds'], 2) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08);">
                                <div class="card-body d-flex align-items-center p-4">
                                    <div class="me-3" style="width: 56px; height: 56px; border-radius: 16px; background: #EFF6FF; color: #0077D4; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small text-uppercase fw-bold mb-1" style="letter-spacing: 0.05em;">Today's Earnings</div>
                                        <div class="h3 mb-0" style="font-family: var(--font-heading); font-weight: 800; color: #0077D4;">${{ number_format($userData['today_commission'], 2) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Credibility Progress -->
                    <div class="card border-0 mb-4 shadow-sm" style="border-radius: 20px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08);">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-family: var(--font-heading); color: #0A2245;">Account Credibility Score</span>
                                <span class="fw-bold" style="color: #0077D4;">{{ $userData['user']->credibility }}%</span>
                            </div>
                            <div class="progress" style="height: 10px; border-radius: 9999px; background: #F1F5F9;">
                                <div class="progress-bar" role="progressbar" style="width: {{ $userData['user']->credibility }}%; border-radius: 9999px; background: linear-gradient(90deg, #0077D4 0%, #FFD972 100%);" aria-valuenow="{{ $userData['user']->credibility }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Access (icon grid like Home) -->
                    <div class="card border-0 mb-4 shadow-sm" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08);">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="mb-0" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245;">
                                    <i class="fa fa-th-large me-2 text-primary"></i>Quick Access
                                </h5>
                            </div>
                            <div class="row g-3 text-center">
                                @php
                                    $apps = [
                                        ['url' => url('profile'), 'label' => 'Profile'],
                                        ['url' => url('data-optimization'), 'label' => 'Lots Optimization'],
                                        ['url' => url('history'), 'label' => 'History'],
                                        ['url' => url('recharge'), 'label' => 'Bind Wallet'],
                                        ['url' => url('recharge-history'), 'label' => 'Recharge History'],
                                        ['url' => url('redemption'), 'label' => 'Redemption'],
                                        ['url' => url('redemption-history'), 'label' => 'Redemption History'],
                                        ['url' => url('support'), 'label' => 'Support'],
                                    ];
                                @endphp
                                @foreach ($apps as $index => $app)
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <a href="{{ $app['url'] }}" class="d-block text-decoration-none text-dark">
                                            <div class="p-3 border rounded-4 h-100 transition-hover" style="background: #F8FAFC; border: 1px solid rgba(10, 34, 69, 0.08) !important; transition: all 0.2s ease;">
                                                <div class="mb-2">
                                                    <img src="assets/images/icons/apps/{{ $index + 1 }}.png" class="img-fluid" alt="{{ $app['label'] }}" style="max-height:48px">
                                                </div>
                                                <small class="d-block fw-bold" style="font-family: var(--font-heading); color: #0A2245;">{{ $app['label'] }}</small>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Logout Button -->
                    <div class="row justify-content-center">
                        <div class="col-11 col-md-10 col-lg-9 text-center">
                            <a class="btn btn-outline-danger w-100 py-3" href="{{ url('user.logout') }}" style="border-radius: 9999px; font-weight: 700; font-size: 16px;">
                                <i class="fa fa-sign-out me-2"></i>Sign Out of Greystar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Invitation Modal (Bootstrap) -->
<div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="inviteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 24px; border: none; box-shadow: 0 20px 60px rgba(10, 34, 69, 0.2);">
      <div class="modal-header border-0 pb-0 px-4 pt-4">
        <h5 class="modal-title fw-bold" id="inviteModalLabel" style="font-family: var(--font-heading); color: #0A2245;">Your Invitation Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-4">
        <img src="{{ asset('images/scan.png') }}" alt="QR Code" class="img-fluid mb-3" style="max-width: 180px; border-radius: 12px;">
        <h6 class="text-muted small text-uppercase fw-bold mb-1">Invitation Code</h6>
        <p id="modal-invite-code" class="fw-bold fs-4 mb-3" style="font-family: var(--font-heading); color: #0077D4;">{{ $userData['user']->reference_code }}</p>
        <button class="btn btn-primary w-100 py-3" id="copyInviteBtn" style="border-radius: 9999px; font-weight: 700;">
            <i class="fa fa-copy me-2"></i>Copy Invitation Code
        </button>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var copyBtn = document.getElementById('copyInviteBtn');
        if (copyBtn) {
            copyBtn.addEventListener('click', function () {
                var text = document.getElementById('modal-invite-code').textContent.trim();
                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(text).then(function(){
                        alert('Invitation code copied to clipboard!');
                    });
                } else {
                    var tempInput = document.createElement('input');
                    tempInput.value = text;
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    tempInput.setSelectionRange(0, 99999);
                    document.execCommand('copy');
                    document.body.removeChild(tempInput);
                    alert('Invitation code copied to clipboard!');
                }
            });
        }
    });
</script>

@endsection
