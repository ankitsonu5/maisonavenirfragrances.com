<div class="container text-center my-5">
    <div class="thrdstepcontsec">
        <div class="row owl-carousel owl-theme owl-carousel-0">

            <!-- Card 1 - Avenir Triumph -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.supernova.avenir-triumph') }}">
                        <img src="/website/scentopia/product/supernova/Avenir Triumph.png"
                            alt="Avenir Triumph - A Bold Leap into the Future">
                    </a>
                </div>
                <p>
                    A futuristic scent celebrating triumph and ambition, with crisp notes that energize the soul.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.supernova.avenir-triumph') }}"
                    class="viewproductbut">
                    <img src="/website/scentopia/explore.png" alt="Explore Avenir Triumph">
                </a>
            </div>

            <!-- Card 2 - Majestic Millenium -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)"
                        href="{{ route('scentopia.product.supernova.majestic-millenium') }}">
                        <img src="/website/scentopia/product/supernova/Majestic Millenium.png"
                            alt="Majestic Millenium - Timeless Luxury">
                    </a>
                </div>
                <p>
                    A majestic blend capturing the grandeur of a new era—timeless, elegant, and enduring.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.supernova.majestic-millenium') }}"
                    class="viewproductbut">
                    <img src="/website/scentopia/explore.png" alt="Explore Majestic Millenium">
                </a>
            </div>

            <!-- Card 3 - Oud Opulence -->
            <div class="sglethrdstepcontpart">
                <div class="thrdstepthumbsec">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.product.supernova.oud-opulence') }}">
                        <img src="/website/scentopia/product/supernova/Oud Opulence.png"
                            alt="Oud Opulence - Royal Essence of Oud">
                    </a>
                </div>
                <p>
                    The richness of oud layered with regal spices—crafted for those who embrace prestige and power.
                </p>
                <a onclick="handleClick(event)" href="{{ route('scentopia.product.supernova.oud-opulence') }}"
                    class="viewproductbut">
                    <img src="/website/scentopia/explore.png" alt="Explore Oud Opulence">
                </a>
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
