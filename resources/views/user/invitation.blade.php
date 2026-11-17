@extends('user.layout.app-master')
@section('title', 'Invitation - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Invitation</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Invitation</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 text-center" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                        <div class="card-body p-4 p-md-5">
                            <span class="badge px-3 py-2 rounded-pill mb-3" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">EXCLUSIVE INVITATION</span>
                            <h2 class="h3 fw-bold mb-3" style="font-family: var(--font-heading); color: #0A2245;">Invite &amp; Earn Together</h2>
                            <p class="text-muted small mb-4">Share your personal Greystar invitation code with friends and colleagues to earn commission bonuses.</p>

                            <div class="invitation-image mb-4">
                                <img src="{{ asset('images/download (3).png') }}" alt="Invitation QR" class="img-fluid" style="max-width: 180px; border-radius: 16px;">
                            </div>

                            <div class="p-3 rounded-4 mb-4" style="background: #F8FAFC; border: 1px dashed rgba(10, 34, 69, 0.2);">
                                <small class="text-muted text-uppercase fw-bold d-block mb-1" style="letter-spacing: 0.05em; font-size: 11px;">Your Referral Code</small>
                                <span id="invitation-code" class="display-6 fw-bold" style="font-family: var(--font-heading); color: #0077D4; letter-spacing: 0.1em;">{{ $invitationCode }}</span>
                            </div>

                            <button class="btn btn-primary w-100 py-3" onclick="copyCode()" style="border-radius: 9999px; font-family: var(--font-heading); font-weight: 700; font-size: 16px;">
                                <i class="fa fa-copy me-2"></i>Copy Invitation Code
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function copyCode() {
        const code = document.getElementById('invitation-code');
        const text = code.innerText.trim();
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(() => {
                alert('Invitation code copied to clipboard!');
            });
        } else {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert('Invitation code copied to clipboard!');
        }
    }
</script>

@endsection
