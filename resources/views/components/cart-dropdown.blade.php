<div class="dropdown cart-dropdown">
    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        data-display="static">
        <div class="icon">
            <i class="icon-shopping-cart"></i>
            <span class="cart-count">{{ $cartCount }}</span>
        </div>
        <p>Cart</p>
    </a>

    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-cart-products">
            @foreach ($cartItems as $item)
                <div class="product">
                    <div class="product-cart-details">
                        <h4 class="product-title">
                            <a
                                href="#">{{ $item->serviceItem->name }}</a>
                        </h4>

                        <span class="cart-product-info">
                            <span class="cart-product-qty">{{ $item->quantity }}</span>
                            x ₹{{ $item->serviceItem->price }}
                        </span>
                    </div><!-- End .product-cart-details -->

                    <figure class="product-image-container">
                        <a href="#" class="product-image">
                            <img src="{{ asset('storage/serviceitem/' . $item->serviceItem->image) }}" alt="product">
                        </a>
                    </figure>
                    <a href="{{ route('cart.remove', $item->id) }}" class="btn-remove" title="Remove Product"><i
                            class="icon-close"></i></a>
                </div><!-- End .product -->
            @endforeach
        </div><!-- End .cart-product -->

        <div class="dropdown-cart-total">
            <span>Total</span>
            <span class="cart-total-price">₹{{ $cartTotal }}</span>
        </div><!-- End .dropdown-cart-total -->

        <div class="dropdown-cart-action">
            <a href="{{ route('cart.index') }}" class="btn btn-primary">View Cart</a>
            <a href="{{ route('checkout.index') }}" class="btn btn-outline-primary-2"><span>Checkout</span><i
                    class="icon-long-arrow-right"></i></a>
        </div><!-- End .dropdown-cart-total -->
    </div><!-- End .dropdown-menu -->
</div><!-- End .cart-dropdown -->
