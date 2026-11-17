@php
    $image = $image ?? asset('assets/images/photos/services/7.jpg');
    $title = $title ?? 'Order Title';
    $date = $date ?? now()->format('Y-m-d');
    $price = isset($price) ? number_format($price, 2) : '0.00';
    $commission = isset($commission) ? number_format($commission, 2) : '0.00';
    $status = $status ?? 'Info';
    $statusClass = [
        'Completed' => 'badge-success',
        'Pending' => 'badge-warning',
        'Hold' => 'badge-secondary',
        'On Hold' => 'badge-secondary',
        'Incomplete' => 'badge-danger',
    ][$status] ?? 'badge-info';
@endphp

<div class="card bg-transparent border-0 history-card">
    <div class="card-body p-0">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
            <div class="history-thumb mr-md-3 mb-3 mb-md-0">
                <img src="{{ $image }}" alt="Order Image" class="img-fluid rounded">
            </div>
            <div class="flex-grow-1 w-100">
                <div class="d-flex justify-content-between align-items-start align-items-md-center mb-2">
                    <h5 class="mb-1 text-white">{{ $title }}</h5>
                    <span class="badge {{ $statusClass }} ml-2">{{ $status }}</span>
                </div>
                <div class="text-muted mb-3"><i class="fa fa-calendar mr-2"></i>{{ $date }}</div>
                <div class="d-flex gap-4 history-stats">
                    <div class="d-flex align-items-center mr-4">
                        <img src="{{ asset('images/goods-2.png') }}" alt="Total" width="28" class="mr-2">
                        <div>
                            <div class="text-white font-weight-bold">{{ $price }}</div>
                            <small class="text-muted">Total Value (VIEWS)</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/goods-3.png') }}" alt="Profit" width="28" class="mr-2">
                        <div>
                            <div class="text-white font-weight-bold">{{ $commission }}</div>
                            <small class="text-muted">Profit (VIEWS)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
