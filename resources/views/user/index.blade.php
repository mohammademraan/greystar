<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apartments & Homes for Rent | Greystar</title>
    <meta name="description" content="Discover luxury apartments, flats, and homes for rent across top cities with Greystar. Find your perfect living space today." />

    <!-- Google Fonts: Manrope (Headings) & Newsreader (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;1,6..72,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Greystar Design System CSS -->
    <link rel="stylesheet" href="{{ asset('css/greystar-design-system.css') }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
</head>
<body>
    @include('user.layout.header')

    <!-- ==========================================================================
         Hero Section
         ========================================================================== -->
    <section class="gs-hero" style="background-image: url('{{ asset('Apartments & Homes for Rent _ Greystar/imgi_34_greystar-hero-2026-09.avif') }}');">
        <div class="gs-container">
            <div class="gs-hero-card">
                <h1>Apartments made for living</h1>
                <p class="subtitle">Over 1 million apartments to rent &mdash; discover yours today.</p>

                <form action="{{ url('/projects') }}" method="GET" class="gs-search-bar" role="search">
                    <input type="text" name="search" class="gs-search-input" placeholder="Search by city or Greystar community" aria-label="Search by city or Greystar community">
                    <button type="submit" class="gs-search-btn" aria-label="Search">
                        <svg viewBox="0 -30 110 110" aria-hidden="true">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Section: Discover Greystar Communities
         ========================================================================== -->
    <section class="gs-container">
        <div class="gs-communities-box">
            <div class="gs-section-header">
                <h2>Discover Greystar Communities</h2>
                <div class="gs-info-line">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                    <span>You're seeing Total Monthly Leasing Prices, which include base rent and mandatory monthly costs. Explore each listing for a detailed breakdown.</span>
                </div>
            </div>

            <div class="gs-card-slider-wrapper">
                <div class="gs-card-grid-4">
                    <!-- Community Card 1: The Oliver -->
                    <article class="gs-card">
                        <div class="gs-card-media">
                            <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_2_19917PL1.avif') }}" alt="The Oliver apartment building and luxury pool" loading="lazy">
                            <button type="button" class="gs-card-fav-btn" aria-label="Save The Oliver to favorites">
                                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="gs-card-body">
                            <h3 class="gs-card-title">The Oliver</h3>
                            <div class="gs-card-address">1001 Shepherd Street, Houston, TX 77007</div>
                            <div class="gs-card-price-row">
                                <span class="gs-price-label">12 month lease from</span>
                                <span class="gs-price-val">$1,278</span>
                                <span class="gs-price-sub">Base rent from $1,242</span>
                            </div>
                        </div>
                    </article>

                    <!-- Community Card 2: The Winston -->
                    <article class="gs-card">
                        <div class="gs-card-media">
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
                            <div class="gs-card-price-row">
                                <span class="gs-price-label">12 month lease from</span>
                                <span class="gs-price-val">$1,215</span>
                                <span class="gs-price-sub">Base rent from $1,150</span>
                            </div>
                        </div>
                    </article>

                    <!-- Community Card 3: Circa LA Apartments -->
                    <article class="gs-card">
                        <div class="gs-card-media">
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
                            <div class="gs-card-price-row">
                                <span class="gs-price-label">12 month lease from</span>
                                <span class="gs-price-val">$2,450</span>
                                <span class="gs-price-sub">Base rent from $2,380</span>
                            </div>
                        </div>
                    </article>

                    <!-- Community Card 4: The Sutton -->
                    <article class="gs-card">
                        <div class="gs-card-media">
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
                            <div class="gs-card-price-row">
                                <span class="gs-price-label">12 month lease from</span>
                                <span class="gs-price-val">$1,890</span>
                                <span class="gs-price-sub">Base rent from $1,810</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="gs-slider-controls">
                <button type="button" class="gs-slider-arrow" aria-label="Previous communities page">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m12 19-7-7 7-7"/><path d="M19 12H5"/>
                    </svg>
                </button>
                <span class="gs-slider-dots-label">1 of 4</span>
                <button type="button" class="gs-slider-arrow active" aria-label="Next communities page">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <!-- Search Communities Button -->
            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ url('/projects') }}" class="btn-primary-gs btn-pill-gs">
                    <span>Search Greystar Communities</span>
                    <svg viewBox="0 -30 110 110" width="16" height="16" fill="#FFFFFF" aria-hidden="true">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Section: Why rent with us
         ========================================================================== -->
    <section class="gs-container" style="margin-bottom: 80px;">
        <h2 style="margin-bottom: 24px;">Why rent with us</h2>
        <div class="gs-why-rent-banner" style="background-image: url('{{ asset('Apartments & Homes for Rent _ Greystar/imgi_6_greystar-living-mom-baby-yoga.avif') }}');">
            <div class="gs-why-rent-card">
                <span class="gs-kicker-green">Creating places where you can grow</span>
                <p>Here at Greystar, we create beautiful living spaces and provide high quality customer service so you can focus on what matters most to you.</p>
                <a href="{{ url('/about-us') }}" class="btn-primary-gs">Learn more</a>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Section: Our difference is in details
         ========================================================================== -->
    <section class="gs-container gs-details-section">
        <h3>Our difference is in details</h3>
        <div class="gs-details-grid">
            <!-- Item 1: Design with you in mind -->
            <div class="gs-detail-item">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_7_greystar-community-living-man-coffee.avif') }}" alt="Resident enjoying living space with coffee" class="gs-detail-item-img" loading="lazy">
                <h3 class="h3-feature">Design with you in mind</h3>
                <p>We're dedicated to providing a great living experience, with clear communication and care.</p>
            </div>

            <!-- Item 2: Places to belong -->
            <div class="gs-detail-item">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_8_greystar-community-living-caregiver-mom-daughter.avif') }}" alt="Multi-generation family smiling with dog" class="gs-detail-item-img" loading="lazy">
                <h3 class="h3-feature">Places to belong</h3>
                <p>Finding the right place to live has never been easier, with communities for every chapter of life.</p>
            </div>

            <!-- Item 3: Always one step ahead -->
            <div class="gs-detail-item gs-detail-card-wide">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_9_greystar-moving-couple-plant-boxes.avif') }}" alt="Couple moving into new apartment" class="gs-detail-item-img" loading="lazy">
                <h3 class="h3-feature">Always one step ahead</h3>
                <p>We find ways to add to the rental experience, including rewards and perks for being a resident.</p>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Section: See yourself somewhere new (Cream background)
         ========================================================================== -->
    <section class="gs-cream-section">
        <div class="gs-container">
            <span class="section-kicker">Not sure where to look?</span>
            <h2>See yourself somewhere new</h2>

            <div class="gs-city-grid">
                <!-- City 1: Atlanta -->
                <article class="gs-city-card">
                    <div class="gs-city-media">
                        <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_10_USA-Georgia-Atlanta-Metro-Stockbridge.avif') }}" alt="Atlanta skyline and park greenery" loading="lazy">
                    </div>
                    <div class="gs-city-body">
                        <h3 class="gs-city-title">Atlanta</h3>
                        <p class="gs-city-desc">Atlanta is a dynamic city, blending Southern hospitality, modern innovation, and an arts-centric cultural scene.</p>
                    </div>
                </article>

                <!-- City 2: Charlotte Metro -->
                <article class="gs-city-card">
                    <div class="gs-city-media">
                        <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_11_USA-North-Carolina-Charlotte-Metro.avif') }}" alt="Charlotte Metro illuminated city skyline" loading="lazy">
                    </div>
                    <div class="gs-city-body">
                        <h3 class="gs-city-title">Charlotte Metro</h3>
                        <p class="gs-city-desc">Discover all the power of living large in our Greystar apartments in and around Charlotte Metro. Complete with luxury amenities, superior services and easy access to the best sights and sounds Queen City has t...</p>
                    </div>
                </article>

                <!-- City 3: Greater Houston -->
                <article class="gs-city-card">
                    <div class="gs-city-media">
                        <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_12_USA-Texas-Houston-Braeswood-Fondren-SW.avif') }}" alt="Houston city skyline at night" loading="lazy">
                    </div>
                    <div class="gs-city-body">
                        <h3 class="gs-city-title">Greater Houston</h3>
                        <p class="gs-city-desc">Famous for being home to NASA and world-class culinary and arts scenes, Houston pairs rich history with a modern urban lifestyle.</p>
                    </div>
                </article>
            </div>

            <!-- Slider Controls -->
            <div class="gs-slider-controls">
                <button type="button" class="gs-slider-arrow" aria-label="Previous cities page">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m12 19-7-7 7-7"/><path d="M19 12H5"/>
                    </svg>
                </button>
                <span class="gs-slider-dots-label">1 of 4</span>
                <button type="button" class="gs-slider-arrow active" aria-label="Next cities page">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Section: Advice on moving, renting, and more
         ========================================================================== -->
    <section class="gs-container gs-section">
        <span class="section-kicker">Helping you find clarity in the chaos.</span>
        <h2>Advice on moving, renting, and more</h2>

        <div class="gs-advice-grid">
            <!-- Advice 1 -->
            <article class="gs-advice-card">
                <div class="gs-advice-media">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_30_greystar-moving-new-house-keys.avif') }}" alt="Hands holding new house keys" loading="lazy">
                </div>
                <h3 class="gs-advice-title">When to start looking</h3>
                <p class="gs-advice-desc">Timing is everything when apartment hunting. The right moment can unlock better options and more savings.</p>
            </article>

            <!-- Advice 2 -->
            <article class="gs-advice-card">
                <div class="gs-advice-media">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_31_greystar-shopping-grandfather-child.avif') }}" alt="Grandfather and child browsing apartments on laptop" loading="lazy">
                </div>
                <h3 class="gs-advice-title">How to schedule a tour</h3>
                <p class="gs-advice-desc">Touring apartments is essential to getting a feel for the space and determining if it's the right fit for your lifestyle.</p>
            </article>

            <!-- Advice 3 -->
            <article class="gs-advice-card">
                <div class="gs-advice-media">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_32_greystar-shopping-laptop-searching.avif') }}" alt="Person researching apartments with coffee and notebook" loading="lazy">
                </div>
                <h3 class="gs-advice-title">Avoiding rental scams</h3>
                <p class="gs-advice-desc">Don't let rental scams turn your apartment hunt into a costly nightmare. These tips will help you avoid them.</p>
            </article>
        </div>
    </section>

    <!-- ==========================================================================
         Section: A partner you can trust
         ========================================================================== -->
    <section class="gs-container gs-partner-section">
        <div class="gs-partner-row">
            <div class="gs-partner-content">
                <h2>A partner you can trust</h2>
                <p>With global expertise and deep market knowledge, we're more than just a property management company &mdash; we're a partner dedicated to your success. From construction and development to management and investment, we have the platforms and relationships to create lasting value. Together, let's build communities that thrive for the long term.</p>
                <a href="{{ url('/about-us') }}" class="btn-primary-gs">
                    <span>Learn more</span>
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                    </svg>
                </a>
            </div>

            <div class="gs-partner-image-wrapper">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_33_greystar-shopping-couple-leasing-consultation.avif') }}" alt="Greystar team consulting with clients" class="gs-partner-img" loading="lazy">
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Section: SEO Links Block
         ========================================================================== -->
    <section class="gs-seo-section">
        <div class="gs-container">
            <div class="gs-seo-grid">
                <!-- Col 1: Apartments by city -->
                <div class="gs-seo-col">
                    <h4>Apartments by city</h4>
                    <ul class="gs-seo-list">
                        <li><a href="{{ url('/projects') }}">Houston TX apartments</a></li>
                        <li><a href="{{ url('/projects') }}">Charlotte NC apartments</a></li>
                        <li><a href="{{ url('/projects') }}" class="gs-see-more-link">See more &#8964;</a></li>
                    </ul>
                </div>

                <!-- Col 2: Studio apartments -->
                <div class="gs-seo-col">
                    <h4>Studio apartments</h4>
                    <ul class="gs-seo-list">
                        <li><a href="{{ url('/projects') }}">Studio apartments in Houston TX</a></li>
                        <li><a href="{{ url('/projects') }}">Studio apartments in Charlotte NC</a></li>
                        <li><a href="{{ url('/projects') }}" class="gs-see-more-link">See more &#8964;</a></li>
                    </ul>
                </div>

                <!-- Col 3: 1 bedroom apartments -->
                <div class="gs-seo-col">
                    <h4>1 bedroom apartments</h4>
                    <ul class="gs-seo-list">
                        <li><a href="{{ url('/projects') }}">1 bedroom apartments in Houston TX</a></li>
                        <li><a href="{{ url('/projects') }}">1 bedroom apartments in Charlotte NC</a></li>
                        <li><a href="{{ url('/projects') }}" class="gs-see-more-link">See more &#8964;</a></li>
                    </ul>
                </div>

                <!-- Col 4: 2 bedroom apartments -->
                <div class="gs-seo-col">
                    <h4>2 bedroom apartments</h4>
                    <ul class="gs-seo-list">
                        <li><a href="{{ url('/projects') }}">2 bedroom apartments in Houston TX</a></li>
                        <li><a href="{{ url('/projects') }}">2 bedroom apartments in Charlotte NC</a></li>
                        <li><a href="{{ url('/projects') }}" class="gs-see-more-link">See more &#8964;</a></li>
                    </ul>
                </div>

                <!-- Col 5: Pet friendly apartments -->
                <div class="gs-seo-col">
                    <h4>Pet friendly apartments</h4>
                    <ul class="gs-seo-list">
                        <li><a href="{{ url('/projects') }}">Pet friendly apartments in Houston TX</a></li>
                        <li><a href="{{ url('/projects') }}">Pet friendly apartments in Charlotte NC</a></li>
                        <li><a href="{{ url('/projects') }}" class="gs-see-more-link">See more &#8964;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('user.layout.footer')
    @include('user.layout.chat')
</body>
</html>
