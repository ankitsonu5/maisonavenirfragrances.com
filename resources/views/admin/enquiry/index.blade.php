<x-admin-layout>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Enquiry</div>
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

            {{-- Search & Export --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                <form action="{{ route('admin.enquiry.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control me-2"
                        placeholder="Search name, email, contact, gender">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <a href="{{ route('admin.enquiry.export', ['search' => request('search')]) }}" class="btn btn-success">
                    Export to Excel
                </a>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Date</th> {{-- New column --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($enquiries as $enquirie)
                            <tr data-id="{{ $enquirie->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enquirie->name }}</td>
                                <td>{{ $enquirie->email }}</td>
                                <td>{{ $enquirie->contact_number }}</td>
                                <td>{{ $enquirie->age }}</td>

                                <td>{{ ucfirst($enquirie->gender) }}</td>
                                <td>{{ $enquirie->created_at->format('d-m-Y H:i') }}</td>
                                <td> <a class="text-danger" href="{{ route('admin.enquiry.delete', $enquirie->id) }}"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Delete"
                                        data-bs-original-title="Delete"><i class="bi text-danger bi-trash-fill"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No Enquiries Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="">
                    {{ $enquiries->links() }}
                    {{-- <p>Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of
                      {{ $data->total() }} Entries</p> --}}
                </div>

            </div>
        </div>
    </div>

</x-admin-layout>
