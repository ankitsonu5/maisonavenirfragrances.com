<x-app-layout :title="'Scentopia: Interactive Fragrance Experience'" :description="'Dive into Scentopia for immersive scent journeys. Explore each fragrance in a new, interactive way.'">
    <style>
        .home .div {
            background-image: url('/website/scentopia/bgnew.png') !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <div class="container  my-4">
        <div class="row justify-content-center">
            <div class="col-md-4 col-12 ">
                <h1 class="page-heading">Experience our <br> Elixir Collection </h1>
            </div>
            <div class="col-md-4 col-12">
                <p class="page-content">We offer AI-crafted Fine Niche Fragrances, that combine Eastern opulence and
                    luxury, with Western
                    elegance and refinery, to offer a timeless, transcendent olfactory experience.</p>
            </div>
        </div>
    </div>

    <div class="container text-center my-5">
        <div class=" desktop-view">

            <div class="thrdstepcontsec">
                <div class="row owl-carousel owl-theme owl-carousel-0">
                    <!-- Card 1 -->
                    <div class="sglethrdstepcontpart">
                        <div class="thrdstepthumbsec">
                            <img src="/website/scentopia/product/1.png" alt="Electra Elixir">
                        </div>
                        <p>
                            Inspired by the Mysteries of the Night Sky, This Opulent Fragrance
                            Blends Sweet Apple, Warm Cinnamon, and Alluring Tonka.
                        </p>
                        <a onclick="handleClick(event)"
                            href="{{ route('scentopia.product.electraelixir.oud-intense') }}"
                            class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
                    </div>

                    <!-- Card 2 -->
                    <div class="sglethrdstepcontpart">
                        <div class="thrdstepthumbsec">
                            <img src="/website/scentopia/product/2.png" alt="Celestial Citrus">
                        </div>
                        <p>
                            Inspired by the Vastness of Space, This Fragrance Opens With
                            Bergamot, Lemon, and Orange, Evoking Starlight and a Cosmic Breeze.
                        </p>
                        <a onclick="handleClick(event)"
                            href="{{ route('scentopia.product.electraelixir.oud-intense') }}"
                            class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
                    </div>

                    <div class="sglethrdstepcontpart ">
                        <div class="thrdstepthumbsec">
                            <img src="/website/scentopia/product/3.png">
                        </div>
                        <p>
                            Evoking the Ethereal Beauty of the Cosmos, the Scent Combines
                            Egyptian Jasmine Absolute, Leather, and Amber in a Refined Blend.
                        </p>
                        <a onclick="handleClick(event)"
                            href="{{ route('scentopia.product.electraelixir.nebula-nectar') }}"
                            class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
                    </div>


                    <!-- Card 3 -->
                    <div class="sglethrdstepcontpart">
                        <div class="thrdstepthumbsec">
                            <img src="/website/scentopia/product/4.png" alt="Oud Rose Blend">
                        </div>
                        <p>
                            Discover the Essence of Middle Eastern Fragrance Rituals With
                            Exquisite Boya Oud Essential Oil Blended With Rose Absolute.
                        </p>
                        <a onclick="handleClick(event)"
                            href="{{ route('scentopia.product.electraelixir.oud-intense') }}"
                            class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
                    </div>
                </div>

            </div>





        </div>
        <div class="mobile-view">
            <div class="swiper  mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide item">
                        <img src="/website/scentopia/product/1.png" alt="Elixir" class="img-fluid">
                        <p class="swiper-content">An explosion of vibrant luxury, designed to ignite passion and
                            captivate your senses.</p>
                        <div class="explore-btn">
                            <a onclick="handleClick(event)"
                                href="{{ route('scentopia.product.electraelixir.nebula-nectar') }}"> <img
                                    src="/website/scentopia/explore.png" alt="Zenith" class=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <img src="/website/scentopia/product/2.png" alt="Supernova" class="img-fluid">

                        <p class="swiper-content">An explosion of vibrant luxury, designed to ignite passion and
                            captivate your senses.</p>
                        <div class="explore-btn">
                            <a href="{{ route('scentopia.product.electraelixir.electra-elixir') }}"> <img
                                    src="/website/scentopia/explore.png" alt="Zenith" class=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <img src="/website/scentopia/product/3.png" alt="Zenith" class="img-fluid">

                        <p class="swiper-content">An explosion of vibrant luxury, designed to ignite passion and
                            captivate your senses.</p>
                        <div class="explore-btn">
                            <a onclick="handleClick(event)"
                                href="{{ route('scentopia.product.electraelixir.nebula-nectar') }}"> <img
                                    src="/website/scentopia/explore.png" alt="Zenith" class=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <img src="/website/scentopia/product/4.png" alt="Aura" class="img-fluid">

                        <p class="swiper-content">An explosion of vibrant luxury, designed to ignite passion and
                            captivate your senses.</p>
                        <div class="explore-btn">
                            <a onclick="handleClick(event)"
                                href="{{ route('scentopia.product.electraelixir.oud-intense') }}"> <img
                                    src="/website/scentopia/explore.png" alt="Zenith" class=""></a>
                        </div>
                    </div>
                </div> <!-- Navigation arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>

    </div>
    @include('website.scentopia.music')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

            });
        });
    </script>
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


</x-app-layout>
