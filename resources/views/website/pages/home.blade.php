<x-app-layout :title="' Fine Niche Fragrances | Maison de l Avenir '" :description="'Discover fine niche fragrances—an elegant fusion of Eastern opulence and Western refinement, meticulously crafted with AI for unparalleled luxury'">
    @push('application')
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Maison de l’Avenir",
      "alternateName": "Fine Niche Fragrances",
      "url": "https://maisonavenirfragrances.com/",
      "logo": "https://maisonavenirfragrances.com/website/assets/images/logo1.png",
      "sameAs": [
        "https://www.facebook.com/maisonavenirfragrance",
        "https://www.instagram.com/maisonavenirfragrances/",
        "https://www.tiktok.com/@maisonavenirfragrances",
        "https://ae.linkedin.com/in/maison-de-l-avenir-fragrances"
      ]
    }

{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Maison de l'Avenir",
  "alternateName": "Maison de l Avenir",
  "url": "https://www.maisonavenirfragrances.com/"
}

{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Maison de l'Avenir",
  "alternateName": "Maison de l Avenir",
  "url": "https://www.maisonavenirfragrances.com/",
  "description": "Fine Niche Fragrances - An elegant fusion of Eastern opulence and Western refinement",
  "sameAs": [
    "https://www.instagram.com/maisonavenirfragrances/",
    "https://www.facebook.com/maisonavenirfragrances"
  ]
}
</script>
    @endpush
    <div class="d-flex justify-content-evenly">
        <style>
            .home-bg-light p,
            span {

                color: #000000 !important;
            }

            .home-bg-dark p span {

                color: #dcdcdc !important;
            }
        </style>
        <h1 class="d-none">Fine Niche Fragrances | Maison de l Avenir</h1>
        <div class="scroll-container sm-none pt-8" id="product-list">

            <a href="{{ route('aifragrancefinder') }}" class="card-link ai-card card-home-item"
                aria-label="Find AI Fragrances">
                <div class="card-content">

                </div>
            </a>

            <a href="#" class="card-link fragrance-card card-home-item" aria-label="Explore Fragrances">
                <div class="card-content">


                </div>
            </a>

            <a href="{{ route('ourfragrance') }}" class="card-link ourfragrances-card card-home-item"
                aria-label="Our Fragrances">
                <div class="card-content">


                </div>
            </a>

            <a href="{{ route('about') }}" class="card-link about-card card-home-item" aria-label="About Us">
                <div class="card-content">


                </div>
            </a>

            <a href="{{ route('contact') }}" class="card-link  conatct-card  card-home-item" aria-label="Contact Us">
                <div class="card-content">


                </div>
            </a>

            {{-- <a href="{{ route('contact') }}">

                <div class="mcard mcarddark">
                    <!-- <img src="{{ asset('website/assets/images/Ai-fragrances2.png') }}"> -->
                    <span class="mcard-title text-light">Contact Us</span>
                </div>


            </a> --}}
        </div>



        <div class="sm-none  scroll-container pt-24">
            @for ($i = 0; $i < 2; $i++)
                @foreach ($producta->shuffle() as $list)
                    <a href="{{ route('fragrancedetail', $list->slug) }}">
                        <div style="border-color:{{ $list->collection->colorcode }}"
                            class="card-home card-home-item home-nave  {{ $loop->odd ? ' home-bg-dark ' : '  home-bg-light' }}"
                            style="width: 18rem;">
                            <img src="{{ Storage::url('product/' . $list->pakking_image) }}" class="card-img-top"
                                alt="{{ $list->name }}" loading="lazy">
                            <div class="home-product-name"><span
                                    class=" {{ $loop->odd ? ' text-light ' : '   text-dark' }}">{{ $list->name }}<span>
                            </div>
                            {{-- <div class="home-product-callection"><span
                                class=" {{ $loop->odd ? ' text-light ' : '  text-dark' }}">{{ $list->collection->name
                                }}</span>
                        </div> --}}
                            <div class="home-bottom-text">
                                <span
                                    class="  {{ $loop->odd ? ' text-light ' : '  text-dark' }}">{{ $list->fragrance_title }}</span>
                            </div>
                            <p class="home-product-shot-description">
                                {!! $list->short_description !!}
                            </p>

                            <div class="home-icon-container">
                                @if ($loop->odd)
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone" src="{{ asset('website/assets/homeicone/6.png') }}"
                                                alt="Floral Icon" loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif


                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/4.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone" src="{{ asset('website/assets/homeicone/5.png') }}"
                                                alt="Woody Icon" loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @else
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone" src="{{ asset('website/assets/homeicone/3.png') }}"
                                                alt="Floral Icon" loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif

                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/1.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone" src="{{ asset('website/assets/homeicone/2.png') }}"
                                                alt="Woody Icon" loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @endif

                            </div>

                        </div>
                    </a>
                @endforeach

            @endfor

        </div>
        <div class="sm-none scroll-container   pt-8">
            @for ($i = 0; $i < 2; $i++)
                @foreach ($productb->shuffle() as $list)
                    <a href="{{ route('fragrancedetail', $list->slug) }}">
                        <div style="border-color:{{ $list->collection->colorcode }}"
                            class="card-home card-home-item home-nave  {{ $loop->even ? ' home-bg-dark' : ' home-bg-light' }}"
                            style="width: 18rem;">
                            <img src="{{ asset('storage/product/' . $list->pakking_image) }}" class="card-img-top"
                                alt="{{ $list->name }}">
                            <div class="home-product-name"><span
                                    class=" {{ $loop->even ? ' text-light ' : '   text-dark' }}">{{ $list->name }}<span>
                            </div>
                            {{-- <div class="home-product-callection"><span
                                class="{{ $loop->even ? ' text-light ' : '  text-dark' }}">{{ $list->collection->name
                                }}</span>
                        </div> --}}

                            <div class="home-bottom-text">
                                <span
                                    class="{{ $loop->even ? ' text-light ' : '  text-dark' }}">{{ $list->fragrance_title }}</span>
                            </div>


                            <p class="home-product-shot-description">
                                {!! $list->short_description !!}
                            </p>

                            <div class="home-icon-container">
                                @if ($loop->even)
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone" src="{{ asset('website/assets/homeicone/6.png') }}"
                                                alt="Floral Icon" loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif


                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/4.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone" src="{{ asset('website/assets/homeicone/5.png') }}"
                                                alt="Woody Icon" loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @else
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/3.png') }}" alt="Floral Icon"
                                                loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif

                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/1.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/2.png') }}" alt="Woody Icon"
                                                loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @endif

                            </div>

                        </div>
                    </a>
                @endforeach


            @endfor

        </div>

        <div class="sm-none scroll-container pt-24">
            @for ($i = 0; $i < 2; $i++)
                @foreach ($productc->shuffle() as $list)
                    <a href="{{ route('fragrancedetail', $list->slug) }}">
                        <div style="border-color:{{ $list->collection->colorcode }}"
                            class="card-home card-home-item home-nave {{ $loop->odd ? ' home-bg-dark' : ' home-bg-light' }}"
                            style="width: 18rem;">
                            <img src="{{ asset('storage/product/' . $list->pakking_image) }}" class="card-img-top"
                                alt="{{ $list->name }}" loading="lazy">
                            <div class="home-product-name"><span
                                    class=" {{ $loop->odd ? ' text-light ' : '   text-dark' }}">{{ $list->name }}<span>
                            </div>
                            {{-- <div class="home-product-callection"><span
                                class="{{ $loop->odd ? ' text-light ' : '  text-dark' }}">{{ $list->collection->name
                                }}</span>
                        </div> --}}

                            <div class="home-bottom-text">
                                <span
                                    class="{{ $loop->odd ? ' text-light ' : '  text-dark' }}">{{ $list->fragrance_title }}</span>
                            </div>

                            <p class="home-product-shot-description">
                                {!! $list->short_description !!}
                            </p>
                            <div class="home-icon-container">
                                @if ($loop->odd)
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/6.png') }}"
                                                alt="Floral Icon">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif


                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/4.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/5.png') }}" alt="Woody Icon "
                                                loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @else
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/3.png') }}" alt="Floral Icon"
                                                loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif

                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/1.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/2.png') }}" alt="Woody Icon"
                                                loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @endif

                            </div>

                        </div>
                    </a>
                @endforeach
            @endfor

        </div>

        {{-- // mobile data --}}
        <div class=" scroll-container md-none  pt-8" id="product-list">

            <a href="{{ route('aifragrancefinder') }}">
                <div class="card-link   ai-card-mobile card-home-item  " style="width: 18rem;">
                </div>
            </a>



            <a href="#">
                <div class="card-link   fragrance-card-mobile card-home-item  " style="width: 18rem;">
                </div>
            </a>


            <a href="{{ route('ourfragrance') }}">
                <div class="card-link   ourfragrances-card-mobile card-home-item  " style="width: 18rem;">
                </div>
            </a>



            <a href="{{ route('about') }}">
                <div class="card-link  about-card-mobile card-home-item " style="width: 18rem;">
                </div>
            </a>


            <a href="{{ route('contact') }}">
                <div class="card-link  conatct-card-mobile card-home-item " style="width: 18rem;">
                </div>
            </a>



        </div>

        <div class="md-none  scroll-container pt-24">
            @for ($i = 0; $i < 2; $i++)
                @foreach ($product as $list)
                    <a href="{{ route('fragrancedetail', $list->slug) }}">
                        <div class="card-home card-home-item home-nave  {{ $loop->odd ? ' home-bg-dark ' : '  home-bg-light' }}"
                            style="width: 18rem;">
                            <img src="{{ Storage::url('product/' . $list->pakking_image) }}" class="card-img-top"
                                alt="{{ $list->name }}" loading="lazy">
                            <div class="home-product-name"><span
                                    class=" {{ $loop->odd ? ' text-light ' : '   text-dark' }}">{{ $list->name }}<span>
                            </div>
                            {{-- <div class="home-product-callection"><span
                            class="{{ $loop->odd ? ' text-light ' : '  text-dark' }}">{{ $list->collection->name
                            }}</span>
                    </div> --}}
                            <div class="home-bottom-text">
                                <span
                                    class="{{ $loop->odd ? ' text-light ' : '  text-dark' }}">{{ $list->fragrance_title }}</span>
                            </div>
                            <p class="home-product-shot-description">
                                {!! $list->short_description !!}
                            </p>
                            <div class="home-icon-container">
                                @if ($loop->odd)
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/6.png') }}"
                                                alt="Floral Icon " loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif


                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/4.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/5.png') }}" alt="Woody Icon"
                                                loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @else
                                    @if ($list->vegan)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/3.png') }}" alt="Floral Icon"
                                                loading="lazy">
                                            <p>{!! $list->vegan !!}</p>
                                        </div>
                                    @endif

                                    @if ($list->natural_oils)
                                        <div class="text-center">
                                            <img class="home-icone "
                                                src="{{ asset('website/assets/homeicone/1.png') }}" alt="Aqua Icon"
                                                loading="lazy">
                                            <p>{!! $list->natural_oils !!}</p>
                                        </div>
                                    @endif
                                    @if ($list->essential_oils)
                                        <div class="text-center">
                                            <img class="home-icone"
                                                src="{{ asset('website/assets/homeicone/2.png') }}" alt="Woody Icon"
                                                loading="lazy">
                                            <p>{!! $list->essential_oils !!}</p>
                                        </div>
                                    @endif
                                @endif

                            </div>

                        </div>
                    </a>
                @endforeach
            @endfor

        </div>
        {{-- // mobile data end --}}
    </div>

</x-app-layout>
