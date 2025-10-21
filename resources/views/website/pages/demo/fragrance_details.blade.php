<x-app-layout :title="$data['meta_title']" :description="$data['meta_description']">
    <div class="main-hight">
        <div class="row main-content" id="mainContent">
            <div class="sliding-content d-flex">
                <!-- Left Content Section (60% width) -->
                <div class="col-md-5 col-12">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img class="img-fluid"
                                    src="{{ asset('storage/product/' . $data->maine_image) }}">
                            </div>
                            <div class="swiper-slide"><img class="img-fluid"
                                    src="{{ asset('storage/product/' . $data->left_image) }}">
                            </div>
                            <div class="swiper-slide"><img class="img-fluid"
                                    src="{{ asset('storage/product/' . $data->right_up_image) }}">
                            </div>
                            <div class="swiper-slide"><img class="img-fluid"
                                    src="{{ asset('storage/product/' . $data->right_dowen_image) }}">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-md-7 col-12 productinfo">
                    <!-- Product Header -->
                    <div class="container mt-5">
                        <p class="text-collection">Maison de l'Avenir - <a
                                href="{{ url('our-fragrance#' . $data->collection->name) }}">
                                {{ $data->collection->name }}
                            </a></p>
                        <h1 class="product-title">{{ $data->name }}</h1>
                        <p class="product-subtitle">Eau De Parfum 100ml | Unisex</p>
                        <p class="product-notes">{{ $data->fragrance_family }} | {{ $data->keywords }}</p>

                        <!-- Product Description with Show More Button -->
                        <div class="product-description">
                            <p class="product-description-detail" id="shortDescription">
                                {{ implode(' ', array_slice(explode(' ', $data->description), 0, 25)) }}...

                            </p>
                            <p class="product-description-detail d-none" id="fullDescription">
                                {{ $data->description }}
                            </p>
                            <span class="show mx-1 text-light" id="showMoreBtn">Show More</span>
                        </div>

                        <!-- Accordion Section -->
                        <div class="accordion" id="accordionFAQ">
                            <!-- Natural Oils -->
                            <div class="accordion-item">
                                <div class="accordion-header" data-target="natural-oils">
                                    <span class="accordion-title">Contains Natural Oils</span>
                                    <span class="accordion-icon">+</span>
                                </div>
                                <div id="natural-oils" class="accordion-body">
                                    <p class="accordion-description">{{ $data->insidethefragran }}</p>
                                </div>
                            </div>

                            <!-- Essential Oils -->
                            <div class="accordion-item">
                                <div class="accordion-header" data-target="essential-oils">
                                    <span class="accordion-title">Contains Essential Oils</span>
                                    <span class="accordion-icon">+</span>
                                </div>
                                <div id="essential-oils" class="accordion-body">
                                    <p class="accordion-description">{{ $data->essential_oil }}
                                    </p>
                                </div>
                            </div>
                        </div>


                        <p class="fragrance-famlly">{{ str_replace('<br>', ' ', $data->vegan) }}
                        </p>
                        <p class="ai-text"><i>{!! $data->ai_text !!}</i></p>
                        <!-- Fragrance Items onley deshktop  -->
                        <div class="row fragrance-details">
                            <!-- Fragrance Family -->
                            <div class="col-md-3 fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->fragrance_banner) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/5.png') }}"
                                onclick="shiftContent(this)">
                                <p class="fragrance-label">Fragrance Family</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/1.png') }}"
                                    alt="Fragrance Family" class="fragrance-image">
                                <p class="fragrance-description">{!! $data->fragrance_title !!}</p>
                            </div>

                            <!-- Top Note -->
                            <div class="col-md-3 fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->topnote_banner) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/6.png') }}"
                                onclick="shiftContent(this)">
                                <p class="fragrance-label">Top Note</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/2.png') }}" alt="Top Note"
                                    class="fragrance-image">
                                <p class="fragrance-description">{!! $data->topnote_title !!}</p>
                            </div>

                            <!-- Heart Note -->
                            <div class="col-md-3 fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->heartnote_banner) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/7.png') }}"
                                onclick="shiftContent(this)">
                                <p class="fragrance-label">Heart Note</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/3.png') }}"
                                    alt="Heart Note" class="fragrance-image">
                                <p class="fragrance-description">{!! $data->heartnote_title !!}</p>
                            </div>

                            <!-- Base Note -->
                            <div class="col-md-3 fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->basenote_banner) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/8.png') }}"
                                onclick="shiftContent(this)">
                                <p class="fragrance-label">Base Note</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/4.png') }}" alt="Base Note"
                                    class="fragrance-image">
                                <p class="fragrance-description">{!! $data->basenote_title !!}</p>
                            </div>
                        </div>


                        <!-- Mobile Buy Now Button -->
                        @if (!empty($data->buy_url))
                            <div class="button-container">
                                <button class="buyNowButton custom-button mobile-button">
                                    Buy Now <span class="toggleIcon"><i class="bi bi-chevron-compact-down"></i></span>
                                </button>

                                <div class="extraButtons extra-buttons d-none">
                                    <a target="_blank" href="{{ $data->buy_url }}" class="my-2  mobile-button">
                                        <button class="custom-button">Buy in USA</button>
                                    </a>
                                    <a target="_blank"
                                        href="https://www.allbeauty.com/maison-de-lavenir-elixir-collection-electra-elixir-eau-de-parfum-spray-100ml/15789701.html"
                                        class="my-2 mobile-button">
                                        <button class="custom-button">Buy in UK</button>
                                    </a>
                                </div>
                            </div>
                        @endif

                        <!-- Fragrance Items onley Mobile  -->
                        <div class="fragrance-details-mobile">
                            <!-- Fragrance Family -->
                            <div class="fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->fragrance_banner_title) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/5.png') }}"
                                onclick="UpdateImage(this)">
                                <p class="fragrance-label">Fragrance</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/1.png') }}"
                                    alt="Fragrance Family" class="fragrance-image">
                                <p class="fragrance-description">{!! $data->fragrance_title !!}</p>
                            </div>

                            <!-- Top Note -->
                            <div class=" fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->topnote_banner_title) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/6.png') }}"
                                onclick="UpdateImage(this)">
                                <p class="fragrance-label">Top Note</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/2.png') }}"
                                    alt="Top Note" class="fragrance-image">
                                <p class="fragrance-description">{!! $data->topnote_title !!}</p>
                            </div>

                            <!-- Heart Note -->
                            <div class="fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->heartnote_banner_title) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/7.png') }}"
                                onclick="UpdateImage(this)">
                                <p class="fragrance-label">Heart Note</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/3.png') }}"
                                    alt="Heart Note" class="fragrance-image">
                                <p class="fragrance-description">{!! $data->heartnote_title !!}</p>
                            </div>

                            <!-- Base Note -->
                            <div class="fragrance-item"
                                data-image="{{ asset('storage/product/' . $data->basenote_banner_title) }}"
                                data-image-active="{{ asset('website/assets/images/fragrance-details/8.png') }}"
                                onclick="UpdateImage(this)">
                                <p class="fragrance-label">Base Note</p>
                                <img src="{{ asset('website/assets/images/fragrance-details/4.png') }}"
                                    alt="Base Note" class="fragrance-image">
                                <p class="fragrance-description">{!! $data->basenote_title !!}</p>
                            </div>
                        </div>

                        <div class="fragrance-image-mobile">
                            <img class="img-fluid"
                                src="{{ asset('storage/product/' . $data->fragrance_banner_title) }}" alt="">
                        </div>

                        <!-- Desktop Buy Now Button -->
                        @if (!empty($data->buy_url))
                            <div class="button-container">
                                <button class="buyNowButton custom-button desktop-button">
                                    Buy Now <span class="toggleIcon"><i class="bi bi-chevron-compact-down"></i></span>
                                </button>

                                <div class="extraButtons extra-buttons d-none">
                                    <a target="_blank" href="{{ $data->buy_url }}" class="mx-2 my-4 desktop-button">
                                        <button class="custom-button">Buy in USA</button>
                                    </a>
                                    <a target="_blank"
                                        href="https://www.allbeauty.com/maison-de-lavenir-elixir-collection-electra-elixir-eau-de-parfum-spray-100ml/15789701.html"
                                        class="my-4 desktop-button">
                                        <button class="custom-button">Buy in UK</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                        <script>
                            // Add click event listeners to all "Buy Now" buttons
                            document.querySelectorAll('.buyNowButton').forEach(function(button) {
                                button.addEventListener('click', function(event) {
                                    event.preventDefault(); // Prevents default behavior
                                    const buttonContainer = button.closest('.button-container'); // Get the parent container
                                    const extraButtons = buttonContainer.querySelector(
                                        '.extraButtons'); // Find the corresponding extra buttons
                                    const toggleIcon = button.querySelector('.toggleIcon'); // Find the corresponding icon

                                    // Toggle visibility of extra buttons
                                    if (extraButtons.classList.contains('d-none')) {
                                        extraButtons.classList.remove('d-none');
                                        toggleIcon.innerHTML = '<i class="bi bi-chevron-compact-up"></i>'; // Change to up arrow
                                    } else {
                                        extraButtons.classList.add('d-none');
                                        toggleIcon.innerHTML =
                                            '<i class="bi bi-chevron-compact-down"></i>'; // Change to down arrow
                                    }
                                });
                            });
                        </script>

                    </div>
                </div>

                <!-- Right Image Section (40% width) -->
                <div id="rightImage" class="col-md-5 bg-cover bg-center">
                    <!-- Overlay with Arrow -->
                    <div class="image-overlay">
                        <span class="overlay-arrow" onclick="resetSlide()"><i class="bi bi-arrow-left"></i></span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Product List Silder Start --}}
    <div class="container" data-aos="fade-left" data-aos-duration="2000">
        <header class="">
            <div class="hedding">
                Discover the Collection
            </div>
        </header>

        <div class="row owl-carousel owl-theme">
            @foreach ($collection as $row)
                <div class="card card-custom">
                    <img src="{{ asset('storage/product/' . $row->card_image) }}" alt="Electra Elixir">
                    <h5 class="productname">{{ $row->name }}</h5>
                    <p class="fragrance_family">{{ $row->fragrance_family }}</p>
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
                        <a href="{{ route('fragrancedetail', $row->slug) }}" class="know-more-btn cardbtn">Know
                            More</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>



    <div class="container" data-aos="fade-left" data-aos-duration="2000">
        <header class="">
            <div class="hedding">
                AI’s Choices for You
            </div>
        </header>


        <div class="row owl-carousel owl-theme">
            @foreach ($collectionc as $row)
                <div class="card card-custom">
                    <img src="{{ asset('storage/product/' . $row->card_image) }}" alt="Electra Elixir">
                    <h5 class="productname">{{ $row->name }}</h5>
                    <p class="fragrance_family">{{ $row->fragrance_family }}</p>
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
                        <a href="{{ route('fragrancedetail', $row->slug) }}" class="know-more-btn cardbtn">Know
                            More</a>
                    </div>
                </div>
            @endforeach
        </div>


    </div>



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
                            src="{{ asset('website/assets/images/FMM_Desktop.png') }}" class=" cardboximg img-fluid"
                            alt="Fragrance Matchmaker"> </a>

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

        <div class="ncbi">*Source: Based on our AI research and NCBI data</div>
    </div>


    <script src="{{ asset('website/assets/vendors/jquery.min.js') }}"></script>

    <script src="{{ asset('website/assets/owlcarousel/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
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
        });
    </script>



    <script>
        let activeFragranceItem = null;

        function UpdateImage(element) {
            const rightImage = document.querySelector('.fragrance-image-mobile img'); // Main image container for mobile
            const externalImageSrc = element.getAttribute('data-image');
            const activeImageSrc = element.getAttribute('data-image-active');
            const internalImage = element.querySelector('.fragrance-image');

            // Reset the previously selected item
            if (activeFragranceItem) {
                activeFragranceItem.classList.remove('active-item');
                const prevInternalImage = activeFragranceItem.querySelector('.fragrance-image');
                prevInternalImage.src = prevInternalImage.getAttribute('data-original-src'); // Reset the original image
            }

            // Update the internal icon image to the active one
            internalImage.setAttribute('data-original-src', internalImage.src); // Save the original image source
            internalImage.src = activeImageSrc; // Change to active image

            // Update the main mobile image
            rightImage.src = externalImageSrc; // Set to active image or fallback to data-image

            // Mark the current item as active
            element.classList.add('active-item');
            activeFragranceItem = element; // Update activeFragranceItem reference
        }



        function resetSlide() {
            const slidingContent = document.querySelector('.sliding-content');
            const rightImage = document.getElementById('rightImage');

            // Remove the 'slide-left' class to slide back
            if (slidingContent.classList.contains('slide-left')) {
                slidingContent.classList.remove('slide-left');
            }

            // Reset the external background image and height
            rightImage.style.backgroundImage = '';
            rightImage.style.height = ''; // Reset the height

            // Reset the active item if any
            if (currentElement) {
                currentElement.classList.remove('active-item');
                const prevInternalImage = currentElement.querySelector('.fragrance-image');
                prevInternalImage.src = prevInternalImage.getAttribute('data-original-src');
                currentElement = null;
            }

        }

        let currentElement = null;

        function shiftContent(element) {
            const slidingContent = document.querySelector('.sliding-content');
            const rightImage = document.getElementById('rightImage');
            const externalImageSrc = element.getAttribute('data-image');
            const activeImageSrc = element.getAttribute('data-image-active');
            const internalImage = element.querySelector('.fragrance-image');

            // Check if 'slide-left' class is already applied, if not, add it
            if (!slidingContent.classList.contains('slide-left')) {
                slidingContent.classList.add('slide-left');
            }

            // Reset the previously selected item
            if (currentElement) {
                currentElement.classList.remove('active-item');
                const prevInternalImage = currentElement.querySelector('.fragrance-image');
                prevInternalImage.src = prevInternalImage.getAttribute('data-original-src');
            }

            // Update the external background image
            rightImage.style.backgroundImage = `url('${externalImageSrc}')`;
            rightImage.style.height = '90%'; // Ensure the container has height

            // Update the internal icon image to active
            internalImage.setAttribute('data-original-src', internalImage.src);
            internalImage.src = activeImageSrc;

            // Mark the current item as active
            element.classList.add('active-item');
            currentElement = element;
        }






        document.addEventListener('DOMContentLoaded', function() {
            // Show More functionality
            const showMoreBtn = document.getElementById('showMoreBtn');
            const shortDescription = document.getElementById('shortDescription');
            const fullDescription = document.getElementById('fullDescription');

            showMoreBtn.addEventListener('click', function() {
                if (fullDescription.classList.contains('d-none')) {
                    fullDescription.classList.remove('d-none');
                    shortDescription.classList.add('d-none');
                    showMoreBtn.textContent = 'Show Less';
                } else {
                    fullDescription.classList.add('d-none');
                    shortDescription.classList.remove('d-none');
                    showMoreBtn.textContent = 'Show More';
                }
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
</x-app-layout>
