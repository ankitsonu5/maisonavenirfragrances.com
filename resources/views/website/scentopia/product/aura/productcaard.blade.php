<div class="container text-center my-5">
    <div class="thrdstepcontsec">
        <div class="row owl-carousel owl-theme owl-carousel-0">
            <!-- Card 1 - Eternal Oud -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.eternal-oud') }}">
                        <img src="/website/scentopia/product/aura/Eternal Oud.png" alt="Eternal Oud">
                    </a>
                </div>
                <p>
                    A divine fusion of oud and exotic spices that transports your senses to mystical eastern realms.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.eternal-oud') }}"
                    class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
            </div>

            <!-- Card 2 - Ethereal Embrace -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.ethereal-embrace') }}">
                        <img src="/website/scentopia/product/aura/Ethereal Embrace.png" alt="Ethereal Embrace">
                    </a>
                </div>
                <p>
                    A soft and airy fragrance that captures the essence of a delicate twilight breeze.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.ethereal-embrace') }}"
                    class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
            </div>

            <!-- Card 3 - Jardin de Jade -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.jardin-de-jade') }}">
                        <img src="/website/scentopia/product/aura/Jardin de Jade.png" alt="Jardin de Jade">
                    </a>
                </div>
                <p>
                    Lush garden notes of green florals and jade blossoms awaken a refreshing vitality.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.jardin-de-jade') }}"
                    class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
            </div>

            <!-- Card 4 - Noir Intense -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.noir-intense') }}">
                        <img src="/website/scentopia/product/aura/Noir Intense.png" alt="Noir Intense">
                    </a>
                </div>
                <p>
                    A bold statement of dark woods and smoky accords, wrapped in seductive mystery.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.noir-intense') }}"
                    class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
            </div>

            <!-- Card 5 - Vortex Echo -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.vortex-echo') }}">
                        <img src="/website/scentopia/product/aura/Vortex Echo.png" alt="Vortex Echo">
                    </a>
                </div>
                <p>
                    A futuristic scent swirling with metallic musk and deep citrus trails.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.aura.vortex-echo') }}"
                    class="viewproductbut"><img src="/website/scentopia/explore.png"></a>
            </div>


        </div>

    </div>




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
