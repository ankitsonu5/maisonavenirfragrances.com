<x-admin-layout>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">User System Tracking</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group"></div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">

            {{-- Filters --}}
            <form action="{{ route('admin.user-system-tracking.index') }}" method="GET" class="row mb-3">
                <div class="col-md-3">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                        placeholder="Search IP, browser, platform, email">
                </div>
                <div class="col-md-3">
                    <input type="date" name="start_date" value="{{ request('start_date') }}" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="date" name="end_date" value="{{ request('end_date') }}" class="form-control">
                </div>
                <div class="col-md-3 d-flex">
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <a href="{{ route('admin.user-system-tracking.export', request()->all()) }}"
                        class="btn btn-success">
                        Export to Excel
                    </a>
                    <a href="{{ route('admin.user-system-tracking.exportPdf', request()->query()) }}" class="btn  me-2 btn-danger">
                        <i class="bi bi-file-earmark-pdf-fill"></i> Export PDF
                    </a>
                </div>
            </form>
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IP Address</th>
                            <th>Browser</th>
                            <th>Platform</th>
                            <th>Device</th>

                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $tracking)
                            <tr data-id="{{ $tracking->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tracking->ip_address }}</td>
                                <td>{{ $tracking->browser }}</td>
                                <td>{{ $tracking->platform }}</td>
                                <td>{{ $tracking->device }}</td>

                                <td>{{ $tracking->city ?? 'N/A' }}</td>
                                <td>{{ $tracking->state ?? 'N/A' }}</td>
                                <td>{{ $tracking->country ?? 'N/A' }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.user-system-tracking.show', $tracking) }}"
                                            class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            aria-label="View" data-bs-original-title="View">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <p class="text-center">Data Not Found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
