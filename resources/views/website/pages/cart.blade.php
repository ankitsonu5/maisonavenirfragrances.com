<x-app-layout>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')" alt="" >
            <div class="container">
                <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
            </div>
        </div>

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div>
        </nav>

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{ asset('storage/serviceitem/' . $item->serviceItem->image) }}" alt="Product image">
                                                        </a>
                                                    </figure>
                                                    <h3 class="product-title">
                                                        <a href="#">{{ $item->serviceItem->name }}</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td class="price-col">₹{{ $item->serviceItem->price }}</td>
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" class="form-control" value="{{ $item->quantity }}" min="1" max="10" step="1" data-decimals="0" required disabled>
                                                </div>
                                            </td>
                                            <td class="total-col">₹{{ $item->quantity * $item->serviceItem->price }}</td>
                                            <td class="remove-col">
                                                <a href="{{ route('cart.remove', $item->id) }}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- <div class="cart-bottom">
                                <div class="cart-discount">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" required placeholder="coupon code">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                            </div> --}}
                        </div>

                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Cart Total</h3>

                                <table class="table table-summary">
                                    <tbody>
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>₹{{ $cartTotal }}</td>
                                        </tr>
                                        <tr class="summary-shipping">
                                            <td>Shipping:</td>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>₹{{ $cartTotal }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <a href="{{ route('checkout.index') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                            </div>

                            {{-- <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
