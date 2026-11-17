@extends('user.layout.master')
@section('title', 'Communities & Apartments for Rent - Greystar')
@section('content')

    <!-- ==========================================================================
         Page Header Banner
         ========================================================================== -->
    <div class="gs-page-header" style="background: linear-gradient(rgba(10, 34, 69, 0.75), rgba(10, 34, 69, 0.75)), url('{{ asset('Apartments & Homes for Rent _ Greystar/imgi_34_greystar-hero-2026-09.avif') }}') center/cover no-repeat; padding: 70px 0 60px; color: #FFFFFF; text-align: center;">
        <div class="gs-container">
            <span class="section-kicker" style="color: var(--color-accent); font-weight: 600;">Explore Nationwide</span>
            <h1 style="color: #FFFFFF; margin-bottom: 12px; font-size: 40px;">Greystar Communities &amp; Homes</h1>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 18px; max-width: 650px; margin: 0 auto 24px;">Discover luxury rental apartments with exceptional amenities, prime locations, and dedicated community management.</p>
            
            <!-- Quick Filter Bar -->
            <div style="max-width: 650px; margin: 0 auto;">
                <form action="{{ url('/projects') }}" method="GET" class="gs-search-bar" role="search" style="box-shadow: 0 8px 24px rgba(0,0,0,0.2);">
                    <input type="text" name="search" class="gs-search-input" placeholder="Search by city, neighborhood, or community name..." aria-label="Search communities">
                    <button type="submit" class="gs-search-btn" aria-label="Search">
                        <svg viewBox="0 -30 110 110" aria-hidden="true">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- ==========================================================================
         Community Listings Grid
         ========================================================================== -->
    <div class="gs-container gs-section">
        <!-- Section Subheader & Count -->
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 36px;">
            <div>
                <h2 style="margin-bottom: 4px;">Available Communities</h2>
                <div class="gs-info-line">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                    <span>Showing Total Monthly Leasing Prices with mandatory monthly costs included.</span>
                </div>
            </div>
            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                <span class="btn-outline-gs" style="background: var(--color-ink); color: #fff; border-color: var(--color-ink);">All Cities</span>
                <span class="btn-outline-gs">Houston, TX</span>
                <span class="btn-outline-gs">Charlotte, NC</span>
                <span class="btn-outline-gs">Los Angeles, CA</span>
                <span class="btn-outline-gs">Atlanta, GA</span>
            </div>
        </div>

        <!-- Grid of 6 Luxury Communities -->
        <div class="gs-card-grid-4" style="grid-template-columns: repeat(3, 1fr); gap: 28px;">
            <!-- Community 1: The Oliver -->
            <article class="gs-card">
                <div class="gs-card-media" style="height: 240px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_2_19917PL1.avif') }}" alt="The Oliver apartment building and pool" loading="lazy">
                    <button type="button" class="gs-card-fav-btn" aria-label="Save The Oliver to favorites">
                        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </button>
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">The Oliver</h3>
                    <div class="gs-card-address">1001 Shepherd Street, Houston, TX 77007</div>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-bottom: 16px;">Resort-style pool, private cabanas, 24/7 fitness club, and pet spa in the heart of Houston.</p>
                    <div class="gs-card-price-row">
                        <span class="gs-price-label">12 month lease from</span>
                        <span class="gs-price-val">$1,278</span>
                        <span class="gs-price-sub">Base rent from $1,242 &bull; Studio &ndash; 2 Beds</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ url('/contact-us') }}" class="btn-primary-gs" style="width: 100%; height: 42px; font-size: 14px;">Schedule a Tour</a>
                    </div>
                </div>
            </article>

            <!-- Community 2: The Winston -->
            <article class="gs-card">
                <div class="gs-card-media" style="height: 240px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_3_19984BDG2.avif') }}" alt="The Winston exterior view" loading="lazy">
                    <button type="button" class="gs-card-fav-btn" aria-label="Save The Winston to favorites">
                        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </button>
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">The Winston</h3>
                    <div class="gs-card-address">121 West Blvd, Charlotte, NC 28203</div>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-bottom: 16px;">Modern architecture, skyline lounge, coworking spaces, and immediate light rail transit access.</p>
                    <div class="gs-card-price-row">
                        <span class="gs-price-label">12 month lease from</span>
                        <span class="gs-price-val">$1,215</span>
                        <span class="gs-price-sub">Base rent from $1,150 &bull; 1 &ndash; 3 Beds</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ url('/contact-us') }}" class="btn-primary-gs" style="width: 100%; height: 42px; font-size: 14px;">Schedule a Tour</a>
                    </div>
                </div>
            </article>

            <!-- Community 3: Circa LA Apartments -->
            <article class="gs-card">
                <div class="gs-card-media" style="height: 240px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_4_15419BDG4.avif') }}" alt="Circa LA Apartments downtown view" loading="lazy">
                    <button type="button" class="gs-card-fav-btn" aria-label="Save Circa LA Apartments to favorites">
                        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </button>
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">Circa LA Apartments</h3>
                    <div class="gs-card-address">1200 S Figueroa St, Los Angeles, CA 90015</div>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-bottom: 16px;">Iconic high-rise living directly across Crypto.com Arena with two-acre rooftop sky deck.</p>
                    <div class="gs-card-price-row">
                        <span class="gs-price-label">12 month lease from</span>
                        <span class="gs-price-val">$2,450</span>
                        <span class="gs-price-sub">Base rent from $2,380 &bull; Studio &ndash; Penthouse</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ url('/contact-us') }}" class="btn-primary-gs" style="width: 100%; height: 42px; font-size: 14px;">Schedule a Tour</a>
                    </div>
                </div>
            </article>

            <!-- Community 4: The Sutton -->
            <article class="gs-card">
                <div class="gs-card-media" style="height: 240px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_5_21630CLB1.avif') }}" alt="The Sutton residences and park view" loading="lazy">
                    <button type="button" class="gs-card-fav-btn" aria-label="Save The Sutton to favorites">
                        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </button>
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">The Sutton</h3>
                    <div class="gs-card-address">2950 N Speer Blvd, Denver, CO 80211</div>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-bottom: 16px;">Boutique residences overlooking mountain panoramas, heated infinity pool, and bike repair shop.</p>
                    <div class="gs-card-price-row">
                        <span class="gs-price-label">12 month lease from</span>
                        <span class="gs-price-val">$1,890</span>
                        <span class="gs-price-sub">Base rent from $1,810 &bull; 1 &ndash; 3 Beds</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ url('/contact-us') }}" class="btn-primary-gs" style="width: 100%; height: 42px; font-size: 14px;">Schedule a Tour</a>
                    </div>
                </div>
            </article>

            <!-- Community 5: Atlanta Metro Residences -->
            <article class="gs-card">
                <div class="gs-card-media" style="height: 240px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_10_USA-Georgia-Atlanta-Metro-Stockbridge.avif') }}" alt="Atlanta Metro Residences" loading="lazy">
                    <button type="button" class="gs-card-fav-btn" aria-label="Save to favorites">
                        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </button>
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">The Standard Atlanta</h3>
                    <div class="gs-card-address">708 Spring St NW, Atlanta, GA 30308</div>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-bottom: 16px;">Centrally located Midtown community featuring designer quartz finishes and club-level social rooms.</p>
                    <div class="gs-card-price-row">
                        <span class="gs-price-label">12 month lease from</span>
                        <span class="gs-price-val">$1,540</span>
                        <span class="gs-price-sub">Base rent from $1,475 &bull; Studio &ndash; 2 Beds</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ url('/contact-us') }}" class="btn-primary-gs" style="width: 100%; height: 42px; font-size: 14px;">Schedule a Tour</a>
                    </div>
                </div>
            </article>

            <!-- Community 6: Houston Braeswood -->
            <article class="gs-card">
                <div class="gs-card-media" style="height: 240px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_12_USA-Texas-Houston-Braeswood-Fondren-SW.avif') }}" alt="Houston Braeswood Living" loading="lazy">
                    <button type="button" class="gs-card-fav-btn" aria-label="Save to favorites">
                        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </button>
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">Braeswood Haven</h3>
                    <div class="gs-card-address">8400 Fondren Rd, Houston, TX 77074</div>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-bottom: 16px;">Tree-lined walking paths, dual tennis courts, gated access, and minutes from the Medical Center.</p>
                    <div class="gs-card-price-row">
                        <span class="gs-price-label">12 month lease from</span>
                        <span class="gs-price-val">$1,180</span>
                        <span class="gs-price-sub">Base rent from $1,120 &bull; 1 &ndash; 2 Beds</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ url('/contact-us') }}" class="btn-primary-gs" style="width: 100%; height: 42px; font-size: 14px;">Schedule a Tour</a>
                    </div>
                </div>
            </article>
        </div>

        <!-- Pagination Controls -->
        <div class="gs-slider-controls" style="margin-top: 48px; justify-content: center;">
            <button type="button" class="gs-slider-arrow active" aria-label="Page 1">1</button>
            <button type="button" class="gs-slider-arrow" aria-label="Page 2">2</button>
            <button type="button" class="gs-slider-arrow" aria-label="Page 3">3</button>
        </div>
    </div>

    <!-- Newsletter CTA Bar -->
    <section style="background: var(--color-footer); color: #fff; padding: 50px 0;">
        <div class="gs-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
            <div>
                <h3 style="color: #fff; margin-bottom: 6px; font-size: 24px;">Stay Updated with New Listings</h3>
                <p style="color: rgba(255, 255, 255, 0.8); margin: 0; font-size: 15px;">Receive first alerts on newly opened Greystar luxury apartment communities.</p>
            </div>
            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <input type="email" placeholder="Your email address" style="padding: 12px 20px; border-radius: var(--radius-pill); border: 1px solid var(--color-border); font-family: var(--font-body); outline: none; min-width: 260px;">
                <button type="button" class="btn-primary-gs btn-pill-gs">Subscribe</button>
            </div>
        </div>
    </section>

@endsection
