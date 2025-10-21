<x-admin-layout>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Order</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('admin.order.index') }}" class="btn btn-dark mb-0 px-2"><i class="fadeIn animated bx bx-undo"></i> Back to Orders</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="p-4">
                <ul class="nav nav-pills mb-4 bg-light " id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-order-details-tab" data-bs-toggle="pill" data-bs-target="#pills-order-details" type="button" role="tab" aria-controls="pills-order-details" aria-selected="true">Order Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-user-details-tab" data-bs-toggle="pill" data-bs-target="#pills-user-details" type="button" role="tab" aria-controls="pills-user-details" aria-selected="false">User Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-addresses-tab" data-bs-toggle="pill" data-bs-target="#pills-addresses" type="button" role="tab" aria-controls="pills-addresses" aria-selected="false">Addresses</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-order-details" role="tabpanel" aria-labelledby="pills-order-details-tab" tabindex="0">
                        <div class="card mb-4">
                            <div class="card-header bg-light text-dark">
                                <h3 class="mb-0">Order #{{ $order->id }}</h3>
                            </div>
                            <div class="card-body">
                                <p><strong>Status:</strong> <span class="badge bg-dark">{{ ucfirst($order->status) }}</span></p>
                                <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                                <p><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>
                                <p><strong>Razorpay Payment ID:</strong> {{ $order->razorpay_payment_id }}</p>
                                <p><strong>Razorpay Order ID:</strong> {{ $order->razorpay_order_id }}</p>
                                <p><strong>Razorpay Signature:</strong> {{ $order->razorpay_signature }}</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-light text-dark">
                                <h4 class="mb-0">Ordered Items</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($order->orderItems as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $item->serviceItem->name }}
                                            <span class="badge bg-secondary mx-2 px-3  py-1 rounded-pill">x{{ $item->quantity }}</span>
                                            <span class="ms-auto">₹{{ $item->price }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-user-details" role="tabpanel" aria-labelledby="pills-user-details-tab" tabindex="0">
                        <div class="card mb-4">
                            <div class="card-header bg-light text-dark">
                                <h3 class="mb-0">User Details</h3>
                            </div>
                            <div class="card-body">
                                <p><strong>Name:</strong> {{ $user->name }}</p>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>Phone:</strong> {{ $user->phone }}</p>
                                <!-- Add other user details as needed -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-addresses" role="tabpanel" aria-labelledby="pills-addresses-tab" tabindex="0">
                        <div class="card">
                            <div class="card-header bg-light text-dark">
                                <h3 class="mb-0">User Addresses</h3>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($addresses as $address)
                                        <li class="list-group-item @if($address->id == $order->address_id) list-group-item-success @endif">
                                            <p>{{ $address->address }}, {{ $address->city }}, {{ $address->state }}, {{ $address->postcode }}, {{ $address->country }}</p>
                                            <p><strong>Phone:</strong> {{ $address->phone }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>

<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    .page-breadcrumb .breadcrumb-title {
        font-size: 1.5rem;
    }
    .btn-group .btn {
        background-color: #000;
        color: #fff;
    }
    .card {
        border: none;
        border-radius: 10px;
    }
    .card-body {
        background-color: #ffffff;
        border-radius: 10px;
    }
    .card-header {
        border-radius: 10px 10px 0 0;
    }
    .nav-pills .nav-link {
        color: #495057;
        background-color: #f8f9fa;
    }
    .nav-pills .nav-link.active {
        background-color: #007bff;
        color: #ffffff;
    }
    .list-group-item-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
    .list-group-item {
        border: 1px solid #e9ecef;
        border-radius: 5px;
    }
    .badge {
        font-size: 1rem;
    }
</style>
