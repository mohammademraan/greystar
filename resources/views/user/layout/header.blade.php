<!-- ==========================================================================
     Greystar Modern Header (Sticky & Frosted Glass)
     ========================================================================== -->
<header class="gs-header" id="gsHeader">
    <div class="gs-container">
        <div class="gs-header-inner">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="gs-logo-link" aria-label="Greystar Homepage">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_19_GreystarLogo_Navy_NoTagline.png') }}" alt="Greystar" class="gs-logo-img">
            </a>

            <!-- Desktop Nav & Actions -->
            <nav class="gs-desktop-nav" aria-label="Main Navigation">
                <ul class="gs-nav-links">
                    <li><a href="{{ url('/projects') }}" class="gs-nav-link">Homes to rent</a></li>
                    <li>
                        <a href="{{ url('/blogs') }}" class="gs-nav-link">
                            Renters' Resources
                            <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                    <li><a href="{{ url('/about-us') }}" class="gs-nav-link">Why rent with us</a></li>
                    <li><a href="{{ url('/contact-us') }}" class="gs-nav-link">Contact us</a></li>
                    <li><a href="{{ url('/user-login') }}" class="gs-nav-link">Current residents</a></li>
                    <li><a href="{{ url('/about-us') }}" class="gs-nav-link">Business services</a></li>
                </ul>

                <div class="gs-header-actions">
                    <!-- Favorites / Wishlist counter -->
                    <a href="{{ url('/projects') }}" class="gs-heart-counter-btn" aria-label="Favorites list, 0 saved homes">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                        <span>(0)</span>
                    </a>

                    <!-- Hamburger Toggle Button -->
                    <button type="button" class="gs-hamburger-btn" id="gsDrawerOpen" aria-label="Open main menu" aria-expanded="false" aria-controls="gsDrawerPanel">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- ==========================================================================
     Slide-in Navigation Drawer
     ========================================================================== -->
<div class="gs-drawer-overlay" id="gsDrawerOverlay" aria-hidden="true">
    <aside class="gs-drawer-panel" id="gsDrawerPanel" role="dialog" aria-modal="true" aria-label="Site menu">
        <div class="gs-drawer-header">
            <a href="{{ url('/projects') }}" class="gs-heart-counter-btn" aria-label="Favorites list, 0 saved homes">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                </svg>
                <span>(0)</span>
            </a>
            <button type="button" class="gs-drawer-close-btn" id="gsDrawerClose" aria-label="Close menu">&times;</button>
        </div>

        <nav class="gs-drawer-nav">
            <ul class="gs-drawer-list">
                <li><a href="{{ url('/projects') }}" class="gs-drawer-link">Homes to rent</a></li>
                <li>
                    <button type="button" class="gs-drawer-link gs-accordion-trigger" id="rentersAccordionBtn" aria-expanded="false">
                        <span>Renters' Resources</span>
                        <svg viewBox="0 0 12 12" width="12" height="12" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="gs-accordion-content" id="rentersAccordionContent">
                        <a href="{{ url('/blogs') }}">Avoid rental scams</a>
                        <a href="{{ url('/blogs') }}">Renters' rights & resources</a>
                        <a href="{{ url('/projects') }}">Location guides</a>
                        <a href="{{ url('/contact-us') }}">Customer help</a>
                    </div>
                </li>
                <li><a href="{{ url('/about-us') }}" class="gs-drawer-link">Why rent with us</a></li>
                <li><a href="{{ url('/contact-us') }}" class="gs-drawer-link">Contact us</a></li>
                <li><a href="{{ url('/user-login') }}" class="gs-drawer-link">Current residents</a></li>
                <li><a href="{{ url('/about-us') }}" class="gs-drawer-link">Business services</a></li>
                <li style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-surface);">
                    <a href="{{ url('/user-login') }}" class="btn-primary-gs" style="width: 100%; justify-content: center;">Sign In to Account</a>
                </li>
            </ul>
        </nav>
    </aside>
</div>
