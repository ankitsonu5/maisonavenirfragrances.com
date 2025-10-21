<x-admin-layout>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Layer Withs</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.layer-withs.index') }}">
                            <i class="bx bx-home-alt"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-12">
                    <a href="{{ route('admin.layer-withs.create') }}" class="btn btn-primary mb-0 px-2">
                        <i class="bx bx-plus"></i> Add Layer With
                    </a>
                </div>
            </div>

            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Product</th>

                            <th>Layer 1
                            </th>
                            <th>Layer 2</th>
                            {{-- <th>Status</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $list)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $list->product->name ?? 'N/A' }}</td>
                                <td>{{ $list->layerOne->name ?? 'N/A' }}</td>
                                <td>{{ $list->layerTwo->name ?? 'N/A' }}</td>
                                {{-- <td>
                                   {{$list->status == 1 ? 'Enabled' : 'Disabled'}}
                                </td> --}}
                                <td>



                                    <a href="{{ route('admin.layer-withs.edit', $list->id) }}" class="text-primary "><i
                                            class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('admin.layer-withs.destroy', $list->id) }}" method="POST"
                                        class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm text-danger "><i
                                                class="bi text-danger bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $data->links() }}
                    <p>Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} Entries</p>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
