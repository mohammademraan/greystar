@extends('user.layout.master')
@section('title', 'Advice & Articles - Greystar')
@section('content')

    <!-- ==========================================================================
         Page Header Banner
         ========================================================================== -->
    <div class="gs-page-header" style="background: linear-gradient(rgba(10, 34, 69, 0.8), rgba(10, 34, 69, 0.8)), url('{{ asset('Apartments & Homes for Rent _ Greystar/imgi_34_greystar-hero-2026-09.avif') }}') center/cover no-repeat; padding: 72px 0 60px; color: #FFFFFF; text-align: center;">
        <div class="gs-container">
            <span class="section-kicker" style="color: var(--color-accent); font-weight: 600;">Insights &amp; Guides</span>
            <h1 style="color: #FFFFFF; margin-bottom: 12px; font-size: 40px;">Advice on Moving, Renting, and More</h1>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 18px; max-width: 650px; margin: 0 auto;">Helping you find clarity in the chaos with expert rental tips, market insights, and neighborhood guides.</p>
        </div>
    </div>

    <!-- ==========================================================================
         Blog Content Grid
         ========================================================================== -->
    <div class="gs-container gs-section">
        <!-- Categories Filter -->
        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 40px; justify-content: center;">
            <span class="btn-outline-gs" style="background: var(--color-ink); color: #fff; border-color: var(--color-ink);">All Articles</span>
            <span class="btn-outline-gs">Renting Advice</span>
            <span class="btn-outline-gs">Moving Guides</span>
            <span class="btn-outline-gs">Scam Prevention</span>
            <span class="btn-outline-gs">Community Life</span>
        </div>

        <div class="gs-advice-grid" style="grid-template-columns: repeat(3, 1fr); gap: 32px;">
            <!-- Article 1 -->
            <article class="gs-city-card" style="border-radius: var(--radius-card); overflow: hidden;">
                <div class="gs-city-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_30_greystar-moving-new-house-keys.avif') }}" alt="Hands holding house keys" loading="lazy">
                </div>
                <div class="gs-city-body">
                    <span class="section-kicker" style="font-size: 12px; margin-bottom: 4px;">Renting Advice &bull; 4 min read</span>
                    <h3 class="gs-advice-title" style="font-size: 20px; line-height: 26px;">When to start looking for your next apartment</h3>
                    <p class="gs-advice-desc" style="margin-bottom: 16px;">Timing is everything when apartment hunting. The right moment can unlock better leasing options and substantial rent savings.</p>
                    <a href="{{ url('/contact-us') }}" style="font-weight: 600; color: var(--color-primary);">Read Guide &rarr;</a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="gs-city-card" style="border-radius: var(--radius-card); overflow: hidden;">
                <div class="gs-city-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_31_greystar-shopping-grandfather-child.avif') }}" alt="Grandfather and child using laptop" loading="lazy">
                </div>
                <div class="gs-city-body">
                    <span class="section-kicker" style="font-size: 12px; margin-bottom: 4px;">Touring Tips &bull; 5 min read</span>
                    <h3 class="gs-advice-title" style="font-size: 20px; line-height: 26px;">How to schedule an apartment tour like a pro</h3>
                    <p class="gs-advice-desc" style="margin-bottom: 16px;">Touring apartments is essential to getting a real feel for the community, evaluating amenities, and deciding if it fits your lifestyle.</p>
                    <a href="{{ url('/contact-us') }}" style="font-weight: 600; color: var(--color-primary);">Read Guide &rarr;</a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="gs-city-card" style="border-radius: var(--radius-card); overflow: hidden;">
                <div class="gs-city-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_32_greystar-shopping-laptop-searching.avif') }}" alt="Person working on laptop" loading="lazy">
                </div>
                <div class="gs-city-body">
                    <span class="section-kicker" style="font-size: 12px; margin-bottom: 4px;">Safety &amp; Protection &bull; 6 min read</span>
                    <h3 class="gs-advice-title" style="font-size: 20px; line-height: 26px;">Avoiding rental scams: Essential renter rules</h3>
                    <p class="gs-advice-desc" style="margin-bottom: 16px;">Don't let rental scams turn your apartment search into a costly nightmare. Learn the warning signs and verified booking methods.</p>
                    <a href="{{ url('/contact-us') }}" style="font-weight: 600; color: var(--color-primary);">Read Guide &rarr;</a>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="gs-city-card" style="border-radius: var(--radius-card); overflow: hidden;">
                <div class="gs-city-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_6_greystar-living-mom-baby-yoga.avif') }}" alt="Wellness living" loading="lazy">
                </div>
                <div class="gs-city-body">
                    <span class="section-kicker" style="font-size: 12px; margin-bottom: 4px;">Wellness &bull; 3 min read</span>
                    <h3 class="gs-advice-title" style="font-size: 20px; line-height: 26px;">Creating spaces where families can grow</h3>
                    <p class="gs-advice-desc" style="margin-bottom: 16px;">Here at Greystar, we create vibrant living spaces and provide high quality customer service so you can focus on what matters most.</p>
                    <a href="{{ url('/contact-us') }}" style="font-weight: 600; color: var(--color-primary);">Read Guide &rarr;</a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="gs-city-card" style="border-radius: var(--radius-card); overflow: hidden;">
                <div class="gs-city-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_7_greystar-community-living-man-coffee.avif') }}" alt="Resident enjoying coffee" loading="lazy">
                </div>
                <div class="gs-city-body">
                    <span class="section-kicker" style="font-size: 12px; margin-bottom: 4px;">Transparency &bull; 4 min read</span>
                    <h3 class="gs-advice-title" style="font-size: 20px; line-height: 26px;">Total monthly leasing prices: What is included?</h3>
                    <p class="gs-advice-desc" style="margin-bottom: 16px;">Understand the components of your monthly rent, including mandatory utilities and amenity access with no hidden surprises.</p>
                    <a href="{{ url('/contact-us') }}" style="font-weight: 600; color: var(--color-primary);">Read Guide &rarr;</a>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="gs-city-card" style="border-radius: var(--radius-card); overflow: hidden;">
                <div class="gs-city-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_9_greystar-moving-couple-plant-boxes.avif') }}" alt="Moving day couple" loading="lazy">
                </div>
                <div class="gs-city-body">
                    <span class="section-kicker" style="font-size: 12px; margin-bottom: 4px;">Moving Day &bull; 5 min read</span>
                    <h3 class="gs-advice-title" style="font-size: 20px; line-height: 26px;">The ultimate stress-free moving checklist</h3>
                    <p class="gs-advice-desc" style="margin-bottom: 16px;">Step-by-step guidance on packing, changing addresses, reserving freight elevators, and settling into your new apartment.</p>
                    <a href="{{ url('/contact-us') }}" style="font-weight: 600; color: var(--color-primary);">Read Guide &rarr;</a>
                </div>
            </article>
        </div>
    </div>

@endsection
