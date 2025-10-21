<x-app-layout :title="'Pair Your Personality with the Perfect Scent
'"
    :description="' Find the fragrance that matches your personality with Maison de l Avenir s Fragrance Matchmaker. Explore unique scent options tailored just for you'">

    <div class="custom-banner">
        <img class="dd" src="{{ asset('website/assets/fragrancematchmaker/Fragrance Matchmaker Bannner.jpg') }}"
            alt="Fragrance Matchmaker" />
        <img class="md" src="{{ asset('website/assets/fragrancematchmaker/Fragrance Matchmaker Mobile.jpg') }}"
            alt="Fragrance Matchmaker" />
    </div>




    <div class="container mt-5">
        <iframe width="100%" height="743" src="https://pfwa-www-maisonavenirfragrances-com.pfwa.perfumist.site"
            frameborder="0"></iframe>
    </div>
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
                        <img class="icone" src="{{ asset('website/assets/homeicone/6.png') }}" alt="Floral Icon">
                        <p>{!! $row->vegan !!}</p>
                    </div>
                    @endif

                    @if ($row->natural_oils)
                    <div>
                        <img class="icone" src="{{ asset('website/assets/homeicone/4.png') }}" alt="Aqua Icon">
                        <p>{!! $row->natural_oils !!}</p>
                    </div>
                    @endif

                    @if ($row->essential_oils)
                    <div>
                        <img class="icone" src="{{ asset('website/assets/homeicone/5.png') }}" alt="Woody Icon">
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



    <div class="container">
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
                        <img class="icone" src="{{ asset('website/assets/homeicone/6.png') }}" alt="Floral Icon">
                        <p>{!! $row->vegan !!}</p>
                    </div>
                    @endif

                    @if ($row->natural_oils)
                    <div>
                        <img class="icone" src="{{ asset('website/assets/homeicone/4.png') }}" alt="Aqua Icon">
                        <p>{!! $row->natural_oils !!}</p>
                    </div>
                    @endif

                    @if ($row->essential_oils)
                    <div>
                        <img class="icone" src="{{ asset('website/assets/homeicone/5.png') }}" alt="Woody Icon">
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

    <div class="container">

        <a href="{{ route('aifragrancefinder') }}">
            <p class="idealperfume">Discover your ideal perfume, based on</p>
            <div class="imagesrial">
                <!-- For Desktop -->
                <img src="{{ asset('AI FF.png') }}" alt="for-yourself" class="d-none d-md-block">
                <center>
                    <div class="row justify-content-md-center">
                        <div class="col-12">
                            <!-- For Mobile -->
                            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/AI FF_Mobile.png') }}"
                                alt="for-yourself" class="d-block d-md-none">
                        </div>
                    </div>

                </center>

            </div>

        </a>
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




    @push('script')
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
                    navText: [
                        '<img src="website/assets/images/fragrance-details/left.png" alt="Left Arrow">', // Left arrow image
                        '<img src="website/assets/images/fragrance-details/right.png" alt="Right Arrow" >' // Right arrow image
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
    @endpush
</x-app-layout>