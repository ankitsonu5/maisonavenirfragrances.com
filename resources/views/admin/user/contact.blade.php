<x-admin-layout>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Contact Detail</div>
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

            {{-- Search & Export Row --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                {{-- Search Form --}}
                <form action="" method="GET" class="d-flex">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control me-2"
                        placeholder="Search name, email, company, country">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                {{-- Export Button --}}
                <a href="{{ route('admin.contact.export') }}" class="btn btn-success">Export to Excel</a>
            </div>

            {{-- Table --}}
            <div class="mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company Name</th>
                            <th>Contact Number</th>

                            <th>Country</th>
                            <th>Date</th> {{-- New column --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> <a href="{{ route('admin.contact.show', $user->id) }}">{{ $user->name }}</a></td>
                                <td>{{ ucfirst($user->email) }}</td>
                                <td>{{ $user->company_name }}</td>
                                <td>{{ $user->contact_number }}</td>

                                <td style="word-wrap: break-word">{{ $user->country }}</td>
                                <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data Not Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div>
                {{ $data->links() }}
            </div>

        </div>
    </div>


</x-admin-layout>
