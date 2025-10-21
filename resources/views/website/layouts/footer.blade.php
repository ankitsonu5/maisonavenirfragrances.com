<div class="container-fluid mt-4 footer sm-none">
    <div class="row   colstyle">
        <div class="col-md-7 text-start   footer-content footer-border  col-sm-12">
            <img class="footerlogo" src="{{ asset('website/assets/images/footerlogo.png') }}"
                alt="Maisonavenirfragrances  " />
            <h2 class="d-none">Maison de l’Avenir</h2>
            <p class="mt-3 w-75  fmobile pr-7">
                Welcome to “Maison de l’Avenir” - the House of the Future. A sanctuary of opulence and exquisite
                craftsmanship. Our lineage, tracing back to 1974, is now being reimagined by the third-generation
                perfumer, Sunit Sheth, who, with a legacy of fragrance mastery behind him, has forged a new path,
                crafting a successor brand that speaks to the modern connoisseur. Check out our custom AI Fragrance
                Finder, that will allow you to create a personalized olfactory experience.
            </p>
        </div>
        <div class="col-md-3  footer-content footer-border  col-sm-6">
            <h5>Explore </h5>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><a href="{{ route('aifragrancefinder') }}">AI Fragrance Finder</a></li>
                        <li><a href="{{ route('fragrancematchmaker') }}">Fragrance Matchmaker </a></li>
                        <li><a href="{{ route('ourfragrance') }}">Our Fragrances</a></li>
                        <li><a href="{{ route('about') }}">Our Story </a></li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="{{ route('contact') }}">Contact Us </a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('ourfounder') }}">Our Founder</a></li>
                        <li><a href="{{ route('faq') }}">FAQs </a></li>
                        {{-- <li><a href="{{ route('scentopia.index') }}">scentopia </a></li> --}}
                    </ul>
                </div>
            </div>


        </div>
        {{-- <div class="col-md-3  footer-content footer-border footer-social">
            <h5>Follow </h5>
            <ul>
                <li><a href="https://www.facebook.com/maisonavenirfragrance/">Facebook</a></li>
                <li><a href="https://www.instagram.com/maisonavenirfragrances/">Instagram</a></li>
                <li><a href="https://www.youtube.com/@maisonavenirfragrances">Youtube</a></li>
                <li><a href="https://www.tiktok.com/@maisonavenirfragrances">TikTok</a></li>
            </ul>
        </div> --}}
        <div class="col-md-2  footer-content   col-sm-6">
            <h5>Contact </h5>
            {{-- <p>Scion International LLC </p>
            <p> PO Box number - 5551 Dubai, U.A.E</p>
            <p><a href="tel:+97165332755">+97165332755</a></p> --}}
            <p><a href="mailto:info@maisonavenirfragrances.com">Info@maisonavenirfragrances.com </a></p>
            <h5>Follow </h5>
            <div class="  flex justify-center space-x-4 mb-8">

                <a href="https://www.facebook.com/maisonavenirfragrance/" class="mx-2"><img
                        src="{{ asset('website/assets/images/Group23.png') }}" alt="Instagram Icon"
                        class="w-6 h-6" /></a>
                <a href="https://www.tiktok.com/@maisonavenirfragrances" class="mx-2"><img
                        src="{{ asset('website/assets/images/Group24.png') }}" alt="Facebook Icon"
                        class="w-6 h-6" /></a>
                <a href="https://www.instagram.com/maisonavenirfragrances/" class="mx-2"><img
                        src="{{ asset('website/assets/images/Group25.png') }}" alt="YouTube Icon"
                        class="w-6 h-6" /></a>
                <a href="https://www.youtube.com/@maisonavenirfragrances" class="mx-2"><img
                        src="{{ asset('website/assets/images/Group26.png') }}" alt="TikTok Icon" class="w-6 h-6" /></a>


                <a href=" https://www.pinterest.com/maisonavenirfragrances/" class="mx-2"><img
                        src="{{ asset('website/assets/images/pinterest.svg') }}" class="pinterest" alt="pinterest Icon"
                        class="w-6 h-6" /></a>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom d-none d-sm-flex justify-content-between align-items-center  text-white">
    <div class=" text-center text-sm-start">
        <p class="mx-5">© {{ date('Y') }} Maison de l'Avenir. All Rights Reserved.</p>
    </div>
    <div class=" text-center text-sm-end">
        <p class="policy"> <a href="{{ route('privacypolicy') }}"> Privacy Policy​ </a> | <a
                href="{{ route('cookiepolicy') }}">
                Cookies Policy </a> ​</p>
    </div>
</div>


<!-- for mobile -->

<div class="bg-black     md-none text-white   ">
    <!-- Logo Section -->
    <div class=" pt-2  border-top px-3 mb-6">
        <img class="footerlogo mx-auto" src="{{ asset('website/assets/images/footerlogo.png') }}"
            alt="Maison de l'Avenir Logo" />
    </div>

    <!-- Description -->
    <div class="  border-bottom mt-2   mb-8">
        <p class="px-3  fmobile">
            Welcome to “Maison de l’Avenir” - the House of the Future. A sanctuary of opulence and exquisite
            craftsmanship. Our lineage, tracing back to 1974, is now being reimagined by the third-generation
            perfumer, Sunit Sheth, who, with a legacy of fragrance mastery behind him, has forged a new path,
            crafting a successor brand that speaks to the modern connoisseur. Check out our custom AI Fragrance
            Finder, that will allow you to create a personalized olfactory experience.
        </p>
    </div>
    <div class="mx-3 mt-2">
        <!-- Explore Section -->
        <div class="mt-3 border-bottom ">
            <h4 class="text-lg font-bold">Explore</h4>
            <ul style="list-style: none" class="text-sm space-y-2 p-0 mt-4">
                <li><a href="{{ route('aifragrancefinder') }}" class="hover:underline">AI Fragrance Finder</a></li>
                <li><a href="{{ route('fragrancematchmaker') }}" class="hover:underline">Fragrance Matchmaker </a></li>
                <li><a href="{{ route('ourfragrance') }}" class="hover:underline">Our Fragrances</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">Our Story</a></li>

                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('ourfounder') }}">Our Founder</a></li>
                <li><a href="{{ route('faq') }}" class="hover:underline">FAQs </a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us </a></li>
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="mt-3 border-bottom ">
            <h4 class="text-lg font-bold">Contact Us</h4>
            <p class="text-sm mt-2">
                <a href="mailto:info@maisonavenirfragrances.com"
                    class="hover:underline">info@maisonavenirfragrances.com</a>
            </p>
        </div>

        <!-- Privacy and Cookies Policy -->
        <div class="mt-3 pb-3 border-bottom ">
            <div class="text-sm  d-flex space-x-4">
                <div><a href="{{ route('privacypolicy') }}" class="  hover:underline">Privacy Policy</a></div>
                <div><a href="{{ route('cookiepolicy') }}" class="mx-4">Cookies Policy</a></div>
            </div>
        </div>

        <!-- Social Media Icons -->
        <h4 class=" mt-3 text-lg font-bold">Follow</h4>

        <div class="  flex justify-center space-x-4 mb-8">

            <a href="https://www.facebook.com/maisonavenirfragrance/" class="mx-2"><img
                    src="{{ asset('website/assets/images/Group23.png') }}" alt="Instagram Icon" class="w-6 h-6" /></a>
            <a href="https://www.tiktok.com/@maisonavenirfragrances" class="mx-2"><img
                    src="{{ asset('website/assets/images/Group24.png') }}" alt="Facebook Icon"
                    class="w-6 h-6" /></a>
            <a href="https://www.instagram.com/maisonavenirfragrances/" class="mx-2"><img
                    src="{{ asset('website/assets/images/Group25.png') }}" alt="YouTube Icon" class="w-6 h-6" /></a>
            <a href="https://www.youtube.com/@maisonavenirfragrances" class="mx-2"><img
                    src="{{ asset('website/assets/images/Group26.png') }}" alt="TikTok Icon" class="w-6 h-6" /></a>
            <a href=" https://www.pinterest.com/maisonavenirfragrances/" class="mx-2"><img
                    src="{{ asset('website/assets/images/pinterest.svg') }}" class="pinterest" alt="pinterest Icon"
                    class="w-6 h-6" /></a>
        </div>

        <!-- Copyright Section -->
        <div class="text-start  mt-3  ">
            <p style="font-size: 14px">© 2024 Maison de l'Avenir. All Rights Reserved.</p>
        </div>
    </div>
</div>

<!-- Cookie Popup as Full-Width Strip -->
<div id="cookiePopup" style="display: none;">
    <!-- Initially hidden -->
    <div class="cookie-content">
        <div class="para">
            <p>By clicking "Accept Cookies", you agree to our use of cookies to improve your browsing experience.
            </p>
        </div>
        <div class="cookie-buttons">
            <button class="btn accept-btn" onclick="acceptCookies()">Accept Cookies</button>
            <button class="btn reject-btn" onclick="rejectCookies()">Reject Cookies</button>
        </div>
    </div>

    <button class="btn close-btn" onclick="closePopup()">&#10006;</button>
</div>


<script>
    // Function to set cookies
    function setCookie(name, value, days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        let expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Function to get cookies
    function getCookie(name) {
        let cookieArr = document.cookie.split(";");
        for (let i = 0; i < cookieArr.length; i++) {
            let cookiePair = cookieArr[i].split("=");
            if (name == cookiePair[0].trim()) {
                return decodeURIComponent(cookiePair[1]);
            }
        }
        return null;
    }

    // Function to show the popup if cookies are not accepted
    function checkCookie() {
        let cookieConsent = getCookie("cookie_consent");
        if (!cookieConsent || cookieConsent !== "accepted") {
            document.getElementById("cookiePopup").style.display = "flex";
        }
    }

    // Function to accept cookies
    function acceptCookies() {
        setCookie("cookie_consent", "accepted", 30);
        document.getElementById("cookiePopup").style.display = "none";
    }

    // Function to reject cookies
    function rejectCookies() {
        setCookie("cookie_consent", "rejected", 30);
        document.getElementById("cookiePopup").style.display = "none";
    }

    // Function to close the popup
    function closePopup() {
        document.getElementById("cookiePopup").style.display = "none";
    }

    // Run the check on page load
    window.onload = checkCookie;
</script>
