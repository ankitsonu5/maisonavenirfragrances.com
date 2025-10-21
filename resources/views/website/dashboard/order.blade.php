<x-app-layout>
    <main class="main">
        <section class="pt-sm-7">
            <div class="container pt-3 pt-xl-5">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-lg-4 col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        @include('website.dashboard.nav')
                    </div>

                    <!-- Main content -->
                    <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                        <!-- Title and offcanvas button -->
                        <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                            <!-- Title -->
                            <h1 class="h3 mb-0">Order History</h1>
                        </div>

                        <!-- Order List -->
                        @if($orders->isEmpty())
                            <p>No orders found.</p>
                        @else
                            @foreach($orders as $order)
                                <div class="order-card mb-4 p-3 border rounded">
                                    <h4 class="mb-2">Order #{{ $order->id }}</h4>
                                    <p>Status: {{ $order->status }}</p>
                                    <p>Total Amount: ₹{{ number_format($order->total_amount, 2) }}</p>
                                    <p>Payment Method: {{ $order->payment_method }}</p>

                                    <!-- Order Items -->
                                    <h5 class="mt-3">Items:</h5>
                                    <ul>
                                        @foreach($order->orderItems as $item)
                                            <li>
                                                {{ $item->serviceItem->name }} - Quantity: {{ $item->quantity }} - Price: ₹{{ number_format($item->price, 2) }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
