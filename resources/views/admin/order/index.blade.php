<x-admin-layout>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Order</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">


            </div>
        </div>
    </div>
    <!--end breadcrumb-->



    <div class="card">
        <div class="card-body">

            <div class="table-responsive mt-3">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Total Amount</th>
                            <th>Razorpay Payment ID</th>
                            <th>Razorpay Order ID</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                        <tr data-id="{{ $order->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ ucfirst($order->payment_method) }}</td>
                            <td> <select style="width: 150px;" class="form-select status-dropdown" data-order-id="{{ $order->id }}">
                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="completed" {{ $order->status == 'completed' ? 'selected' : ''
                                        }}>Completed</option>
                                    <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : ''
                                        }}>Cancelled</option>
                                </select></td>
                            <td>{{ number_format($order->total_amount , 2) }}</td>
                            <td>{{ $order->razorpay_payment_id }}</td>
                            <td>{{ $order->razorpay_order_id }}</td>

                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{ route('admin.order.show', $order) }}" class="text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Views"
                                        data-bs-original-title="Views"><i class="bi bi-eye-fill"></i></a>

                                    @can('activitylog-delete')
                                    {!! Form::open([
                                    'method' => 'delete',
                                    'route' => ['admin.order.destroy', $order->id],
                                    'enctype' => 'multipart/form-data',
                                    'id' => 'form',
                                    'files' => true,
                                    ]) !!}
                                    <a type="submit" onclick="confirmDelete(this);" class="text-danger"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Delete"
                                        data-bs-original-title="Delete"><i class="bi text-danger bi-trash-fill"></i></a>
                                    {!! Form::close() !!}
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">
                                <p class="text-center">Data Not Found</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="">
                    {{ $orders->links() }}
                    {{-- <p>Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of
                        {{ $data->total() }} Entries</p> --}}
                </div>

            </div>
        </div>
    </div>
    @push('scripts')

    <script>
        $(document).ready(function() {
        $('.status-dropdown').change(function() {
            var status = $(this).val();
            var orderId = $(this).data('order-id');
            
            $.ajax({
                url: '{{ route("admin.order.updateStatus") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    order_id: orderId,
                    status: status
                },
                success: function(response) {
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        dangerMode: true,
                        title: 'Order status updated successfully.'
                         });
                         
                
                },
                error: function(response) {
                    alert('An error occurred while updating the status.');
                }
            });
        });
    });
    </script>
    @endpush
</x-admin-layout>