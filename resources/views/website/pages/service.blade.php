<x-app-layout>
    <div class="page-header text-center mb-3" style="background-image: url('{{ asset('website/assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">{{ $service->name }}<span></span></h1>
        </div>
    </div>

    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">{{ $service->name }}</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    @foreach ($categorizedItems as $category => $items)
                        <li class="nav-item">
                            <a class="nav-link" id="new-{{ Str::slug($category) }}-link" data-toggle="tab" href="#new-{{ Str::slug($category) }}-tab" role="tab" aria-controls="new-{{ Str::slug($category) }}-tab" aria-selected="false">{{ $category }}</a>
                        </li>
                    @endforeach
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    @foreach ($categorizedItems as $category => $items)
                        @foreach ($items as $list)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('storage/serviceitem/' . $list->image) }}" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        {{-- <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a> --}}
                                    </div><!-- End .product-action -->

                                    <form method="post" action="{{ route('addtocart') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $list->id }}">
                                        <div class="product-action">
                                            <button type="submit" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></button>
                                            {{-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Inquiry Now"><span>Inquiry Now</span></a> --}}
                                        </div><!-- End .product-action -->
                                    </form>
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $list->category->name }}</a>
                                    </div><!-- End .product-cat -->
                                    <p class="product-title"><a href="#">{{ $list->name }}</a></p><!-- End .product-title -->
                                    <p class="product-description">{{ $list->description }}</p><!-- End .product-title -->
                                    <div class="product-price">
                                        ₹ {{ $list->price }}
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( {{ $list->reviews_count }} Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach
                    @endforeach
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->

            @foreach ($categorizedItems as $category => $items)
                <div class="tab-pane p-0 fade" id="new-{{ Str::slug($category) }}-tab" role="tabpanel" aria-labelledby="new-{{ Str::slug($category) }}-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        @foreach ($items as $item)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('storage/serviceitem/' . $item->image) }}" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        {{-- <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a> --}}
                                    </div><!-- End .product-action -->

                                    <form method="post" action="{{ route('addtocart') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                        <div class="product-action">
                                            <button type="submit" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></button>
                                            {{-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> --}}
                                        </div><!-- End .product-action -->
                                    </form>
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $item->category->name }}</a>
                                    </div><!-- End .product-cat -->
                                    <h5 class="product-title"><a href="#">{{ $item->name }}</a></h5><!-- End .product-title -->
                                    <div class="product-price">
                                        ₹ {{ $item->price }}
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( {{ $item->reviews_count }} Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            @endforeach
        </div><!-- End .tab-content -->
    </div><!-- End .container -->
    <div class="mb-3"></div><!-- End .mb-5 -->
</x-app-layout>
