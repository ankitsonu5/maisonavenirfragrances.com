<x-app-layout>
    <style>
        .home .div {
            background-image: url('/website/assets/img/bg.png') !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }


        .accordion-header {
            background-color: transparent;
        }

        .accordion-item {
            background-color: transparent;
            border-bottom: none;
        }


        .accordion-body {
            background-color: transparent;
        }

        .fragrance-famlly {
            font-size: 16px;
        }
    </style>
    <x-enquiry-form />

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

    <div class="container my-5">

        {{-- <div class="d-flex  justify-content-between">
            <a href="{{ route('AIFragranceFinder') }}" class="back-btn">
                <svg xmlns="
                   http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none"
                    class="back-svg">
                    <path d="M9.00005 6C9.00005 6 15 10.4189 15 12C15 13.5812 9 18 9 18" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div>
                    Back
                </div>
            </a>
            <a href="{{ route('AIFragranceFinder') }}" class="back-btn d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="refresh-icon">
                    <path d="M17.657 6.343A8 8 0 1 0 12 20h0" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <polyline points="16 3 21 3 21 8" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="ms-2">Try Again</span>
            </a>

        </div> --}}
        <main>
            <div>
                <div class="row">

                    <div class="col-md-2">
                        <a href="{{ route('session.resate') }}" class="back-btn">
                            Start Over
                        </a>
                    </div>

                    <div class="col-md-10">
                        <h1 class="heading-aifregrance">Your Perfect Scents,<br>selected by our AI
                        </h1>
                    </div>

                </div>

            </div>

        </main>

        @foreach ($topProductDetails as $product)
        <div class="product-section ">
            <div class="row   align-items-center m-0 ">
                <!-- Left Section -->
                <div class="col-md-9 col-12 p-0">
                    <div class="row  align-items-center ">
                        <!-- Product Image -->
                        <div class="col-md-4 col-12">
                            <div class="filter-product">
                                <div class="rank-badge">#<span class="number">{{ $loop->iteration }}</span>
                                </div>
                                <img src="{{ Storage::url('product/' . $product->primary_image) }}"
                                    alt="Masion product" />
                            </div>
                        </div>
                        <!-- Product Information -->
                        <div class="col-md-8   col-12 text-light p-4">
                            <a href="{{ url('our-fragrance#' . $product->collection->name) }}">
                                <h6 class="category-name   ">{{ $product->collection->name }}</h6>
                            </a>
                            <h2 class=" product-name">{{ $product->name }}</h2>

                            <div class="custom-tabs dd">
                                <ul class="tab-list">
                                    <li style="margin-left: 0px" class="tab-item  border-end"
                                        data-tab="home{{ $product->id }}">
                                        Contains Natural Oils
                                        <i class="icon fas fa-chevron-up"></i>
                                    </li>
                                    <li class="tab-item border-end " data-tab="essential{{ $product->id }}">
                                        Contains Essential Oils
                                        <i class="icon fas fa-chevron-up"></i>
                                    </li>
                                    <li class="mx-2  vegantab">{{ str_replace('<br>', ' ', $product->vegan) }}
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-panel " id="home{{ $product->id }}">
                                        <p class="ai-text-muted">{{ $product->insidethefragran }}</p>
                                    </div>
                                    <div class="tab-panel" id="essential{{ $product->id }}">
                                        <p class="ai-text-muted">{{ $product->essential_oil }}</p>
                                    </div>
                                </div>
                                <p class="d-block text-center d-sm-block d-md-none">
                                    {{ str_replace('<br>', ' ', $product->vegan) }}
                                </p>

                            </div>

                            <div class="md">
                                <!-- Accordion Section -->
                                <div class="accordion" id="accordionFAQ">
                                    <!-- Natural Oils -->
                                    <div class="accordion-item">
                                        <div class="accordion-header" data-target="natural-oils">
                                            <span class="accordion-title">Contains Natural Oils</span>
                                            <span class="accordion-icon">+</span>
                                        </div>
                                        <div id="natural-oils" class="accordion-body">
                                            <p class="accordion-description">{{ $product->insidethefragran }}</p>
                                        </div>
                                    </div>

                                    <!-- Essential Oils -->
                                    <div class="accordion-item">
                                        <div class="accordion-header" data-target="essential-oils">
                                            <span class="accordion-title">Contains Essential Oils</span>
                                            <span class="accordion-icon">+</span>
                                        </div>
                                        <div id="essential-oils" class="accordion-body">
                                            <p class="accordion-description">{{ $product->essential_oil }}
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <p class="fragrance-famlly">{{ str_replace('<br>', ' ', $product->vegan) }}
                                </p>

                            </div>
                            {{-- <p class="ai-text-muted"> {!! $product->description !!}</p> --}}


                            <div class="description-container">
                                <p class="ai-text-muted short-description">
                                    {!! implode(' ', array_slice(explode(' ', strip_tags($product->description)), 0,
                                    25)) !!}...
                                </p>
                                <p class="ai-text-muted full-description d-none">
                                    {!! $product->description !!}
                                </p>

                                <!-- Show More / Show Less Button -->
                                <u class="toggle-description">Show
                                    More</u>
                            </div>

                            <h5 class="this-fragrance">Why this fragrance?</h5>
                            <p class="ai-text-muted">
                                Based on your choice of
                                @if (session('ingredient_ids') && !empty(session('ingredient_ids')))
                                Ingredients:
                                {{ implode(
                                ', ',
                                \App\Models\Admin\Ingredients::whereIn('id',
                                session('ingredient_ids'))->pluck('name')->toArray(),
                                ) }},
                                @endif

                                @if (session('fragrance_accord_id'))
                                Accords:
                                {{ \App\Models\Admin\FragranceAccord::find(session('fragrance_accord_id'))->name }},
                                @endif

                                @if (session('fragrancefamilyids') && !empty(session('fragrancefamilyids')))
                                Families:
                                {{ implode(
                                ', ',
                                \App\Models\Admin\FragranceFamily::whereIn('id',
                                session('fragrancefamilyids'))->pluck('name')->toArray(),
                                ) }},
                                @endif

                                @if (session('mood_id'))
                                Mood:
                                {{ \App\Models\Admin\Mood::find(session('mood_id'))->mood }},
                                @endif

                                @if (session('oseocassion_id'))
                                and Occasion:
                                {{ \App\Models\Admin\Occasion::find(session('oseocassion_id'))->occasion }},
                                @endif

                                our powerful AI engine has identified the perfect Maison de l'Avenir fragrances for
                                you.
                            </p>

                            <p class="text-select"><span class="theseasons-font">Fragrance Family:</span><span
                                    class="color-golden"> {{ $product->fragrance_family }}
                                </span>
                            </p>
                            <div class="row mt-3">



                                <div class="col-md-6 col-6">
                                    <a class=" mb-2 buybtn" href="{{ $product->buy_url }}"> <svg
                                            class="d-none d-md-inline" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                        </svg>
                                        <span class="mx-md-2"> Buy in USA </span>
                                    </a>
                                </div>


                                <div class="col-md-6 col-6">
                                    <a class=" mb-2 buybtn" href="{{ $product->uk_buy_url }}">
                                        <svg class="d-none d-md-inline" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                        </svg> <span class="mx-md-2">Buy in
                                            UK</span></a>

                                </div>

                            </div>
                            <div class="row mt-md-3">
                                <div class="col-md-6 col-6"> <a href="#" class="whitebtn mb-2" data-bs-toggle="modal"
                                        data-bs-target="#mouseExitModal">
                                        <svg class="d-none d-md-inline" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                        <span class="mx-md-2"> Discover More </span>
                                    </a></div>

                                <div class="col-md-6 col-6"> <a href="{{ $url }}" class="whitebtn  mb-2 "> <svg
                                            class="d-none d-md-inline" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                            <path
                                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                                        </svg> <span class="mx-md-2"> Personalize Further </span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Section -->
                <div class="col-md-3 col-12 p-3">
                    <h5 class="layer-with">Layer With</h5>
                    <div class="otherProduct">
                        @if (!empty($product['layerWiths']))
                        @if (!empty($product['layerWiths']['layerOne']))
                        <div class="mb-3 layer-item">
                            <div class="layer-with-product">
                                <img src="{{ Storage::url('product/' . $product['layerWiths']['layerOne']['secondary_image']) }}"
                                    alt="{{ $product['layerWiths']['layerOne']['name'] }}" />
                            </div>
                            <div class="px-3">
                                <a
                                    href="{{ url('our-fragrance#' . $product['layerWiths']['layerOne']['collection']['name']) }}">
                                    <h6 class="layer-with-collection">
                                        {{ $product['layerWiths']['layerOne']['collection']['name'] }}
                                    </h6>
                                </a>
                                <p class="layer-with-product-name">
                                    {{ $product['layerWiths']['layerOne']['name'] }}</p>
                                <a href="{{ route('fragrancedetail', $product['layerWiths']['layerOne']['slug']) }}"
                                    class="back-btn px-5">View</a>
                            </div>
                        </div>
                        @endif

                        @if (!empty($product['layerWiths']['layerTwo']))
                        <div class="mb-3 layer-item">
                            <div class="layer-with-product">
                                <img src="{{ Storage::url('product/' . $product['layerWiths']['layerTwo']['secondary_image']) }}"
                                    alt="{{ $product['layerWiths']['layerTwo']['name'] }}" />
                            </div>
                            <div class="px-3">
                                <a
                                    href="{{ url('our-fragrance#' . $product['layerWiths']['layerTwo']['collection']['name']) }}">
                                    <h6 class="layer-with-collection">
                                        {{ $product['layerWiths']['layerTwo']['collection']['name'] }}
                                    </h6>
                                </a>
                                <p class="layer-with-product-name">
                                    {{ $product['layerWiths']['layerTwo']['name'] }}</p>
                                <a href="{{ route('fragrancedetail', $product['layerWiths']['layerTwo']['slug']) }}"
                                    class="back-btn px-5">View</a>
                            </div>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>

            </div>

        </div>
        @endforeach

        @include('website.ai-fragrance-finder.fragrancematchmaker')
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".tab-item");
            const panels = document.querySelectorAll(".tab-panel");

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    const target = tab.getAttribute("data-tab");
                    const panel = document.getElementById(target);

                    // Check if the clicked tab is already active
                    const isActive = tab.classList.contains("active");

                    if (isActive) {
                        // If active, remove active class to toggle off
                        tab.classList.remove("active");
                        tab.querySelector(".icon").classList.remove("fa-chevron-down");
                        tab.querySelector(".icon").classList.add("fa-chevron-up");
                        panel.classList.remove("active");
                    } else {
                        // If not active, deactivate all tabs and panels
                        tabs.forEach((item) => {
                            item.classList.remove("active");
                            item.querySelector(".icon").classList.remove("fa-chevron-down");
                            item.querySelector(".icon").classList.add("fa-chevron-up");
                        });

                        panels.forEach((panel) => panel.classList.remove("active"));

                        // Activate the clicked tab and corresponding panel
                        tab.classList.add("active");
                        tab.querySelector(".icon").classList.remove("fa-chevron-up");
                        tab.querySelector(".icon").classList.add("fa-chevron-down");
                        panel.classList.add("active");
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');

            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const targetId = header.getAttribute('data-target');
                    const body = document.getElementById(targetId);
                    const icon = header.querySelector('.accordion-icon');

                    // Toggle the accordion body visibility
                    if (body.classList.contains('show')) {
                        body.classList.remove('show');
                        icon.textContent = '+';
                    } else {
                        // Close all open accordion items
                        document.querySelectorAll('.accordion-body').forEach(b => b.classList
                            .remove('show'));
                        document.querySelectorAll('.accordion-icon').forEach(i => i.textContent =
                            '+');

                        // Open the clicked accordion item
                        body.classList.add('show');
                        icon.textContent = '-';
                    }
                });
            });
        });
     
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle-description').forEach(button => {
                button.addEventListener('click', function() {
                    // Get the closest parent container (if applicable)
                    const container = this.closest('.description-container');

                    // Find the corresponding short and full description inside this container
                    const shortDesc = container.querySelector('.short-description');
                    const fullDesc = container.querySelector('.full-description');

                    // Toggle visibility
                    if (fullDesc.classList.contains('d-none')) {
                        fullDesc.classList.remove('d-none'); // Show full description
                        shortDesc.classList.add('d-none'); // Hide short description
                        this.textContent = 'Show Less';
                    } else {
                        fullDesc.classList.add('d-none'); // Hide full description
                        shortDesc.classList.remove('d-none'); // Show short description
                        this.textContent = 'Show More';
                    }
                });
            });
        });
    </script>


</x-app-layout>