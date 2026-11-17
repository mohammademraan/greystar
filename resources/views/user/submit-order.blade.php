@extends('user.layout.app-master')
@section('title', 'Submit Order - Greystar')
@section('content')
@php
    $userName = Auth::user()->name ?? 'Guest';
@endphp

<!-- FontAwesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Custom CSS for this page -->
<link rel="stylesheet" href="{{ asset('css/submit-order.css') }}">

<div class="submit-order-bg py-5">
    <div class="container">
        @if (session('error'))
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        @if ($orderData)
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        @foreach($orderData as $data)
                        <div class="col-12">
                            <div class="card order-card shadow-lg border-0 rounded-4">
                                <div class="card-body p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 text-center mb-3 mb-md-0 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('OrderImages/'.$data['image']) }}" alt="{{ $data['order']->title }}" class="img-fluid rounded-3 order-img order-img-xl">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-2">
                                                <h3 class="mb-2 mb-md-0 fw-bold text-dark">{{ $data['order']->title }}</h3>
                                                <span class="badge bg-primary bg-opacity-10 text-primary fs-6 px-3 py-2"><i class="fa-solid fa-hashtag me-1"></i>Order #{{ $data['order']->id }}</span>
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="order-icon text-success"><i class="fa-solid fa-dollar-sign fa-lg"></i></span>
                                                        <div>
                                                            <div class="fw-semibold fs-5 text-primary">${{ number_format($data['price'], 2) }}</div>
                                                            <small class="text-muted">Price</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="order-icon text-warning"><i class="fa-solid fa-coins fa-lg"></i></span>
                                                        <div>
                                                            <div class="fw-semibold fs-5 {{ $data['overpriced_amount'] > 0 ? 'text-danger' : 'text-success' }}">
                                                                ${{ number_format($data['commission'], 2) }}
                                                            </div>
                                                            <small class="text-muted">
                                                                {{ $data['overpriced_amount'] > 0 ? 'Commission' : 'Profit' }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="order-icon text-info"><i class="fa-solid fa-calculator fa-lg"></i></span>
                                                        <div>
                                                            <div class="fw-semibold fs-5 {{ $data['overpriced_amount'] > 0 ? 'text-warning' : 'text-dark' }}">
                                                                {{ $data['overpriced_amount'] > 0 ? '-' : '' }}${{ number_format($data['overpriced_amount'] > 0 ? $data['overpriced_amount'] : $data['total_value'], 2) }}
                                                            </div>
                                                            <small class="text-muted">
                                                                {{ $data['overpriced_amount'] > 0 ? 'Add Amount' : 'Total' }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center mb-3">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label mb-1">Score:</label>
                                                    <div class="rating rating-modern ms-0">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <input type="radio" id="star{{ $i }}-{{ $data['order']->id }}" name="rating-{{ $data['order']->id }}" value="{{ $i }}">
                                                            <label for="star{{ $i }}-{{ $data['order']->id }}" class="star">&#9733;</label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12 col-md-8">
                                                    <label for="feedback-{{ $data['order']->id }}" class="form-label mb-1">Comment Good Review</label>
                                                    <select id="feedback-{{ $data['order']->id }}" name="feedback" class="form-select feedback-select-lg">
                                                        <option value="The architecture here is absolutely breathtaking, Modern elegance meets timeless charm.">The architecture here is absolutely breathtaking, Modern elegance meets timeless charm.</option>
                                                        <option value="Every corner of this property feels like it belongs on a postcard.">Every corner of this property feels like it belongs on a postcard.</option>
                                                        <option value="The building's design is a perfect blend of innovation and tradition.">The building's design is a perfect blend of innovation and tradition.</option>
                                                        <option value="Can't get over how stunning the lobby looks, pure luxury from the first step in.">Can't get over how stunning the lobby looks, pure luxury from the first step in.</option>
                                                        <option value="This community defines what comfort and class should feel like.">This community defines what comfort and class should feel like.</option>
                                                        <option value="Every detail in the apartment is thoughtfully placed, true excellence!">Every detail in the apartment is thoughtfully placed, true excellence!</option>
                                                        <option value="The exterior alone deserves a standing ovation, what a striking structure.">The exterior alone deserves a standing ovation, what a striking structure.</option>
                                                        <option value="This residence really knows how to make you feel right at home.">This residence really knows how to make you feel right at home.</option>
                                                        <option value="Sleek, stylish, and so vibrant, loved every bit of it.">Sleek, stylish, and so vibrant, loved every bit of it.</option>
                                                        <option value="A masterclass in modern residential architecture, can't stop staring!">A masterclass in modern residential architecture, can't stop staring!</option>
                                                        <option value="The views from the top floor? Absolutely worth every penny.">The views from the top floor? Absolutely worth every penny.</option>
                                                        <option value="Everything here screams excellence, interior, service, and vibe.">Everything here screams excellence, interior, service, and vibe.</option>
                                                        <option value="They really paid attention to aesthetic and comfort equally.">They really paid attention to aesthetic and comfort equally.</option>
                                                        <option value="From the finishes to the high ceilings, this place is a dream.">From the finishes to the high ceilings, this place is a dream.</option>
                                                        <option value="An ideal mix of luxury, comfort, and world-class community amenities.">An ideal mix of luxury, comfort, and world-class community amenities.</option>
                                                        <option value="This building's design could easily be featured in an architectural magazine.">This building's design could easily be featured in an architectural magazine.</option>
                                                        <option value="I felt like I walked into a showcase home, too gorgeous to be real.">I felt like I walked into a showcase home, too gorgeous to be real.</option>
                                                        <option value="This is what luxury living should always look and feel like.">This is what luxury living should always look and feel like.</option>
                                                        <option value="The atmosphere here is peaceful, yet rich with character.">The atmosphere here is peaceful, yet rich with character.</option>
                                                        <option value="Exceptional design and flawless amenities, highly recommend!">Exceptional design and flawless amenities, highly recommend!</option>
                                                        <option value="Each floor tells a story through its decor, absolutely loved it.">Each floor tells a story through its decor, absolutely loved it.</option>
                                                        <option value="I'd live here if they let me, yes, it's that good.">I'd live here if they let me, yes, it's that good.</option>
                                                        <option value="Everything is picture-perfect, down to the hallway lighting.">Everything is picture-perfect, down to the hallway lighting.</option>
                                                        <option value="An unforgettable experience in a beautifully built space.">An unforgettable experience in a beautifully built space.</option>
                                                        <option value="The attention to detail makes this place truly special.">The attention to detail makes this place truly special.</option>
                                                        <option value="A gem in the heart of the city, what a beautiful structure.">A gem in the heart of the city, what a beautiful structure.</option>
                                                        <option value="So much more than a building, it's an experience.">So much more than a building, it's an experience.</option>
                                                        <option value="The perfect stay for those who appreciate luxury with taste.">The perfect stay for those who appreciate luxury with taste.</option>
                                                        <option value="The mix of textures, tones, and materials is interior goals.">The mix of textures, tones, and materials is interior goals.</option>
                                                        <option value="Loved the cozy ambiance and top-tier design elements.">Loved the cozy ambiance and top-tier design elements.</option>
                                                        <option value="Felt like I was living in an architectural spread, so chic!">Felt like I was living in an architectural spread, so chic!</option>
                                                        <option value="Stylish, sleek, and surprisingly warm for a modern build.">Stylish, sleek, and surprisingly warm for a modern build.</option>
                                                        <option value="This place deserves awards for both looks and hospitality.">This place deserves awards for both looks and hospitality.</option>
                                                        <option value="The rooftop deck adds a whole new level of wow.">The rooftop deck adds a whole new level of wow.</option>
                                                        <option value="Even the elevator ride felt luxurious, attention to detail!">Even the elevator ride felt luxurious, attention to detail!</option>
                                                        <option value="A perfect blend of art, architecture, and comfort.">A perfect blend of art, architecture, and comfort.</option>
                                                        <option value="I came for the tour and stayed for the vibes.">I came for the tour and stayed for the vibes.</option>
                                                        <option value="The building lights up beautifully at night, what a sight!">The building lights up beautifully at night, what a sight!</option>
                                                        <option value="I'd lease here again just for the lounge vibes alone.">I'd lease here just for the lounge vibes alone.</option>
                                                        <option value="One of the most beautifully designed communities I've ever seen.">One of the most beautifully designed communities I've ever seen.</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-4">
                                                <form action="{{ $data['overpriced_amount'] <= 0 ? route('submit.order') : route('support') }}" method="POST" class="w-100 w-md-auto">
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{ $data['order']->id }}">
                                                    <input type="hidden" name="commission" value="{{ $data['commission'] }}">
                                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 shadow-sm">
                                                        {{ $data['overpriced_amount'] <= 0 ? 'Submit Order' : 'Contact Support' }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection
