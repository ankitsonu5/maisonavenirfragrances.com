<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Fine Niche Fragrances | Maison de l Avenir' }}</title>

    <meta name="description" content="{{ $description ?? 'Fine Niche Fragrances | Maison de l Avenir' }}">
    <link rel="icon" href="{{ asset('website/assets/images/Favicon.png') }}" type="image/x-icon">

    <!-- ✅ 1️⃣ Bootstrap 5 CSS (Core Framework) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ✅ 2️⃣ Google Fonts (If needed, load here) -->
    <!-- Example: <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> -->

    <!-- ✅ 3️⃣ Font Awesome Icons (For UI Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- ✅ 4️⃣ Bootstrap Icons (If needed) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- ✅ 5️⃣ Animate.css (For Animations) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- ✅ 6️⃣ AOS (Animate On Scroll) Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- ✅ 7️⃣ Swiper (For Carousels & Sliders) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- ✅ 8️⃣ Owl Carousel CSS (For Sliders, if used) -->
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.theme.default.min.css') }}">

    <!-- ✅ 9️⃣ Custom CSS (Your Styles) -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/test.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- ✅ 1️⃣0️⃣ Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQG3TFM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <!-- ✅ 1️⃣1️⃣ Google Tag Manager Script -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KQG3TFM5');
    </script>

    <!-- ✅ 1️⃣2️⃣ Open Graph Meta Tags for WhatsApp, Facebook, etc. -->
    <meta property="og:title" content="{{ $title ?? 'Maison de l\'Avenir' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Default description for Maison de l\'Avenir website' }}">
    <meta property="og:image" content="https://maisonavenirfragrances.com/website/assets/images/logo1.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $url ?? request()->url() }}">

    <!-- ✅ 1️⃣3️⃣ Twitter Meta Tags (For Rich Preview on Twitter) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Maison de l\'Avenir' }}">
    <meta name="twitter:description"
        content="{{ $description ?? 'Default description for Maison de l\'Avenir website' }}">
    <meta name="twitter:image" content="https://maisonavenirfragrances.com/website/assets/images/logo1.png">

    @stack('application') <!-- ✅ 1️⃣4️⃣ Blade Stack for Dynamic Scripts -->

</head>


<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/46617843.js"></script>
<!-- End of HubSpot Embed Code -->



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

<meta name="google-site-verification" content="IhlhIM2QIpswK51K3eQMKLEwBnM9dhRr0goM6jQSesw" />

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQG3TFM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="home">
        <div class="div">
            @include('website.layouts.navigation')
            <!-- Page Content -->
            <main class="main">
                {{ $slot }}
            </main>
            @include('website.layouts.footer')
        </div>
    </div>

    <script type="text/javascript">
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // Default page language (English)
                includedLanguages: 'en,es,de,fr,ar', // Allowed languages: English, Spanish, German, French
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_element');
        }
    </script>


    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ asset('website/assets/owlcarousel/js/owl.carousel.js') }}"></script>

    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Function to create a toast
        function createToast(icon, title) {
            Swal.fire({
                toast: true,
                icon: icon,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                dangerMode: true,
                title: title
            });
        }
        // Check for success message
        @if (Session::has('success'))
            createToast('success', `{!! session('success') !!}`);
        @endif

        // Check for error message
        @if (Session::has('error'))
            createToast('error', `{!! session('error') !!}`);
        @endif
    </script>
    <script>
        AOS.init();
    </script>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <!-- Ripples JS CDN -->
    <script src="https://cdn.jsdelivr.net/gh/sirxemic/jquery.ripples/dist/jquery.ripples.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            mousewheel: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                direction: 'vertical',
            },
        });



        var swiper = new Swiper(".profileSwiper", {
            spaceBetween: 15,
            freeMode: true,
            loop: true,
            centeredSlides: true,
            slidesPerView: 3, // Default slides per view for larger screens
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1, // Show 1 slide for any width <= 768px
                },
                768: {
                    slidesPerView: 2, // Show 2 slides for tablets
                },
                1024: {
                    slidesPerView: 3, // Show 3 slides for larger screens
                }
            }
        });
    </script>

    @stack('script')

    <script>
        'use strict';
        const isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (
                    isMobile.Android() ||
                    isMobile.BlackBerry() ||
                    isMobile.iOS() ||
                    isMobile.Opera() ||
                    isMobile.Windows()
                );
            },
        };
        if (isMobile.any()) {
            document.body.classList.add('_touch');
            let menuArrows = document.querySelectorAll('.menu__arrow');
            if (menuArrows.length > 0) {
                for (let index = 0; index < menuArrows.length; index++) {
                    const menuArrow = menuArrows[index];
                    menuArrow.addEventListener('click', function(e) {
                        menuArrow.parentElement.classList.toggle('_active');
                    });
                }
            }
        } else {
            document.body.classList.add('_pc');
        }
        // burger menu
        const iconMenu = document.querySelector('.menu__icon');
        const menuBody = document.querySelector('.menu__body');
        if (iconMenu) {
            iconMenu.addEventListener('click', function(e) {
                document.body.classList.toggle('_lock');
                iconMenu.classList.toggle('_active');
                menuBody.classList.toggle('_active');
            });
        }
        // scroll on click
        const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
        if (menuLinks.length > 0) {
            menuLinks.forEach((menuLink) => {
                menuLink.addEventListener('click', onMenuLinkClick);
            });

            function onMenuLinkClick(e) {
                const menuLink = e.target;
                if (
                    menuLink.dataset.goto &&
                    document.querySelector(menuLink.dataset.goto)
                ) {
                    const gotoBlock = document.querySelector(menuLink.dataset.goto);
                    const gotoBlockValue =
                        gotoBlock.getBoundingClientRect().top +
                        pageYOffset -
                        document.querySelector('.header').offsetHeight;
                    if (iconMenu.classList.contains('_active')) {
                        document.body.classList.remove('_lock');
                        iconMenu.classList.remove('_active');
                        menuBody.classList.remove('_active');
                        // auto close sub-menu
                        if (
                            menuBody.dataset.sub_menu_auto_close &&
                            document.body.classList.contains('_touch')
                        ) {
                            let menuArrows = document.querySelectorAll('.menu__arrow');
                            for (let index = 0; index < menuArrows.length; index++) {
                                menuArrows[index].parentElement.classList.remove('_active');
                            }
                        }
                    }
                    window.scrollTo({
                        top: gotoBlockValue,
                        behavior: 'smooth',
                    });
                    e.preventDefault();
                }
            }
        }
    </script>


    <script>
        $(document).ready(() => {
            $(".ripple").ripples({
                resolution: 256, // Slightly lower for lighter processing (still smooth)
                dropRadius: 10, // Chhota ripple circle
                perturbance: 0.02 // Very soft distortion, natural feel
            });


            $(".ripple").on("mouseenter", function(e) {
                const $el = $(this);
                const offset = $el.offset();
                const x = e.pageX - offset.left;
                const y = e.pageY - offset.top;
                const dropRadius = 40;
                const strength = 0.06;

                $el.ripples("drop", x, y, dropRadius, strength);
            });
        });



    </script>


</body>

</html>
