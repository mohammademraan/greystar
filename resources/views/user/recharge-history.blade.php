@extends('user.layout.app-master')
@section('title', 'Recharge History - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Recharge History</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">Recharge History</li>
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
                    <div class="card shadow-sm border-0" style="border-radius: 24px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08); overflow: hidden;">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 pb-3 border-bottom">
                                <div>
                                    <h2 class="h4 mb-1" style="font-family: var(--font-heading); font-weight: 800; color: #0A2245;">Recent Deposits</h2>
                                    <small class="text-muted">Account: {{ Auth::user()->name }}</small>
                                </div>
                                <a href="{{ url('/recharge') }}" class="btn btn-primary" style="border-radius: 9999px; font-weight: 700; padding: 10px 24px;">
                                    <i class="fa fa-plus me-1"></i> Add Funds
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead style="background: #F8FAFC;">
                                        <tr>
                                            <th class="py-3 px-4" style="font-family: var(--font-heading); color: #0A2245; font-size: 13px; text-transform: uppercase;">#</th>
                                            <th class="py-3 px-4" style="font-family: var(--font-heading); color: #0A2245; font-size: 13px; text-transform: uppercase;">Date</th>
                                            <th class="py-3 px-4 text-end" style="font-family: var(--font-heading); color: #0A2245; font-size: 13px; text-transform: uppercase;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($rechargeHistory as $index => $recharge)
                                            <tr>
                                                <td class="py-3 px-4 text-muted">{{ $index + 1 }}</td>
                                                <td class="py-3 px-4 fw-semibold" style="color: #0A2245;">{{ $recharge->created_at->format('Y-m-d H:i') }}</td>
                                                <td class="py-3 px-4 text-end fw-bold" style="color: #0077D4; font-size: 16px;">${{ number_format($recharge->amount, 2) }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center py-5 text-muted">
                                                    <i class="fa fa-receipt fa-3x mb-3 text-muted d-block opacity-50"></i>
                                                    No deposit history found.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
