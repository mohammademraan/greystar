<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records - Greystar</title>
    <!-- Google Fonts: Manrope & Newsreader -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;1,6..72,400&display=swap" rel="stylesheet">
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Greystar Design System -->
    <link rel="stylesheet" href="{{ asset('css/greystar-design-system.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-heading), -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: #F8FAFC;
            color: var(--color-ink, #0A2245);
            padding-bottom: 90px;
            min-height: 100vh;
        }

        /* Top Header */
        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(10, 34, 69, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #F1F5F9;
            color: #0A2245;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .back-btn:hover {
            background: #0077D4;
            color: #ffffff;
        }

        .header-top .logo img {
            height: 28px;
            width: auto;
            display: block;
        }

        .user-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #0A2245 0%, #0077D4 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.2s ease;
        }

        .user-icon:hover {
            transform: scale(1.05);
            color: white;
        }

        /* Container */
        .records-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 24px 16px;
        }

        .page-title-row {
            margin-bottom: 20px;
        }

        .page-title-row h1 {
            font-family: var(--font-heading);
            font-size: 26px;
            font-weight: 800;
            color: #0A2245;
            letter-spacing: -0.02em;
        }

        .page-title-row p {
            color: #64748B;
            font-size: 14px;
            margin-top: 4px;
        }

        /* Tabs */
        .tabs-container {
            background: #ffffff;
            border-radius: 16px;
            padding: 6px;
            display: flex;
            gap: 6px;
            box-shadow: 0 4px 16px rgba(10, 34, 69, 0.04);
            border: 1px solid rgba(10, 34, 69, 0.08);
            margin-bottom: 24px;
            overflow-x: auto;
        }

        .tab-button {
            flex: 1;
            min-width: 90px;
            padding: 10px 16px;
            border: none;
            background: transparent;
            cursor: pointer;
            color: #64748B;
            font-family: var(--font-heading);
            font-size: 14px;
            font-weight: 700;
            border-radius: 12px;
            transition: all 0.25s ease;
            white-space: nowrap;
            text-align: center;
        }

        .tab-button.active {
            background: #0077D4;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 119, 212, 0.25);
        }

        .tab-button:hover:not(.active) {
            background: #F1F5F9;
            color: #0A2245;
        }

        /* Content Area */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Timestamp */
        .order-timestamp {
            font-size: 13px;
            font-weight: 600;
            color: #64748B;
            margin: 0 4px 8px 4px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Order Card */
        .order-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 8px 24px rgba(10, 34, 69, 0.05);
            border: 1px solid rgba(10, 34, 69, 0.08);
            display: flex;
            gap: 20px;
            align-items: flex-start;
            position: relative;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .order-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 34px rgba(10, 34, 69, 0.09);
        }

        .order-image {
            width: 88px;
            height: 88px;
            border-radius: 14px;
            overflow: hidden;
            background: #F1F5F9;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 1px solid rgba(10, 34, 69, 0.06);
        }

        .order-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .order-content {
            flex: 1;
            min-width: 0;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 14px;
        }

        .order-title {
            font-family: var(--font-heading);
            font-size: 16px;
            font-weight: 800;
            color: #0A2245;
            margin-bottom: 4px;
            line-height: 1.35;
        }

        .order-amount {
            font-size: 14px;
            font-weight: 600;
            color: #0077D4;
        }

        .order-rating {
            display: inline-flex;
            gap: 2px;
            margin-top: 4px;
        }

        .order-rating i {
            color: #F0B323;
            font-size: 12px;
        }

        /* Status Badge */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 5px 12px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status-badge.pending {
            background: #FFF7ED;
            color: #C2410C;
            border: 1px solid #FFEDD5;
        }

        .status-badge.completed {
            background: #F0FDF4;
            color: #15803D;
            border: 1px solid #DCFCE7;
        }

        .status-badge.undone {
            background: #F8FAFC;
            color: #64748B;
            border: 1px solid #E2E8F0;
        }

        /* Order Stats Grid */
        .order-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            background: #F8FAFC;
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 14px;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-label {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748B;
            margin-bottom: 2px;
        }

        .stat-value {
            font-size: 15px;
            font-weight: 800;
            color: #0A2245;
        }

        .stat-value.accent {
            color: #0077D4;
        }

        /* Submit Button */
        .submit-btn-gs {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 12px 24px;
            background: linear-gradient(135deg, #0077D4 0%, #005699 100%);
            color: #ffffff;
            font-family: var(--font-heading);
            font-size: 15px;
            font-weight: 700;
            border: none;
            border-radius: 9999px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(0, 119, 212, 0.3);
            transition: all 0.25s ease;
        }

        .submit-btn-gs:hover {
            background: linear-gradient(135deg, #005699 0%, #003e70 100%);
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(0, 119, 212, 0.4);
            color: #ffffff;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: #ffffff;
            border-radius: 20px;
            border: 1px dashed rgba(10, 34, 69, 0.15);
        }

        .empty-state-icon {
            font-size: 40px;
            color: #94A3B8;
            margin-bottom: 12px;
        }

        .empty-state p {
            color: #64748B;
            font-size: 15px;
            font-weight: 600;
        }

        /* Bottom Mobile Bar */
        .gs-bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 68px;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
            border-top: 1px solid rgba(10, 34, 69, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 0 16px;
            z-index: 999;
        }

        .gs-bottom-bar a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #64748B;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
            gap: 4px;
            transition: color 0.2s ease;
        }

        .gs-bottom-bar a i {
            font-size: 18px;
        }

        .gs-bottom-bar a.active,
        .gs-bottom-bar a:hover {
            color: #0077D4;
        }

        @media (max-width: 576px) {
            .order-card {
                flex-direction: column;
                gap: 14px;
                padding: 16px;
            }

            .order-image {
                width: 64px;
                height: 64px;
            }

            .order-stats {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header-top">
        <div class="header-left">
            <a href="{{ url('/dashboard') }}" class="back-btn" title="Back to Dashboard">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div class="logo">
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_19_GreystarLogo_Navy_NoTagline.png') }}" alt="Greystar" />
                </a>
            </div>
        </div>
        <a href="{{ url('/profile') }}" class="user-icon" title="View Profile">
            <i class="fa-solid fa-user"></i>
        </a>
    </header>

    <main class="records-container">
        <div class="page-title-row">
            <h1>Transaction Records</h1>
            <p>Review and submit pending orders and explore your completion history.</p>
        </div>

        <!-- Tabs Navigation -->
        <div class="tabs-container">
            <button class="tab-button active" onclick="switchTab('all')">All Records</button>
            <button class="tab-button" onclick="switchTab('pending')">Pending</button>
            <button class="tab-button" onclick="switchTab('completed')">Completed</button>
            <button class="tab-button" onclick="switchTab('undone')">Undone</button>
        </div>

        <!-- Content Area -->
        <div class="content-area">
            <!-- All Tab -->
            <div id="all" class="tab-content active">
                @if ($oneIncompleteOrder || $completedOrders->isNotEmpty() || $onHoldOrders->isNotEmpty())
                    @if ($oneIncompleteOrder)
                        <div class="order-timestamp"><i class="fa-regular fa-clock"></i> {{ $oneIncompleteOrder->created_at->format('Y-m-d H:i:s') }}</div>
                        <div class="order-card">
                            <div class="order-image">
                                @if(isset($oneIncompleteOrder->orderList->image))
                                    <img src="{{ asset('OrderImages/' . $oneIncompleteOrder->orderList->image) }}" alt="Order">
                                @else
                                    <img src="{{ asset('assets/images/123.webp') }}" alt="Order">
                                @endif
                            </div>
                            <div class="order-content">
                                <div class="order-header">
                                    <div>
                                        <div class="order-title">{{ $oneIncompleteOrder->orderList->title ?? 'Order' }}</div>
                                        <div class="order-amount">VIEWS {{ number_format($oneIncompleteOrder->orderList->price ?? 0, 2) }}</div>
                                        <div class="order-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <span class="status-badge pending"><i class="fa-solid fa-circle-notch fa-spin"></i> Pending</span>
                                </div>
                                <div class="order-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Total Amount</span>
                                        <span class="stat-value">VIEWS {{ number_format($oneIncompleteOrder->orderList->price ?? 0, 2) }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Commission</span>
                                        @php
                                            $commissionRate = in_array($oneIncompleteOrder->orderList->id, $selectedOrderIds ?? []) ? 0.30 : ($membership->commission / 100);
                                            $commission = ($oneIncompleteOrder->orderList->price ?? 0) * $commissionRate;
                                        @endphp
                                        <span class="stat-value accent">VIEWS {{ number_format($commission, 2) }}</span>
                                    </div>
                                </div>

                                <form method="POST" action="{{ ($oneIncompleteOrder->orderList->price > $funds) ? route('support') : route('submit.order') }}">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{ $oneIncompleteOrder->order_id }}" />
                                    <input type="hidden" name="commission" value="{{ $commission }}" />
                                    <button type="submit" class="submit-btn-gs">Submit Order</button>
                                </form>
                            </div>
                        </div>
                    @endif

                    @foreach ($completedOrders as $order)
                        <div class="order-timestamp"><i class="fa-regular fa-clock"></i> {{ $order['created_at'] }}</div>
                        <div class="order-card">
                            <div class="order-image">
                                @if(isset($order['image']))
                                    <img src="{{ asset('OrderImages/' . $order['image']) }}" alt="Order">
                                @else
                                    <i class="fa-solid fa-box-open text-muted fa-2x"></i>
                                @endif
                            </div>
                            <div class="order-content">
                                <div class="order-header">
                                    <div>
                                        <div class="order-title">{{ $order['title'] ?? 'Order' }}</div>
                                        <div class="order-amount">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</div>
                                        <div class="order-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <span class="status-badge completed"><i class="fa-solid fa-check"></i> Completed</span>
                                </div>
                                <div class="order-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Total Amount</span>
                                        <span class="stat-value">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Commission</span>
                                        <span class="stat-value accent">VIEWS {{ number_format($order['commission'] ?? 0, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($onHoldOrders as $order)
                        <div class="order-timestamp"><i class="fa-regular fa-clock"></i> {{ $order['created_at'] }}</div>
                        <div class="order-card">
                            <div class="order-image">
                                @if(isset($order['image']))
                                    <img src="{{ asset('OrderImages/' . $order['image']) }}" alt="Order">
                                @else
                                    <i class="fa-solid fa-box-open text-muted fa-2x"></i>
                                @endif
                            </div>
                            <div class="order-content">
                                <div class="order-header">
                                    <div>
                                        <div class="order-title">{{ $order['title'] ?? 'Order' }}</div>
                                        <div class="order-amount">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</div>
                                        <div class="order-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <span class="status-badge undone"><i class="fa-solid fa-pause"></i> Undone</span>
                                </div>
                                <div class="order-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Total Amount</span>
                                        <span class="stat-value">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Commission</span>
                                        <span class="stat-value accent">VIEWS {{ number_format($order['commission'] ?? 0, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="empty-state">
                        <div class="empty-state-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                        <p>No orders yet</p>
                    </div>
                @endif
            </div>

            <!-- Pending Tab -->
            <div id="pending" class="tab-content">
                @if ($oneIncompleteOrder)
                    <div class="order-timestamp"><i class="fa-regular fa-clock"></i> {{ $oneIncompleteOrder->created_at->format('Y-m-d H:i:s') }}</div>
                    <div class="order-card">
                        <div class="order-image">
                            @if(isset($oneIncompleteOrder->orderList->image))
                                <img src="{{ asset('OrderImages/' . $oneIncompleteOrder->orderList->image) }}" alt="Order">
                            @else
                                <i class="fa-solid fa-box-open text-muted fa-2x"></i>
                            @endif
                        </div>
                        <div class="order-content">
                            <div class="order-header">
                                <div>
                                    <div class="order-title">{{ $oneIncompleteOrder->orderList->title ?? 'Order' }}</div>
                                    <div class="order-amount">VIEWS {{ number_format($oneIncompleteOrder->orderList->price ?? 0, 2) }}</div>
                                    <div class="order-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <span class="status-badge pending"><i class="fa-solid fa-circle-notch fa-spin"></i> Pending</span>
                            </div>
                            <div class="order-stats">
                                <div class="stat-item">
                                    <span class="stat-label">Total Amount</span>
                                    <span class="stat-value">VIEWS {{ number_format($oneIncompleteOrder->orderList->price ?? 0, 2) }}</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">Commission</span>
                                    @php
                                        $commissionRate = in_array($oneIncompleteOrder->orderList->id, $selectedOrderIds ?? []) ? 0.30 : ($membership->commission / 100);
                                        $commission = ($oneIncompleteOrder->orderList->price ?? 0) * $commissionRate;
                                    @endphp
                                    <span class="stat-value accent">VIEWS {{ number_format($commission, 2) }}</span>
                                </div>
                            </div>

                            <form method="POST" action="{{ ($oneIncompleteOrder->orderList->price > $funds) ? route('support') : route('submit.order') }}">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $oneIncompleteOrder->id }}" />
                                <input type="hidden" name="commission" value="{{ $commission }}" />
                                <button type="submit" class="submit-btn-gs">Submit Order</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="empty-state">
                        <div class="empty-state-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                        <p>No pending orders</p>
                    </div>
                @endif
            </div>

            <!-- Completed Tab -->
            <div id="completed" class="tab-content">
                @if ($completedOrders->isNotEmpty())
                    @foreach ($completedOrders as $order)
                        <div class="order-timestamp"><i class="fa-regular fa-clock"></i> {{ $order['created_at'] }}</div>
                        <div class="order-card">
                            <div class="order-image">
                                @if(isset($order['image']))
                                    <img src="{{ asset('OrderImages/' . $order['image']) }}" alt="Order">
                                @else
                                    <i class="fa-solid fa-box-open text-muted fa-2x"></i>
                                @endif
                            </div>
                            <div class="order-content">
                                <div class="order-header">
                                    <div>
                                        <div class="order-title">{{ $order['title'] ?? 'Order' }}</div>
                                        <div class="order-amount">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</div>
                                        <div class="order-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <span class="status-badge completed"><i class="fa-solid fa-check"></i> Completed</span>
                                </div>
                                <div class="order-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Total Amount</span>
                                        <span class="stat-value">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Commission</span>
                                        <span class="stat-value accent">VIEWS {{ number_format($order['commission'] ?? 0, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="empty-state">
                        <div class="empty-state-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                        <p>No completed orders yet</p>
                    </div>
                @endif
            </div>

            <!-- Undone Tab -->
            <div id="undone" class="tab-content">
                @if ($onHoldOrders->isNotEmpty())
                    @foreach ($onHoldOrders as $order)
                        <div class="order-timestamp"><i class="fa-regular fa-clock"></i> {{ $order['created_at'] }}</div>
                        <div class="order-card">
                            <div class="order-image">
                                @if(isset($order['image']))
                                    <img src="{{ asset('OrderImages/' . $order['image']) }}" alt="Order">
                                @else
                                    <i class="fa-solid fa-box-open text-muted fa-2x"></i>
                                @endif
                            </div>
                            <div class="order-content">
                                <div class="order-header">
                                    <div>
                                        <div class="order-title">{{ $order['title'] ?? 'Order' }}</div>
                                        <div class="order-amount">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</div>
                                        <div class="order-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <span class="status-badge undone"><i class="fa-solid fa-pause"></i> Undone</span>
                                </div>
                                <div class="order-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Total Amount</span>
                                        <span class="stat-value">VIEWS {{ number_format($order['price'] ?? 0, 2) }}</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Commission</span>
                                        <span class="stat-value accent">VIEWS {{ number_format($order['commission'] ?? 0, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="empty-state">
                        <div class="empty-state-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                        <p>No undone orders</p>
                    </div>
                @endif
            </div>
        </div>
    </main>

    <!-- Bottom Mobile Bar -->
    <nav class="gs-bottom-bar" aria-label="Bottom Navigation">
        <a href="{{ url('/dashboard') }}">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ url('/data-optimization') }}">
            <i class="fa-solid fa-chart-line"></i>
            <span>Lots</span>
        </a>
        <a href="{{ url('/history') }}" class="active">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>History</span>
        </a>
        <a href="{{ url('/wallet-information') }}">
            <i class="fa-solid fa-wallet"></i>
            <span>Wallet</span>
        </a>
        <a href="{{ url('/profile') }}">
            <i class="fa-solid fa-user"></i>
            <span>Profile</span>
        </a>
    </nav>

    <script>
        function switchTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });
            const targetTab = document.getElementById(tabName);
            if (targetTab) {
                targetTab.classList.add('active');
            }
            if (event && event.currentTarget) {
                event.currentTarget.classList.add('active');
            }
        }
    </script>
</body>
</html>
