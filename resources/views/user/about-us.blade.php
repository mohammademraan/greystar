@extends('user.layout.master')
@section('title', 'About Us - Greystar')
@section('content')

    <!-- ==========================================================================
         Page Header Banner
         ========================================================================== -->
    <div class="gs-page-header" style="background: linear-gradient(rgba(10, 34, 69, 0.8), rgba(10, 34, 69, 0.8)), url('{{ asset('Apartments & Homes for Rent _ Greystar/imgi_34_greystar-hero-2026-09.avif') }}') center/cover no-repeat; padding: 72px 0 60px; color: #FFFFFF; text-align: center;">
        <div class="gs-container">
            <span class="section-kicker" style="color: var(--color-accent); font-weight: 600;">Who We Are</span>
            <h1 style="color: #FFFFFF; margin-bottom: 12px; font-size: 40px;">Greystar: Shaping Exceptional Spaces</h1>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 18px; max-width: 650px; margin: 0 auto;">Dedicated to delivering innovative residential living and vibrant communities across the United States.</p>
        </div>
    </div>

    <!-- ==========================================================================
         Mission & Story Section
         ========================================================================== -->
    <section class="gs-container gs-section">
        <div class="gs-partner-row">
            <div class="gs-partner-content">
                <span class="section-kicker">Our Mission</span>
                <h2>Creating places where you can grow</h2>
                <p>Greystar is a global leader in real estate developer and management, dedicated to delivering innovative residential, commercial, and mixed-use spaces. Our commitment to quality, sustainability, and client satisfaction helps build vibrant communities where people and businesses thrive.</p>
                <p>Whether you are finding your very first apartment, relocating for career opportunities, or expanding your horizons, we combine world-class property management with genuine local care.</p>
                <div style="display: flex; gap: 16px; margin-top: 24px;">
                    <a href="{{ url('/projects') }}" class="btn-primary-gs">Browse Communities</a>
                    <a href="{{ url('/contact-us') }}" class="btn-outline-gs">Contact Team</a>
                </div>
            </div>

            <div class="gs-partner-image-wrapper">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_6_greystar-living-mom-baby-yoga.avif') }}" alt="Greystar living" class="gs-partner-img" loading="lazy">
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Stats Counter Bar
         ========================================================================== -->
    <section style="background: var(--color-cream); border-radius: var(--radius-group); padding: 50px 0; margin-bottom: 80px;">
        <div class="gs-container">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center;">
                <div>
                    <div style="font-family: var(--font-heading); font-size: 42px; font-weight: 700; color: var(--color-ink);">1M+</div>
                    <div style="font-size: 15px; color: var(--color-ink-2); margin-top: 4px;">Apartments to Rent</div>
                </div>
                <div>
                    <div style="font-family: var(--font-heading); font-size: 42px; font-weight: 700; color: var(--color-ink);">30+</div>
                    <div style="font-size: 15px; color: var(--color-ink-2); margin-top: 4px;">Years Experience</div>
                </div>
                <div>
                    <div style="font-family: var(--font-heading); font-size: 42px; font-weight: 700; color: var(--color-ink);">40+</div>
                    <div style="font-size: 15px; color: var(--color-ink-2); margin-top: 4px;">States Covered</div>
                </div>
                <div>
                    <div style="font-family: var(--font-heading); font-size: 42px; font-weight: 700; color: var(--color-ink);">98%</div>
                    <div style="font-size: 15px; color: var(--color-ink-2); margin-top: 4px;">Resident Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         Core Pillars (Our Difference is in Details)
         ========================================================================== -->
    <section class="gs-container" style="margin-bottom: 90px;">
        <div style="text-align: center; max-width: 650px; margin: 0 auto 48px;">
            <span class="section-kicker">Core Values</span>
            <h2>Our Difference is in Details</h2>
            <p>From architectural excellence to thoughtful customer service, every element is designed around resident well-being.</p>
        </div>

        <div class="gs-card-grid-4" style="grid-template-columns: repeat(3, 1fr); gap: 28px;">
            <div class="gs-card">
                <div class="gs-card-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_7_greystar-community-living-man-coffee.avif') }}" alt="Design with you in mind" loading="lazy">
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">Design with you in mind</h3>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-top: 8px;">We're dedicated to providing an elevated living experience, with clear communication, smart home integration, and responsive care.</p>
                </div>
            </div>

            <div class="gs-card">
                <div class="gs-card-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_8_greystar-community-living-caregiver-mom-daughter.avif') }}" alt="Places to belong" loading="lazy">
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">Places to belong</h3>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-top: 8px;">Finding the right place to live has never been easier, with welcoming community events and spaces designed for every chapter of life.</p>
                </div>
            </div>

            <div class="gs-card">
                <div class="gs-card-media" style="height: 220px;">
                    <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_9_greystar-moving-couple-plant-boxes.avif') }}" alt="Always one step ahead" loading="lazy">
                </div>
                <div class="gs-card-body">
                    <h3 class="gs-card-title">Always one step ahead</h3>
                    <p style="font-size: 14px; color: var(--color-ink-2); margin-top: 8px;">We find proactive ways to add value to the rental experience, including resident loyalty rewards, seamless maintenance, and digital portal tools.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         A Partner You Can Trust Section
         ========================================================================== -->
    <section class="gs-container gs-section" style="border-top: 1px solid var(--color-border);">
        <div class="gs-partner-row">
            <div class="gs-partner-content">
                <span class="section-kicker">Integrity &amp; Leadership</span>
                <h2>A partner you can trust</h2>
                <p>With global expertise and deep market knowledge, we're more than just a property management company &mdash; we're a partner dedicated to your success. From construction and development to management and investment, we have the platforms and relationships to create lasting value. Together, let's build communities that thrive for the long term.</p>
                <a href="{{ url('/contact-us') }}" class="btn-primary-gs">Connect With an Advisor</a>
            </div>

            <div class="gs-partner-image-wrapper">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_33_greystar-shopping-couple-leasing-consultation.avif') }}" alt="Greystar consultation" class="gs-partner-img" loading="lazy">
            </div>
        </div>
    </section>

@endsection
