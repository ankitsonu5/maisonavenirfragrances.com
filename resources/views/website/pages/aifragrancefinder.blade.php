<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Your Scent with AI Fragrance Finder | Maison de l’Avenir
    </title>

    <meta name="description"
        content="Find the perfect fragrance for your mood and occasion. Maison de l’Avenir's AI tool helps match you with a scent that suits your unique style and preferences.">
    <link rel="icon" href="{{ asset('website/assets/images/Favicon.png') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




    <link rel="stylesheet" href="{{ asset('website/assets/css/test.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}" />
    {{-- <style>
    .section {


      transition: transform 0.5s ease-in-out;
    }

    #section1 {
      /* background-color: #000; */
      z-index: 1;
    }

    #section2 {
      /* background-color: #222; */
      transform: translateY(100vh);
      z-index: 0;
    }

    .hidden {
      transform: translateY(-200vh);
    }
  </style> --}}
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.theme.default.min.css') }}">


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

            <div id="section1" class="container-fluid ai-fragrance-finder ">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('website/assets/img/Ai Fragrance Finder_Page_Desktop.png') }}"
                            class="static-image img-fluid" alt="Static Image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('website/assets/img/group-354@1x.png') }}" class="group-16 img-fluid"
                            alt="Rotating Bottles">
                    </div>
                </div>
            </div>

            <div id="section2" class="container-fluid ai-fragrance-finder ">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('website/assets/img/mood.png') }}" class="static-image img-fluid"
                            alt="Static Image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('website/assets/img/group-448@1x.png') }}" class="group-16 img-fluid"
                            alt="Rotating Bottles">
                    </div>
                </div>
            </div>




            <div class="container">
                <div class="owl-carousel owl-theme">
                    <div class="row text-center">
                        <div class="mb-5">
                            <img src="{{ asset('website/assets/img/one.png') }}" alt="Select Mood" class="img-fluid">
                        </div>
                        <h1>
                            <p class="text-mood">Select Mood</p>
                        </h1>


                        <div class="col-md-12 md-none">
                            <div class="row d-flex justify-content-around">
                                @foreach ($moods as $mood)
                                    <div class="col-md-2 col-6">
                                        <img src="{{ asset('storage/mood/' . $mood->image) }}"
                                            class="img-fluid iconemode" data-id="{{ $mood->id }}" data-type="mood"
                                            alt="Mood"
                                            style="@if (request('mood_id') == $mood->id) border: 5px solid #cab651; border-radius: 50%; @endif" />
                                        <p class="iconetext">{{ $mood->mood }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-md-12 sm-none">

                            @php
                                $moods = $moods->shuffle();
                                $chunks = $moods->chunk(4);
                            @endphp
                            @foreach ($chunks as $chunk)
                                <div class="row  d-flex justify-content-center mood-container">
                                    @foreach ($chunk as $mood)
                                        <div class="col-md-2 col-6 mb-3">
                                            <img src="{{ asset('storage/mood/' . $mood->image) }}"
                                                class="img-fluid iconemode" data-id="{{ $mood->id }}"
                                                data-type="mood" alt="Mood"
                                                style="@if (request('mood_id') == $mood->id) border: 5px solid #cab651; border-radius: 50%; @endif" />
                                            <p class="iconetext">{{ $mood->mood }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div>


                    </div>

                    <div class="row text-center">
                        <div class="mb-5 minus-18">
                            <img src="{{ asset('website/assets/img/secandstep.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <h1>
                            <p class="text-mood">Select Occasion</p>
                        </h1>
                        <div class="col-md-12   minus-18">




                            @php
                                $chunks = $occasions->chunk(4);
                            @endphp
                            @foreach ($chunks as $chunk)
                                <div class="row d-flex justify-content-center">
                                    @foreach ($chunk as $occasion)
                                        <div class="col-md-2 col-6">
                                            <img src="{{ asset('storage/occasion/' . $occasion->image) }}"  alt="Mood"
                                                class="img-fluid iconeoccasion" data-id="{{ $occasion->id }}"
                                                data-type="occasion" alt=""
                                                style="@if (request('occasion_id') == $occasion->id) border: 5px solid #cab651; border-radius: 10px; @endif" />

                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>



            @if ($data->count() > 0)


                <div id="aifragrancefinder" class="container-fluid ai-fragrance-finder">
                    <div class="row ">
                        <div class="col-md-12">
                            <img src="{{ asset('website/assets/img/finding.png') }}" class="static-image img-fluid"
                                alt="Static Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('website/assets/img/group-448@1x.png') }}" class="group-16 img-fluid"
                                alt="Rotating Bottles">
                        </div>
                    </div>

                </div>
                <div class="container" id="foryou">
                    <div class="row text-center">
                        <div class="col-md-12 mb-5">
                            <img src="{{ asset('website/assets/img/foryou.png') }}" class="img-fluid rounded-top"
                                alt="" />
                        </div>
                        @foreach ($data as $row)
                            <div class="col-md-4">
                                <div class="card card-custom">
                                    <img src="{{ asset('storage/product/' . $row->card_image) }}"
                                        alt="Electra Elixir">
                                    <h5 class="productname">{{ $row->name }}</h5>
                                    <p class="keywords">{{ $row->keywords }}</p>
                                    <p class="fragrance">{{ $row->fragrance_family }}</p>
                                    <p class="shortdescription">{{ $row->short_description }}</p>
                                    <div class="icon-container">
                                        @if ($row->natural_oils === 'Yes')
                                            <div>
                                                <img class="icone"
                                                    src="{{ asset('website/assets/homeicone/4.png') }}"
                                                    alt="Aqua Icon">
                                                <p>Natural Oils</p>
                                            </div>
                                        @endif

                                        @if ($row->essential_oils === 'Yes')
                                            <div>
                                                <img class="icone"
                                                    src="{{ asset('website/assets/homeicone/5.png') }}"
                                                    alt="Woody Icon">
                                                <p>Essential Oils</p>
                                            </div>
                                        @endif

                                        @if ($row->vegan === 'Yes')
                                            <div>
                                                <img class="icone"
                                                    src="{{ asset('website/assets/homeicone/6.png') }}"
                                                    alt="Floral Icon">
                                                <p>Vegan & Cruelty Free</p>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="button-wrapper">
                                        <a href="{{ route('fragrancedetail', $row->slug) }}"
                                            class="know-more-btn cardbtn">Know
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            @endif
            <div class="container">


<div class="profile-card">
    <!-- Place <div> tag where you want the feed to appear -->
    <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
            class="crt-logo crt-tag">Powered by Curator.io</a></div>

    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
    <script type="text/javascript">
        /* curator-feed-default-feed-layout */
        (function () {
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
            document.addEventListener('DOMContentLoaded', function() {
                initializeOwlCarousel();
                setupSelectionHandlers();

                // Hide foryou section initially
                document.getElementById('foryou').style.display = 'none';

                // Show aifragrancefinder section and hide foryou section after 3 seconds
                setTimeout(function() {
                    document.getElementById('aifragrancefinder').style.display = 'none';
                    document.getElementById('foryou').style.display = 'block';

                    // Smooth scroll to foryou section
                    document.getElementById('foryou').scrollIntoView({
                        behavior: 'smooth'
                    });
                }, 3000);
            });

            function initializeOwlCarousel() {
                var owl = document.querySelectorAll('.owl-carousel');
                owl.forEach(function(carousel) {
                    $(carousel).owlCarousel({
                        loop: false,
                        nav: false,
                        margin: 10,
                        autoplay: false,
                        lazyLoad: true,
                        autoHeight: true,
                        autoplayTimeout: 1000,
                        autoplayHoverPause: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 1
                            },
                            960: {
                                items: 1
                            },
                            1200: {
                                items: 1
                            }
                        }
                    });
                });
            }

            function setupSelectionHandlers() {
                let selectedMoodId = null;
                let selectedOccasionId = null;

                document.querySelectorAll('.iconemode, .iconeoccasion').forEach(function(element) {
                    element.addEventListener('click', function() {
                        let type = element.getAttribute('data-type');
                        let id = element.getAttribute('data-id');

                        clearBorders(type);
                        highlightSelected(element);

                        if (type === 'mood') {
                            selectedMoodId = id;
                            moveToNextSlide();
                        } else if (type === 'occasion') {
                            selectedOccasionId = id;
                        }

                        if (selectedMoodId && selectedOccasionId) {
                            updateURL(selectedMoodId, selectedOccasionId);
                        }
                    });
                });
            }

            function clearBorders(type) {
                document.querySelectorAll('.iconemode, .iconeoccasion').forEach(function(img) {
                    if (img.getAttribute('data-type') === type) {
                        img.style.border = 'none';
                    }
                });
            }

            function highlightSelected(element) {
                element.style.border = '2px solid #cab651';
            }

            function moveToNextSlide() {
                var owl = $('.owl-carousel');
                owl.trigger('next.owl.carousel');
            }

            function updateURL(moodId, occasionId) {
                const url = new URL(window.location.href);
                url.searchParams.set('mood_id', moodId);
                url.searchParams.set('occasion_id', occasionId);
                url.hash = 'aifragrancefinder'; // Set hash to scroll to the "foryou" section
                window.location.href = url.toString();

                setTimeout(function() {
                    url.hash = 'foryou';
                    window.location.href = url.toString();
                }, 3000)
            }
        </script>



        {{-- <script>
      document.addEventListener('DOMContentLoaded', function () {
  let section1 = document.getElementById('section1');
  let section2 = document.getElementById('section2');
  let isSection2Visible = false;

  window.addEventListener('scroll', function () {
    if (window.scrollY > 1 && !isSection2Visible) {
      section1.classList.add('hidden');
      section2.style.transform = 'translateY(0)';
      isSection2Visible = true;
    } else if (window.scrollY < 1 && isSection2Visible) {
      section1.classList.remove('hidden');
      section2.style.transform = 'translateY(100vh)';
      isSection2Visible = false;
    }
  });
});


    </script> --}}



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
