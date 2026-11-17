<!-- ==========================================================================
     Greystar Modern Footer Component
     ========================================================================== -->
<footer class="gs-footer" role="contentinfo">
    <div class="gs-container">
        <div class="gs-footer-grid">
            <!-- Col 1: Find a rental -->
            <div class="gs-footer-col">
                <h4>Find a rental</h4>
                <ul class="gs-footer-links">
                    <li><a href="{{ url('/projects') }}">Search for homes</a></li>
                    <li><a href="{{ url('/projects') }}">Homes to rent</a></li>
                    <li><a href="{{ url('/projects') }}">Location guides</a></li>
                </ul>
            </div>

            <!-- Col 2: Renters resources -->
            <div class="gs-footer-col">
                <h4>Renters resources</h4>
                <ul class="gs-footer-links">
                    <li><a href="{{ url('/blogs') }}">Avoid rental scams</a></li>
                    <li><a href="{{ url('/blogs') }}">Renters' resources</a></li>
                    <li><a href="{{ url('/blogs') }}">Renters' rights & resources</a></li>
                    <li><a href="{{ url('/contact-us') }}">Customer help</a></li>
                </ul>
            </div>

            <!-- Col 3: Company -->
            <div class="gs-footer-col">
                <h4>Company</h4>
                <ul class="gs-footer-links">
                    <li><a href="{{ url('/about-us') }}">Why rent with us</a></li>
                    <li><a href="{{ url('/blogs') }}">Greystar Blog</a></li>
                    <li><a href="{{ url('/about-us') }}">Careers at Greystar</a></li>
                    <li><a href="{{ url('/about-us') }}">Business services</a></li>
                </ul>
            </div>

            <!-- Col 4: Partners & regions -->
            <div class="gs-footer-col">
                <h4>Partners & regions</h4>
                <ul class="gs-footer-links">
                    <li><a href="{{ url('/about-us') }}">Regions</a></li>
                    <li><a href="{{ url('/about-us') }}">Product Specialties</a></li>
                </ul>
            </div>

            <!-- Col 5: Legal & settings -->
            <div class="gs-footer-col">
                <h4>Legal & settings</h4>
                <ul class="gs-footer-links">
                    <li><a href="{{ url('/termsconditions') }}">Privacy</a></li>
                    <li><a href="{{ url('/termsconditions') }}">Terms & conditions</a></li>
                    <li><a href="{{ url('/termsconditions') }}">Disclosures & licenses</a></li>
                    <li><a href="{{ url('/termsconditions') }}">DMCA</a></li>
                    <li><a href="#cookie-settings" id="openCookieSettings">Customize Cookie Settings</a></li>
                    <li><a href="{{ url('/termsconditions') }}">Website accessibility</a></li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="gs-footer-divider"></div>

        <!-- Brand Row: White Wordmark + Socials -->
        <div class="gs-footer-brand-row">
            <a href="{{ url('/') }}" aria-label="Greystar Homepage">
                <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_19_GreystarLogo_Navy_NoTagline.png') }}" alt="Greystar" style="filter: brightness(0) invert(1); height: 26px; width: auto;">
            </a>

            <div class="gs-footer-socials">
                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="gs-footer-social-link" aria-label="X (formerly Twitter)">
                    <svg viewBox="0 0 24 24"><path d="M14.893 18.356 6.79 5.626h2.305l8.103 12.73h-2.311zm4.004.3-4.977-7.83 4.914-5.404a.66.66 0 0 0 .159-.459.63.63 0 0 0-.21-.44.633.633 0 0 0-.892.04l-4.678 5.149-3.221-5.06a.62.62 0 0 0-.535-.294H5.638a.64.64 0 0 0-.56.331.628.628 0 0 0 .025.643l4.985 7.83-4.915 5.41a.7.7 0 0 0-.133.21.55.55 0 0 0-.038.249.64.64 0 0 0 .203.445.6.6 0 0 0 .217.128.8.8 0 0 0 .248.038.55.55 0 0 0 .242-.064.6.6 0 0 0 .197-.153l4.679-5.15 3.22 5.061c.058.09.14.166.23.217a.64.64 0 0 0 .305.076h3.82a.66.66 0 0 0 .324-.09.66.66 0 0 0 .236-.24.627.627 0 0 0-.025-.643"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="gs-footer-social-link" aria-label="LinkedIn">
                    <svg viewBox="0 0 16 17"><path d="M13.077 3.252H2.923A.923.923 0 0 0 2 4.175v10.154a.923.923 0 0 0 .923.923h10.154a.923.923 0 0 0 .923-.923V4.175a.923.923 0 0 0-.923-.923m0 11.077H2.923V4.175h10.154zm-6.923-6v3.692a.461.461 0 1 1-.923 0V8.33a.462.462 0 0 1 .923 0m5.077 1.615v2.077a.462.462 0 0 1-.923 0V9.944a1.154 1.154 0 0 0-2.308 0v2.077a.461.461 0 1 1-.923 0V8.33a.462.462 0 0 1 .91-.103 2.077 2.077 0 0 1 3.244 1.718m-4.846-3.23a.692.692 0 1 1-1.385 0 .692.692 0 0 1 1.385 0"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="gs-footer-social-link" aria-label="Instagram">
                    <svg viewBox="0 0 16 17"><path d="M8.167 5.906a2.846 2.846 0 1 0 0 5.693 2.846 2.846 0 0 0 0-5.693m0 4.744a1.897 1.897 0 1 1 0-3.795 1.897 1.897 0 0 1 0 3.795m2.846-8.064H5.32A3.324 3.324 0 0 0 2 5.906V11.6a3.324 3.324 0 0 0 3.32 3.32h5.693a3.324 3.324 0 0 0 3.32-3.32V5.906a3.324 3.324 0 0 0-3.32-3.32m2.372 9.013a2.37 2.37 0 0 1-2.372 2.372H5.32a2.37 2.37 0 0 1-2.372-2.372V5.906A2.37 2.37 0 0 1 5.32 3.535h5.692a2.37 2.37 0 0 1 2.372 2.371zm-1.424-5.93a.711.711 0 1 1-1.422 0 .711.711 0 0 1 1.422 0"/></svg>
                </a>
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="gs-footer-social-link" aria-label="Facebook">
                    <svg viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                </a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="gs-footer-copyright">&copy; 2026 Greystar Worldwide, LLC</div>

        <!-- Also of Interest -->
        <div class="gs-footer-interest">
            <span>Also of Interest: </span>
            <a href="{{ url('/projects') }}">Apartments for Rent in New York City</a> | 
            <a href="{{ url('/projects') }}">1 Bedroom Apartments for Rent in Charlotte, NC</a> | 
            <a href="{{ url('/projects') }}">Apartments for Rent in Phoenix, AZ</a>
        </div>

        <!-- Legal fine-print & Equal Housing Opportunity -->
        <div class="gs-footer-disclaimer-row">
            <svg class="gs-equal-housing-svg" viewBox="0 0 130 23" aria-label="Equal Housing Opportunity">
                <path fill="#fff" fill-rule="evenodd" d="M15.995.571.5 8.212v3.59h1.735v10.767H29.64V11.802h2.083v-3.59zm10.292 18.755H5.588v-9.84l10.407-5.325 10.292 5.326z"/>
                <path fill="#fff" fill-rule="evenodd" d="M20.736 12.958h-9.597V9.486h9.597zM20.736 17.939h-9.597v-3.475h9.597z"/>
            </svg>
            <div>
                This website is for informational purposes only and does not constitute an offer, solicitation, or recommendation to sell or an offer to purchase any securities, investment products, or investment advisory services. Equal Housing Opportunity. All content, pricing, availability and amenities subject to change without notice. <a href="{{ url('/termsconditions') }}" style="color: #FFFFFF; text-decoration: underline;">Privacy Policy</a>.
            </div>
        </div>
    </div>
</footer>

<!-- ==========================================================================
     Cookie Banner Bar
     ========================================================================== -->
<aside class="gs-cookie-bar" id="gsCookieBar" aria-label="Cookie consent banner">
    <div class="gs-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
        <div>
            By clicking "Accept All Cookies", you agree to the storing of cookies on your device to enhance site navigation, analyse site usage, and assist in our marketing efforts. View our <a href="{{ url('/termsconditions') }}">Cookie Notice</a>.
        </div>
        <div class="gs-cookie-buttons">
            <button type="button" class="btn-cookie-settings" id="btnCookieSettings">Customize Settings</button>
            <button type="button" class="btn-cookie-accept" id="btnCookieAccept">Accept All Cookies</button>
        </div>
    </div>
</aside>

<!-- Shared Client Scripts for Header/Drawer/Cookies -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Sticky Header Frosted State
        const header = document.getElementById('gsHeader');
        if (header) {
            function updateHeaderOnScroll() {
                if (window.scrollY > 30) {
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.remove('is-scrolled');
                }
            }
            window.addEventListener('scroll', updateHeaderOnScroll, { passive: true });
            updateHeaderOnScroll();
        }

        // Slide-out Drawer Menu
        const drawerOverlay = document.getElementById('gsDrawerOverlay');
        const drawerOpenBtn = document.getElementById('gsDrawerOpen');
        const drawerCloseBtn = document.getElementById('gsDrawerClose');

        function openDrawer() {
            if (!drawerOverlay) return;
            drawerOverlay.classList.add('is-active');
            drawerOverlay.setAttribute('aria-hidden', 'false');
            if (drawerOpenBtn) drawerOpenBtn.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }

        function closeDrawer() {
            if (!drawerOverlay) return;
            drawerOverlay.classList.remove('is-active');
            drawerOverlay.setAttribute('aria-hidden', 'true');
            if (drawerOpenBtn) drawerOpenBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        if (drawerOpenBtn) drawerOpenBtn.addEventListener('click', openDrawer);
        if (drawerCloseBtn) drawerCloseBtn.addEventListener('click', closeDrawer);
        if (drawerOverlay) {
            drawerOverlay.addEventListener('click', function (e) {
                if (e.target === drawerOverlay) closeDrawer();
            });
        }

        // Keyboard close
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && drawerOverlay && drawerOverlay.classList.contains('is-active')) {
                closeDrawer();
            }
        });

        // Renters Resources Accordion inside drawer
        const accordionBtn = document.getElementById('rentersAccordionBtn');
        const accordionContent = document.getElementById('rentersAccordionContent');
        if (accordionBtn && accordionContent) {
            accordionBtn.addEventListener('click', function () {
                const isOpen = accordionContent.classList.contains('is-open');
                if (isOpen) {
                    accordionContent.classList.remove('is-open');
                    accordionBtn.setAttribute('aria-expanded', 'false');
                } else {
                    accordionContent.classList.add('is-open');
                    accordionBtn.setAttribute('aria-expanded', 'true');
                }
            });
        }

        // Heart Favorite Buttons toggle
        document.querySelectorAll('.gs-card-fav-btn').forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                this.classList.toggle('is-active');
                const isFav = this.classList.contains('is-active');
                this.setAttribute('aria-label', isFav ? 'Remove from favorites' : 'Save to favorites');
            });
        });

        // Cookie Consent
        const cookieBar = document.getElementById('gsCookieBar');
        const btnCookieAccept = document.getElementById('btnCookieAccept');
        const btnCookieSettings = document.getElementById('btnCookieSettings');

        if (btnCookieAccept && cookieBar) {
            btnCookieAccept.addEventListener('click', function () {
                cookieBar.style.display = 'none';
                try { localStorage.setItem('gs_cookies_accepted', 'true'); } catch (err) {}
            });
        }
        if (btnCookieSettings && cookieBar) {
            btnCookieSettings.addEventListener('click', function () {
                cookieBar.style.display = 'none';
            });
        }
        try {
            if (localStorage.getItem('gs_cookies_accepted') === 'true') {
                if (cookieBar) cookieBar.style.display = 'none';
            }
        } catch (err) {}
    });
</script>
