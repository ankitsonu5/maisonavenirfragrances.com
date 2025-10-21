 <!-- Owl Stylesheets -->
    <x-app-layout :title="$blog['title']" :description="$blog['description']">
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.theme.default.min.css') }}">

    <div class="container  mt-5">
        <div class="row ">
            <div class="col-md-6 col-12">
                <h1 class=" blog-heading my-3">{{ $blog->title }}</h1>
                <div class="blog-description">
                    {!! $blog->description !!} </div>
            </div>
            <div class="col-md-6 col-12">
                <img src="{{ asset('storage/blog/' . $blog->image) }}" class="image-fluid blog-detail-img"
                    alt="">
            </div>
        </div>

        @if ($blog->section_one)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_one !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_two)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_two !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_three)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_three !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_four)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_four !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_five)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_five !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_six)
            <div class="lines"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_six !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_seven)
            <div class="lines"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_seven !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_eight)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_eight !!}
                    </div>
                </div>
            </div>

        @endif

        @if ($blog->section_nine)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_nine !!}
                    </div>
                </div>
            </div>
        @endif

        @if ($blog->section_ten)
            <div class="lines"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-description">
                        {!! $blog->section_ten !!}
                    </div>
                </div>
            </div>
        @endif
        <div class="lines"></div>
        <div class="row">

            <div class="blog-carousel-heading">
                You may also Like
            </div>

            <div class=" owl-carousel owl-theme owl-carousel">
                <!-- Unique class for each carousel -->
                @foreach ($data as $row)
                    <div class="blog-carousel">
                        <img src="{{ asset('storage/blog/' . $row->image) }}" alt="">
                        <p>{{ $row->title }}</p>
                        <a href="{{ route('blog.detail', $row->slug) }}">Read more >></a>
                    </div>
                @endforeach
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

</x-app-layout>
