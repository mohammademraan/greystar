@extends('user.layout.master')
@section('title', 'Contact Us - Greystar')
@section('content')

    <!-- ==========================================================================
         Page Header Banner
         ========================================================================== -->
    <div class="gs-page-header" style="background: linear-gradient(rgba(10, 34, 69, 0.8), rgba(10, 34, 69, 0.8)), url('{{ asset('Apartments & Homes for Rent _ Greystar/imgi_34_greystar-hero-2026-09.avif') }}') center/cover no-repeat; padding: 72px 0 60px; color: #FFFFFF; text-align: center;">
        <div class="gs-container">
            <span class="section-kicker" style="color: var(--color-accent); font-weight: 600;">Get In Touch</span>
            <h1 style="color: #FFFFFF; margin-bottom: 12px; font-size: 40px;">Contact Greystar</h1>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 18px; max-width: 650px; margin: 0 auto;">Our dedicated resident advisors and leasing consultants are here to answer your questions and assist you with your search.</p>
        </div>
    </div>

    <!-- ==========================================================================
         Contact Form & Info Section
         ========================================================================== -->
    <section class="gs-container gs-section">
        <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 48px; align-items: flex-start;">
            
            <!-- Left: Contact Form -->
            <div class="gs-card" style="padding: 40px; box-shadow: var(--shadow-card);">
                <h2 style="font-size: 28px; margin-bottom: 8px;">Send Us a Message</h2>
                <p style="margin-bottom: 28px;">Fill out the form below and a representative will respond within 24 business hours.</p>

                <form id="contact-form" method="POST" action="{{ url('/contact-us') }}">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-size: 14px; font-weight: 600; color: var(--color-ink); margin-bottom: 6px;">Your Name *</label>
                            <input type="text" name="name" required placeholder="John Doe" style="width: 100%; height: 48px; padding: 0 16px; border-radius: var(--radius-btn); border: 1px solid var(--color-border); font-family: var(--font-body); font-size: 15px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 14px; font-weight: 600; color: var(--color-ink); margin-bottom: 6px;">Your Email *</label>
                            <input type="email" name="email" required placeholder="name@example.com" style="width: 100%; height: 48px; padding: 0 16px; border-radius: var(--radius-btn); border: 1px solid var(--color-border); font-family: var(--font-body); font-size: 15px; outline: none;">
                        </div>
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 14px; font-weight: 600; color: var(--color-ink); margin-bottom: 6px;">Subject</label>
                        <input type="text" name="subject" placeholder="Apartment inquiry, tour request, etc." style="width: 100%; height: 48px; padding: 0 16px; border-radius: var(--radius-btn); border: 1px solid var(--color-border); font-family: var(--font-body); font-size: 15px; outline: none;">
                    </div>

                    <div style="margin-bottom: 24px;">
                        <label style="display: block; font-size: 14px; font-weight: 600; color: var(--color-ink); margin-bottom: 6px;">Your Message *</label>
                        <textarea name="message" rows="5" required placeholder="How can we help you? Please specify desired city, move-in date, and bedroom preference." style="width: 100%; padding: 14px 16px; border-radius: var(--radius-btn); border: 1px solid var(--color-border); font-family: var(--font-body); font-size: 15px; outline: none;"></textarea>
                    </div>

                    <button type="submit" class="btn-primary-gs" style="width: 100%; height: 50px; font-size: 16px;">Send Message</button>
                </form>
            </div>

            <!-- Right: Office Info & Support -->
            <div style="display: flex; flex-direction: column; gap: 24px;">
                <div class="gs-card" style="padding: 32px; background: #F4F8FD;">
                    <h3 style="font-size: 20px; margin-bottom: 16px;">Corporate Headquarters</h3>
                    <div style="display: flex; gap: 14px; margin-bottom: 16px;">
                        <div style="width: 36px; height: 36px; border-radius: 50%; background: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.06);">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <strong style="color: var(--color-ink);">Greystar Real Estate</strong><br>
                            <span style="font-size: 14px; color: var(--color-ink-2);">250 Vesey Street, 15th Floor<br>New York, NY 10281, USA</span>
                        </div>
                    </div>

                    <div style="display: flex; gap: 14px; margin-bottom: 16px;">
                        <div style="width: 36px; height: 36px; border-radius: 50%; background: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.06);">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <strong style="color: var(--color-ink);">Phone</strong><br>
                            <a href="tel:+12124177000" style="font-size: 14px;">+1 212-417-7000</a>
                        </div>
                    </div>

                    <div style="display: flex; gap: 14px;">
                        <div style="width: 36px; height: 36px; border-radius: 50%; background: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.06);">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="var(--color-primary)" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <strong style="color: var(--color-ink);">Email</strong><br>
                            <a href="mailto:contact@greystar.com" style="font-size: 14px;">contact@greystar.com</a>
                        </div>
                    </div>
                </div>

                <div class="gs-card" style="padding: 28px;">
                    <h3 style="font-size: 18px; margin-bottom: 10px;">Are you a current resident?</h3>
                    <p style="font-size: 14px; margin-bottom: 16px;">Sign in to your resident portal for 24/7 maintenance requests, rent payments, and community notifications.</p>
                    <a href="{{ url('/user-login') }}" class="btn-primary-gs btn-pill-gs" style="font-size: 14px; height: 42px;">Resident Login</a>
                </div>
            </div>

        </div>
    </section>

@endsection
