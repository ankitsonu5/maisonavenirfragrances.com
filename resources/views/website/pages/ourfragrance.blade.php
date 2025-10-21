<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Fragrance Store | Maison de l’Avenir Online Shop
    </title>

    <meta name="description"
        content="Explore Maison de l’Avenir’s luxury fragrances online. Discover signature scents from the Elixir, Supernova, Zenith, and Aura collections worldwide.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" href="{{ asset('website/assets/images/Favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('website/assets/css/test.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}" />


    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Start of HubSpot Embed Code -->

    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/46617843.js"></script>

    <!-- End of HubSpot Embed Code -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQG3TFM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager -->
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
    <!-- End Google Tag Manager -->



</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQG3TFM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="home">
        <div class="div">
            @include('website.layouts.navigation')

            @foreach ($data as $list)
                <div id="{{ $list->name }}" class="container mt-50">
                    <header class="header-bar">
                        <div class="header-title">
                            {{ $list->name }}
                        </div>
                    </header>
                    <div class="row owl-carousel owl-theme owl-carousel-{{ $loop->index }}">
                        <!-- Unique class for each carousel -->
                        @foreach ($list->products as $row)
                            <div class="card card-custom">
                                <img src="{{ asset('storage/product/' . $row->card_image) }}" alt="Electra Elixir">
                                <h5 class="productname">{{ $row->name }}</h5>
                                <p class="fragrance">{{ $row->fragrance_family }}</p>
                                <p class="shortdescription">{{ $row->short_description }}</p>
                                <div class="icon-container">
                                    @if ($row->vegan)
                                        <div>
                                            <img class="icone" src="{{ asset('website/assets/homeicone/6.png') }}"
                                                alt="Floral Icon">
                                            <p>{!! $row->vegan !!}</p>
                                        </div>
                                    @endif

                                    @if ($row->natural_oils)
                                        <div>
                                            <img class="icone" src="{{ asset('website/assets/homeicone/4.png') }}"
                                                alt="Aqua Icon">
                                            <p>{!! $row->natural_oils !!}</p>
                                        </div>
                                    @endif

                                    @if ($row->essential_oils)
                                        <div>
                                            <img class="icone" src="{{ asset('website/assets/homeicone/5.png') }}"
                                                alt="Woody Icon">
                                            <p>{!! $row->essential_oils !!}</p>
                                        </div>
                                    @endif


                                </div>

                                <div class="button-wrapper">
                                    <a href="{{ route('fragrancedetail', $row->slug) }}"
                                        class="know-more-btn cardbtn">Know
                                        More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach



            <div class="container mb-120">
                <p class="sub-title mobil-subtitle my-5 text-center fs-3-2">
                    Can’t decide? Let our AI Fragrance Finder and <br>
                    Fragrance Matchmaker hook you up
                </p>

                <div class=" my-5">
                    <div class="  navgationbox  ">
                        <div class=" mx-5 mb-4 ">
                            <a href="{{ route('aifragrancefinder') }}"> <img
                                    src="{{ asset('website/assets/images/Ai-FF_Mobile.png') }}"
                                    class=" cardboximg   img-fluid" alt="AI Fragrance Finder"></a>

                        </div>
                        <div class="  mx-5 mb-4 ">
                            <a href="{{ route('fragrancematchmaker') }}"> <img
                                    src="{{ asset('website/assets/images/FMM_Desktop.png') }}"
                                    class=" cardboximg img-fluid" alt="Fragrance Matchmaker"> </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">


                <div class="profile-card">
                    <!-- Place <div> tag where you want the feed to appear -->
                    <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                            class="crt-logo crt-tag">Powered by Curator.io</a></div>

                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                    <script type="text/javascript">
                        /* curator-feed-default-feed-layout */
                        (function() {
                            var i, e, d = document,
                                s = "script";
                            i = d.createElement("script");
                            i.async = 1;
                            i.charset = "UTF-8";
                            i.src = "https://cdn.curator.io/published/2470dd23-133f-4f26-97b3-f259119c2763.js";
                            e = d.getElementsByTagName(s)[0];
                            e.parentNode.insertBefore(i, e);
                        })();
                    </script>
                </div>

            </div>
            @include('website.layouts.footer')

        </div>



        <script src="{{ asset('website/assets/vendors/jquery.min.js') }}"></script>
        <script src="{{ asset('website/assets/owlcarousel/js/owl.carousel.js') }}"></script>
        <script>
            $(document).ready(function() {
                @foreach ($data as $list)
                    $('.owl-carousel-{{ $loop->index }}').owlCarousel({
                        loop: true,
                        nav: false,
                        margin: 50,
                        autoplay: false,
                        lazyLoad: true,
                        autoplayTimeout: 10000,
                        autoplayHoverPause: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 1
                            },
                            960: {
                                items: 3
                            },
                            1200: {
                                items: 3
                            }
                        }
                    });
                @endforeach
            });
        </script>


        <script>
            document.getElementById('menu-toggle').addEventListener('click', function() {
                document.getElementById('menu').classList.toggle('open');
            });
            document.getElementById('close-menu').addEventListener('click', function() {
                document.getElementById('menu').classList.remove('open');
            });
        </script>


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
</body>

</html>
