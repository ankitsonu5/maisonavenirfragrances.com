<x-admin-layout>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">User</div>
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
                            <th> Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr data-id="{{ $user->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ ucfirst($user->email) }}</td>
                          
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{ route('admin.user.show', $user) }}" class="text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Views"
                                        data-bs-original-title="Views"><i class="bi bi-eye-fill"></i></a>

                                    @can('activitylog-delete')
                                    {!! Form::open([
                                    'method' => 'delete',
                                    'route' => ['admin.user.destroy', $user->id],
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
                    {{ $users->links() }}
                    {{-- <p>Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of
                        {{ $data->total() }} Entries</p> --}}
                </div>

            </div>
        </div>
    </div>
  
</x-admin-layout>