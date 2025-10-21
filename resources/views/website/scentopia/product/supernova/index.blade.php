<x-app-layout :title="'Supernova Collection | Interactive Scent Experience
'" :description="'Experience the Supernova collection in Scentopia with engaging videos and animations for each scent.
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
        <div class="row justify-content-between">
            <!-- Back Button - Show first on mobile -->
            <div class="col-md-2 col-12 order-1  text-end  order-md-3">
                <div class="page-content  d-flex justify-content-end justify-content-md-start">
                    <a onclick="handleClick(event)" href="{{ route('scentopia.index') }}" class="know-more-btn-scentopia">
                        <div>Back</div>
                    </a>
                </div>
            </div>

            <!-- Heading -->
            <div class="col-md-4 col-12 order-2 order-md-1">
                <h1 class="page-heading">Experience our <br> Elixir Collection</h1>
            </div>

            <!-- Content -->
            <div class="col-md-4 col-12 order-3 order-md-2">
                <p class="page-content">
                    We offer AI-crafted Fine Niche Fragrances, that combine Eastern opulence and
                    luxury, with Western elegance and refinery, to offer a timeless, transcendent olfactory experience.
                </p>
            </div>
        </div>

    </div>


    @include('website.scentopia.product.supernova.productcaard')



    @include('website.scentopia.music')




</x-app-layout>
