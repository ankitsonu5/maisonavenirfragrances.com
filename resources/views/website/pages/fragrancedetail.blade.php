<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $data->meta_title ?? " Maison de l'Avenir" }}</title>
    <meta name="description" content="{{ $data->meta_description ?? " Maison de l'Avenir" }}">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/test.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}" />
    <link rel="icon" href="{{ asset('website/assets/images/Favicon.png') }}" type="image/x-icon">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.theme.default.min.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS (Animate On Scroll) Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

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
    <style>
        /* Style for the navigation arrows */
        .owl-nav .owl-prev i,
        .owl-nav .owl-next i {
            font-size: 50px;
            /* Increase icon size */
            color: #ff9d00;
            /* Change icon color */
        }

        /* Hover effect for navigation arrows */
        .owl-nav .owl-prev i:hover,
        .owl-nav .owl-next i:hover {
            color: #ff9d00;
            /* Change color on hover */
        }


        .owl-nav {
            display: flex !important;
            /* Force display navigation buttons */
            justify-content: space-between;
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .owl-prev,
        .owl-next {
            background: transparent !important;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>

</head>

<body style="background-color: #000">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQG3TFM5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="home">
        <div class="div">
            @include('website.layouts.navigation')

            <div class="container ">
                {{-- Mobile Html code Start --}}

                <div class="md-none">
                    <div class="banner owl-carousel owl-theme ">
                        <img class="md" src="{{ asset('storage/product/' . $data->maine_image) }}" />
                        {{-- <img class="md" src="{{ asset('storage/product/' . $data->left_image) }}" /> --}}
                        {{-- <img class="md" src="{{ asset('storage/product/' . $data->right_up_image) }}" />
                        <img class="md" src="{{ asset('storage/product/' . $data->right_dowen_image) }}" /> --}}

                    </div>
                    <div class="product-info">
                        <p class="sub-title">Maison de l’Avenir</p>
                        <p class="title">{{ $data->name }}</p>
                        <p class="elixir-collection">
                            <a href="{{ url('our-fragrance#' . $data->collection->name) }}">
                                {{ $data->collection->name }}
                            </a>
                        </p>

                        <p class="elixir-collection">Eau De Parfum 100ml | Unisex</p>
                        <p class="elixir-collection">{{ $data->best_time_to_use }}</p>
                        <div>
                            <p class="short_description">{{ $data->short_description }}</p>
                            <p class="keywords_detail">{{ $data->keywords }}</p>
                        </div>
                        <div class="my-5 d-flex">
                            @if ($data->natural_oils == 'Yes')
                                <div class="text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                    </svg> Natural oils
                                </div>
                            @endif
                            @if ($data->essential_oils == 'Yes')
                                <div class="text mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                    </svg> Essential Oils
                                </div>
                            @endif
                            @if ($data->vegan == 'Yes')
                                <div class="text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                    </svg> Vegan
                                </div>
                            @endif
                        </div>
                        <p class="sub-heading">Explore The Fragrance</p>
                        <div class="the-inspiration-box">
                            <p class="the-inspiration">The Inspiration</p>

                            <p class="mobile-description">{{ $data->description }}</p>
                            {{-- <span id="read-more" class="read-more">Read More</span> --}}
                            <p class="the-inspiration">Inside the fragrance</p>
                            <a class="natural-oils">Natural Oils</a>
                            <p class="mobile-description">{{ $data->insidethefragran }}</p>
                            <a class="natural-oils">Essential Oils</a>
                            <p class="mobile-description">{{ $data->essential_oil }}</p>

                        </div>
                        {{-- <div class="the-fragrance-1">
                            <p class="inside-the-fragrance-1 fs-3">Inside the fragrance</p>
                            <a class="natural-oils">Natural Oils</a>
                            <p class="elixir-collection">{{ $data->insidethefragran }}</p>
                            <a class="essential-oils">Essential Oils</a>
                            <p class="elixir-collection">{{ $data->essential_oil }}</p>
                        </div> --}}
                    </div>
                </div>


                {{-- Mobile Html code end --}}


                <div class="px-5  sm-none product-detail" data-aos="fade-right" data-aos-duration="2000">
                    <div class="row g-5">
                        <div class="col-md-6 left-column">
                            <img src="{{ asset('storage/product/' . $data->maine_image) }}" alt="Nebula Nectar">
                        </div>
                        <div class="col-md-6 right-column">
                            <p class="sub-title">Maison de l’Avenir</p>
                            <p class="title">{{ $data->name }}</p>

                            <p class="elixir-collection">
                                <a href="{{ url('our-fragrance#' . $data->collection->name) }}">
                                    {{ $data->collection->name }}
                                </a>
                            </p>

                            <p class="elixir-collection">
                                Eau De Parfum 100ml | Unisex
                            </p>
                            <p class="elixir-collection">{{ $data->best_time_to_use }}</p>


                            <div class="my-3 d-flex">
                                @if ($data->natural_oils == 'Yes')
                                    <div class="text"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-check-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path
                                                d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                        </svg> Natural oil
                                    </div>
                                @endif
                                @if ($data->essential_oils == 'Yes')
                                    <div class="text mx-5"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-check-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path
                                                d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                        </svg> Essential Oils</div>
                                @endif

                                @if ($data->vegan == 'Yes')
                                    <div class="text"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-check-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path
                                                d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                        </svg> Vegan </div>
                                @endif
                            </div>
                            <div>
                                <p class="keywords_detail">{{ $data->keywords }}</p>
                                <p class="short_description">{{ $data->short_description }}</p>
                            </div>
                            <div class="">
                                <div class="sub-heading">Explore The Fragrance</div>
                            </div>
                            <div class="d-flex">
                                <div class="">
                                    <a href="#inspiration" class="sub-title underline f-1-3">
                                        The inspiration
                                    </a>
                                </div>
                                <div class="mx-5">
                                    <a href="#inspiration" class="sub-title underline f-1-3">
                                        Inside the fragrance
                                    </a>
                                </div>
                                <div class="">
                                    <a href="#note" class="sub-title underline f-1-3">
                                        Notes
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="px-5 sm-none product-detail" data-aos="fade-left" data-aos-duration="2000">
                    <div class="row g-3">
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="2000">
                            <img src="{{ asset('storage/product/' . $data->left_image) }}" class="img-fluid rounded"
                                alt="" />
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="2000">
                            <div class="mb-3">
                                <img src="{{ asset('storage/product/' . $data->right_up_image) }}"
                                    class="img-fluid rounded" alt="" />
                            </div>
                            <div class="mt-3">
                                <img src="{{ asset('storage/product/' . $data->right_dowen_image) }}"
                                    class="img-fluid rounded" />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="inspiration" class="inspiration sm-none" data-aos="fade-right" data-aos-duration="2000">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-md-6 col-12 border-end the-inspiration-box">
                            <a class="the-inspiration fs-3">
                                The Inspiration
                            </a>
                            <p class="elixir-collection">{{ $data->description }} </p>
                        </div>
                        <div class="col-md-6 px-5 col-12 the-fragrance-1">
                            <p class="inside-the-fragrance-1 fs-3">
                                Inside the fragrance
                            </p>
                            <a class="natural-oils">
                                Natural Oils
                            </a>
                            <p class="elixir-collection">{{ $data->insidethefragran }} </p>
                            <a class="essential-oils">
                                Essential Oils
                            </a>
                            <p class="elixir-collection">{{ $data->essential_oil }} </p>
                        </div>
                    </div>
                </div>

                <div id="note" class="container" data-aos="fade-left" data-aos-duration="2000">

                    <div class="row-custom">
                        <div class="col-custom">
                            <a class="nav-link-custom active" id="fragrance-tab" data-bs-toggle="tab"
                                href="#fragrance" role="tab" aria-controls="fragrance" aria-selected="true">
                                <p class="sub-title">Fragrance</p>
                                <img id="fragrance-icon" src="{{ asset('storage/product/fragrance_icone.png') }}"
                                    class="img-fluid iconesize" alt="Maison de l'Avenir"/>
                                <p class="costom-title">{{ $data->fragrance_title }}</p>
                            </a>
                        </div>
                        <div class="col-custom">
                            <a class="nav-link-custom" id="topnote-tab" data-bs-toggle="tab" href="#topnote"
                                role="tab" aria-controls="topnote" aria-selected="false">
                                <p class="sub-title">Top note</p>
                                <img id="topnote-icon" src="{{ asset('storage/product/topnote_active_icone.png') }}"
                                    class="img-fluid iconesize" alt="Top note"  />
                                <p class="costom-title">{{ $data->topnote_title }}</p>
                            </a>
                        </div>
                        <div class="col-custom">
                            <a class="nav-link-custom" id="heartnote-tab" data-bs-toggle="tab" href="#heartnote"
                                role="tab" aria-controls="heartnote" aria-selected="false">
                                <p class="sub-title">Heart note</p>
                                <img id="heartnote-icon"
                                    src="{{ asset('storage/product/heartnote_active_icone.png') }}" alt="heartnote"
                                    class="img-fluid iconesize" />
                                <p class="costom-title">{{ $data->heartnote_title }}</p>
                            </a>
                        </div>
                        <div class="col-custom">
                            <a class="nav-link-custom" id="basenote-tab" data-bs-toggle="tab" href="#basenote_icon"
                                role="tab" aria-controls="basenote" aria-selected="false">
                                <p class="sub-title">Base note</p>
                                <img id="basenote-icon"
                                    src="{{ asset('storage/product/basenote_active_icone.png') }}" alt="basenote_icon"
                                    class="img-fluid iconesize" />
                                <p class="costom-title">{{ $data->basenote_title }}</p>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="imgbox" data-aos="fade-right" data-aos-duration="2000">
                            <img id="fragrance-image" src="{{ asset('storage/product/' . $data->fragrance_banner) }}"
                                class="img-fluid imgborder" alt="Image" />
                            <div class="text-overlay" id="fragrance-description">
                                {{ $data->fragrance_banner_title }}
                            </div>
                        </div>
                    </div>

                    {{--
                    <div class="row">
                        <div class="imgbox" data-aos="fade-right" data-aos-duration="2000">
                            <img id="fragrance-image" src="{{ asset('storage/product/' . $data->fragrance_banner) }}"
                                class="img-fluid imgborder" alt="Image" />
                            <div class="text-overlay" id="fragrance-description">
                                {{ $data->fragrance_banner_title }}
                            </div>
                        </div>
                    </div> --}}
                </div>


                {{-- Product List Silder Start --}}
                <div class="container m-120" data-aos="fade-left" data-aos-duration="2000">
                    <header class="">
                        <div class="hedding">
                            Explore the collection
                        </div>
                    </header>

                    <div class="row owl-carousel owl-theme">
                        @foreach ($collection as $row)
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

                                    @if ($row->natural_oils)
                                        <div>
                                            <img class="icone" src="{{ asset('website/assets/homeicone/5.png') }}"
                                                alt="Woody Icon">
                                            <p>{!! $row->natural_oils !!}</p>
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
                {{-- Product List Silder End --}}
                <div class="container m-120" data-aos="fade-right" data-aos-duration="2000">
                    <div class="row">
                        <p class="sub-title mobil-subtitle text-center fs-3-2">
                            Can’t decide? Let our AI Fragrance Finder and <br>
                            Fragrance Matchmaker hook you up
                        </p>
                    </div>
                    <div class="container my-5">
                        <div class="row justify-content-evenly">
                            <div class="col-md-5 mb-4 cardbox" data-aos="fade-left" data-aos-duration="2000">
                                <img src="{{ asset('website/assets/images/fragrance-details/aifinder.png') }}"
                                    class="img-fluid mb-5 " alt="AI Fragrance Finder">
                                <div>
                                    <a href="{{ route('aifragrancefinder') }}"> <button
                                            style="background: transparent;width:100%;"
                                            class="custom-button px-4">Find
                                            Your
                                            Fragrance</button></a>
                                </div>
                            </div>
                            {{-- <div class="col-md-5 mb-4 cardbox" data-aos="fade-right" data-aos-duration="2000">
                                <img src="{{ asset('website/assets/img/matchmaker.png') }}" class="img-fluid"
                                    alt="Fragrance Matchmaker">
                                <div class="mt-5">
                                    <button type="button" class="btn btn-custom">Coming Soon</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('website.layouts.footer')


    <script src="{{ asset('website/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('website/assets/owlcarousel/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                margin: 50,
                autoplay: false,
                lazyLoad: true,
                autoplayTimeout: 10000,
                autoplayHoverPause: true,
                navText: [
                    '<i class="fas fa-chevron-left"></i>', // Left arrow using Font Awesome
                    '<i class="fas fa-chevron-right"></i>' // Right arrow using Font Awesome
                ],
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
        });
    </script>



    <script>
        // Default icons for each note
        const activeIcons = {
            fragrance: "{{ asset('storage/product/fragrance_icone.png') }}", // Change to your active image
            topnote: "{{ asset('storage/product/topnote_icone.png') }}", // Change to your active image
            heartnote: "{{ asset('storage/product/heartnote_icone.png') }}", // Change to your active image
            basenote: "{{ asset('storage/product/basenote_icone.png') }}" // Change to your active image
        };

        // Active icons dynamically fetched from the backend
        const defaultIcons = {
            fragrance: "{{ asset('storage/product/fragrance_active_icone.png') }}", // Change to your active image
            topnote: "{{ asset('storage/product/topnote_active_icone.png') }}", // Change to your active image
            heartnote: "{{ asset('storage/product/heartnote_active_icone.png') }}", // Change to your active image
            basenote: "{{ asset('storage/product/basenote_active_icone.png') }}" // Change to your active image
        };

        document.querySelectorAll('.nav-link-custom').forEach(function(tab) {
            tab.addEventListener('click', function() {
                // Extract the imageId from the tab id
                var imageId = tab.id.replace('-tab', '');
                var imageSrc = '';
                var description = '';

                // Reset all icons to their default images
                document.getElementById('fragrance-icon').src = defaultIcons.fragrance;
                document.getElementById('topnote-icon').src = defaultIcons.topnote;
                document.getElementById('heartnote-icon').src = defaultIcons.heartnote;
                document.getElementById('basenote-icon').src = defaultIcons.basenote;

                // Update the specific tab's icon to the active image
                document.getElementById(imageId + '-icon').src = activeIcons[imageId];

                // Determine the correct image and description based on the tab clicked
                switch (imageId) {
                    case 'fragrance':
                        imageSrc = "{{ asset('storage/product/' . $data->fragrance_banner) }}";
                        description = "{{ $data->fragrance_banner_title }}";
                        break;
                    case 'topnote':
                        imageSrc = "{{ asset('storage/product/' . $data->topnote_banner) }}";
                        description = "{{ $data->topnote_banner_title }}";
                        break;
                    case 'heartnote':
                        imageSrc = "{{ asset('storage/product/' . $data->heartnote_banner) }}";
                        description = "{{ $data->heartnote_banner_title }}";
                        break;
                    case 'basenote':
                        imageSrc = "{{ asset('storage/product/' . $data->basenote_banner) }}";
                        description = "{{ $data->basenote_banner_title }}";
                        break;
                }

                // Update the main image and description
                document.getElementById('fragrance-image').src = imageSrc;
                document.getElementById('fragrance-description').textContent = description;

                // Remove active class from all tabs and add it to the clicked tab
                document.querySelectorAll('.nav-link-custom').forEach(function(nav) {
                    nav.classList.remove('active');
                });
                tab.classList.add('active');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
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


    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
        var fullDesc = document.getElementById('full-description');
        fullDesc.style.display = 'none';
    });

    document.getElementById('read-more').addEventListener('click', function() {
        var shortDesc = document.getElementById('short-description');
        var fullDesc = document.getElementById('full-description');
        var readMore = document.getElementById('read-more');

        if (fullDesc.style.display === 'none') {
            fullDesc.style.display = 'block';
            shortDesc.style.display = 'none';
            readMore.textContent = 'Read Less';
        } else {
            fullDesc.style.display = 'none';
            shortDesc.style.display = 'block';
            readMore.textContent = 'Read More';
        }
    });
    </script> --}}
</body>

</html>
