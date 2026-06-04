@php
    // Define the active class based on the current route
    function isActiveRoute($route)
    {
        return request()->routeIs($route) ? 'active' : '';
    }
@endphp
<style>
    .active {
        color: #CAB651 !important;

    }

    .store-dropdown {
        position: relative;
        display: inline-flex;
        align-items: center;
    }

    .store-dropdown-btn {
        background: transparent;
        border: 1px solid rgba(202, 182, 81, 0.5);
        color: #CAB651;
        font-family: var(--font-family-raleway);
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 6px 12px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
        border-radius: 3px;
        transition: background 0.2s, border-color 0.2s;
        white-space: nowrap;
    }

    .store-dropdown-btn:hover {
        background: rgba(202, 182, 81, 0.1);
        border-color: #CAB651;
    }

    .store-dropdown-btn svg {
        transition: transform 0.2s;
    }

    .store-dropdown.open .store-dropdown-btn svg {
        transform: rotate(180deg);
    }

    .store-dropdown-menu {
        display: none;
        position: absolute;
        top: calc(100% + 8px);
        left: 0;
        background: #111;
        border: 1px solid rgba(202, 182, 81, 0.3);
        border-radius: 4px;
        min-width: 200px;
        z-index: 9999;
        padding: 8px 0;
        box-shadow: 0 8px 24px rgba(0,0,0,0.5);
    }

    .store-dropdown.open .store-dropdown-menu {
        display: block;
    }

    .store-region-label {
        color: rgba(202, 182, 81, 0.7);
        font-family: var(--font-family-raleway);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        padding: 8px 16px 4px;
    }

    .store-region-label:not(:first-child) {
        margin-top: 4px;
        border-top: 1px solid rgba(255,255,255,0.07);
        padding-top: 12px;
    }

    .store-dropdown-menu a {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 7px 16px;
        color: #e8e8e8;
        font-family: var(--font-family-raleway);
        font-size: 13px;
        text-decoration: none;
        transition: color 0.15s, background 0.15s;
    }

    .store-dropdown-menu a:hover {
        color: #CAB651;
        background: rgba(202, 182, 81, 0.07);
    }

    .store-platform-icon {
        width: 16px;
        height: 16px;
        opacity: 0.8;
        flex-shrink: 0;
    }
</style>
<div class="main-header sticky">
    <div id="google_element"></div>
    <div class="container header">
        <div style="display:flex;align-items:center;gap:14px;">
            <a href="{{ route('index') }}">
                <div class="logo"><img src="{{ asset('website/assets/images/logo1.png') }}"
                        alt="Maisonavenirfragrances Logo" /></div>
            </a>

            <div class="store-dropdown" id="storeDropdown">
                <button class="store-dropdown-btn" onclick="toggleStoreDropdown(event)">
                    Shop
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 5L9 1" stroke="#CAB651" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="store-dropdown-menu">
                    <div class="store-region-label">🇺🇸 USA</div>
                    <a href="https://www.amazon.com/stores/MaisondelAvenir/page/3F0C1D08-9912-4D12-9C59-ED843A98A69D" target="_blank" rel="noopener">
                        <img class="store-platform-icon" src="{{ asset('website/assets/images/amazon-icon.png') }}" onerror="this.style.display='none'" alt="">
                        Amazon
                    </a>
                    <a href="https://www.walmart.com/browse/0?facet=brand:Maison+de+l%27Avenir" target="_blank" rel="noopener">
                        <img class="store-platform-icon" src="{{ asset('website/assets/images/walmart-icon.png') }}" onerror="this.style.display='none'" alt="">
                        Walmart
                    </a>
                    <a href="https://shop.tiktok.com/us/store/maisonavenirfragrances/7494350730020750686" target="_blank" rel="noopener">
                        <img class="store-platform-icon" src="{{ asset('website/assets/images/tiktok-icon.png') }}" onerror="this.style.display='none'" alt="">
                        TikTok Shop
                    </a>

                    <div class="store-region-label">🇬🇧 UK</div>
                    <a href="https://www.amazon.co.uk/stores/MaisondelAvenir/page/4273DE2E-EAC2-497F-9B6C-2B8461D524CC" target="_blank" rel="noopener">
                        <img class="store-platform-icon" src="{{ asset('website/assets/images/amazon-icon.png') }}" onerror="this.style.display='none'" alt="">
                        Amazon
                    </a>

                    <div class="store-region-label">🇦🇪 UAE</div>
                    <a href="https://www.amazon.ae/stores/MaisondelAvenir/page/26034A66-CEA0-4354-A7F5-DEF7BE62C087" target="_blank" rel="noopener">
                        <img class="store-platform-icon" src="{{ asset('website/assets/images/amazon-icon.png') }}" onerror="this.style.display='none'" alt="">
                        Amazon
                    </a>
                    <a href="https://www.noon.com/uae-en/~maisondelavenir/" target="_blank" rel="noopener">
                        <img class="store-platform-icon" src="{{ asset('website/assets/images/noon-icon.png') }}" onerror="this.style.display='none'" alt="">
                        Noon
                    </a>
                </div>
            </div>
        </div>
        <div class="menu__icon">
            <span></span>
        </div>
        <nav data-sub_menu_auto_close="true" class="nav menu__body">
            <ul class="menu__list">
                <li><a href="{{ route('aifragrancefinder') }}" class="{{ isActiveRoute('aifragrancefinder') }}">AI
                        Fragrance
                        Finder</a></li>

                <li><a href="{{ route('fragrancematchmaker') }}" class="{{ isActiveRoute('fragrancematchmaker') }}">
                        Fragrance
                        Matchmaker</a></li>
                <li>
                    <a href="{{ route('ourfragrance') }}"
                        class="{{ isActiveRoute(['ourfragrance', 'fragrancedetail']) }}">Our Fragrances</a>
                </li>



                <li><a href="{{ route('about') }}" class="{{ isActiveRoute('about') }}">Our Story
                    </a></li>

                <li><a href="{{ route('scentopia.index') }}" class="{{ isActiveRoute('scentopia.index') }}">Scentopia
                    </a></li>


                {{-- <li><a href="{{ route('faq') }}" class="{{ isActiveRoute('faq') }}">Faq</a></li> --}}

                <li><a href="{{ route('contact') }}" class="{{ isActiveRoute('contact') }}">Contact Us</a></li>


            </ul>
            <div class="mobile-footer-bottom md-none ml00">
                <ul>
                    <li><a href="https://www.facebook.com/maisonavenirfragrance/" class=""><img
                                src="{{ asset('website/assets/images/Group23.png') }}" alt="Facebook Icon" /></a></li>
                    <li><a href="https://www.tiktok.com/@maisonavenirfragrances" class=""><img
                                src="{{ asset('website/assets/images/Group24.png') }}" alt="TikTok Icon" /></a></li>
                    <li><a href="https://www.instagram.com/maisonavenirfragrances/" class=""><img
                                src="{{ asset('website/assets/images/Group25.png') }}" alt="Instagram Icon" /></a></li>
                    <li><a href="https://www.youtube.com/@maisonavenirfragrances" class=""><img
                                src="{{ asset('website/assets/images/Group26.png') }}" alt="YouTube Icon" /></a></li>
                </ul>
        </nav>
    </div>
</div>

<script>
    function toggleStoreDropdown(e) {
        e.stopPropagation();
        document.getElementById('storeDropdown').classList.toggle('open');
    }

    document.addEventListener('click', function () {
        document.getElementById('storeDropdown').classList.remove('open');
    });
</script>
