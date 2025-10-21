<x-admin-layout>

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">{{ $module }}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.' . $module . '.index') }}"><i
                                class="bx bx-home-alt"></i></a>
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
            {{-- <div class="d-flex align-items-center"> --}}


            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-2">
                    @can('employee-create')
                        <a href="{{ route('admin.' . $module . '.create') }}" class="btn btn-primary mb-0  px-2"> <i
                                class="bx bx-plus"></i> Creat {{ $module }} </a>
                    @endcan
                </div>
                <div class="col-lg-9 col-xl-10">


                </div>


            </div>
            <div class="table-responsive mt-3">

                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>

                            <th>Name</th>
                            <th>Email</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>



                        @forelse  ($data as $list)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $list->name }}</td>
                                <td>{{ $list->email }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.' . $module . '.show', $list) }}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Views"
                                            data-bs-original-title="Views"><i class="bi bi-eye-fill"></i></a>
                                        @can('employee-edit')
                                            <a href="{{ route('admin.' . $module . '.edit', $list) }}" class="text-warning"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Edit"
                                                data-bs-original-title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        @endcan
                                        @can('employee-delete')
                                            {!! Form::open([
                                                'method' => 'delete',
                                                'route' => ['admin.' . $module . '.destroy', $list->id],
                                                'enctype' => 'multipart/form-data',
                                                'id' => 'form',
                                                'files' => true,
                                            ]) !!}
                                            {{--
                                                <a type="button" class="btn btn-app" ">
                                                    <i class="fa fa-trash-o"></i>
                                                    Delete
                                                </button> --}}
                                            <a type="submit" onclick="confirmDelete(this);" class="text-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Delete"
                                                data-bs-original-title="Delete"><i
                                                    class="bi text-danger bi-trash-fill"></i></a>
                                            {!! Form::close() !!}
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            </tr>
                            <td colspan="5">
                                <h3 class="text-center  ">No {{ $module }}</h3>
                            </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                <div class="">
                    {{ $data->links() }}
                    <p>Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of
                        {{ $data->total() }} Entries</p>




                </div>

            </div>
        </div>
    </div>


</x-admin-layout>
