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
</style>
<div class="main-header sticky">
    <div id="google_element"></div>
    <div class="container header">
        <a href="{{ route('index') }}">
            <div class="logo"><img src="{{ asset('website/assets/images/logo1.png') }}"
                    alt="Maisonavenirfragrances  Logo" /></div>
        </a>
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
