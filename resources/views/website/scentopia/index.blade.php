<x-app-layout :title="'A world of fine  niche fragrances'" :description="'We offer AI-crafted Fine Niche Fragrances, that combine Eastern opulence and
                    luxury, with Western
                    elegance and refinery, to offer a timeless, transcendent olfactory experience.
'">
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
                <h1 class="page-heading">A World of Fine <br> Niche Fragrances</h1>
            </div>
            <div class="col-md-4 col-12">
                <p class="page-content">We offer AI-crafted Fine Niche Fragrances, that combine Eastern opulence and
                    luxury, with Western
                    elegance and refinery, to offer a timeless, transcendent olfactory experience.</p>
            </div>
        </div>
    </div>

    <div class="container text-center ">
        <div class="row ">
            <!-- Elixir -->
            <div class="col-md-3 col-6">
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.index') }}">
                    <div class="item">

                        <img src="/website/scentopia/elixir.png" alt="Elixir" class="fourcolthumbsec img-fluid">
                        <h5>Elixir</h5>


                        <div class="hover-content">
                            <p>The essence of rarity, with bold compositions infused with intensity and soul.</p><br>
                            <div class="explore-btn">

                                <img src="/website/scentopia/explore.png" alt="Explore Elixir" class="">

                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Supernova -->
            <div class="col-md-3 col-6 ">
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.supernova.index') }}">
                    <div class="item">
                        <img src="/website/scentopia/supernova.png" alt="Supernova" class="fourcolthumbsec img-fluid">
                        <h5>Supernova</h5>
                        <div class="hover-content">
                            <p>An explosive statement of contrast made to leave a trail of wonder.</p><br>
                            <div class="explore-btn">

                                <img src="/website/scentopia/explore.png" alt="Explore Supernova" class="">

                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Zenith -->
            <div class="col-md-3 col-6 ">
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.index') }}">
                    <div class="item">
                        <img src="/website/scentopia/zenith.png" alt="Zenith" class="fourcolthumbsec img-fluid">
                        <h5>Zenith</h5>
                        <div class="hover-content">
                            <p>Elevated blends that balance serenity and modern allure.</p><br>
                            <div class="explore-btn">

                                <img src="/website/scentopia/explore.png" alt="Explore Zenith" class="">

                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Aura -->
            <div class="col-md-3 col-6 ">
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.index') }}">
                    <div class="item">
                        <img src="/website/scentopia/aura.png" alt="Aura" class="fourcolthumbsec img-fluid">
                        <h5>Aura</h5>
                        <div class="hover-content">
                            <p>Radiant scents crafted for effortless elegance every day.</p><br>
                            <div class="explore-btn">

                                <img src="/website/scentopia/explore.png" alt="Explore Aura" class="">

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>




    </div>


    @include('website.scentopia.music')



    <script>
        // var swiper = new Swiper(".mySwiper", {
        //     slidesPerView: 1,
        //     spaceBetween: 10,
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        //     autoplay: {
        //         delay: 2000,
        //         disableOnInteraction: false,
        //     },
        // });

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
            });
        });
    </script>

</x-app-layout>
