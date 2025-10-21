<div class="container text-center my-5">
    <div class="thrdstepcontsec">
        <div class="row owl-carousel owl-theme owl-carousel-0">

           <!-- Card 1 - Electra Elixir -->
<div class="sglethrdstepcontpart">
    <div class="thrdstepthumbsec">
        <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.electraelixir') }}">
            <img src="/website/scentopia/product/elixir/Eliectra Elixir.png"
                alt="Electra Elixir - A Spark of Citrus and Floral Energy">
        </a>
    </div>
    <p>
        A radiant blend of citrus zest and floral sparks that electrify your senses with vibrant energy.
    </p>
    <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.electraelixir') }}"
        class="viewproductbut">
        <img src="/website/scentopia/explore.png" alt="Explore Electra Elixir">
    </a>
</div>

<!-- Card 2 - Nebula Nectar -->
<div class="sglethrdstepcontpart">
    <div class="thrdstepthumbsec">
        <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.nebula-nectar') }}">
            <img src="/website/scentopia/product/elixir/Nebula Nector.png"
                alt="Nebula Nectar - A Galactic Floral Infusion">
        </a>
    </div>
    <p>
        A cosmic floral infusion capturing the mystery of deep space and divine bloom.
    </p>
    <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.nebula-nectar') }}"
        class="viewproductbut">
        <img src="/website/scentopia/explore.png" alt="Explore Nebula Nectar">
    </a>
</div>

<!-- Card 3 - Nova Noir -->
<div class="sglethrdstepcontpart">
    <div class="thrdstepthumbsec">
        <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.nova-noir') }}">
            <img src="/website/scentopia/product/elixir/Nova Noir.png" alt="Nova Noir - A Deep, Smoky Elegance">
        </a>
    </div>
    <p>
        A dark and mysterious blend with smoky undertones and celestial charm.
    </p>
    <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.nova-noir') }}"
        class="viewproductbut">
        <img src="/website/scentopia/explore.png" alt="Explore Nova Noir">
    </a>
</div>

<!-- Card 4 - Oud Intense -->
<div class="sglethrdstepcontpart">
    <div class="thrdstepthumbsec">
        <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.oud-intense') }}">
            <img src="/website/scentopia/product/elixir/Oud Intense.png"
                alt="Oud Intense - A Bold and Resinous Masterpiece">
        </a>
    </div>
    <p>
        An intense and bold fragrance rich in oud, evoking depth and timeless luxury.
    </p>
    <a onclick="handleClick(event)" href="{{ route('scentopia.product.elixir.oud-intense') }}"
        class="viewproductbut">
        <img src="/website/scentopia/explore.png" alt="Explore Oud Intense">
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
