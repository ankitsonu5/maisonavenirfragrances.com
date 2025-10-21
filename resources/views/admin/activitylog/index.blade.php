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
                    </div>
                    <div class="col-lg-9 col-xl-10">


                    </div>


                </div>
                <div class="table-responsive mt-3">

                    <table class="table align-middle">
                        <thead class="table-secondary">
                            <form method="get">
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <x-search-input id="logname" type="text" name="logname"
                                            :value="request('logname')" autofocus />
                                    </th>
                                    <th>

                                        <x-search-input id="description" type="text" name="description"
                                            :value="request('description')" autofocus />

                                    </th>
                                    <th>
                                        <x-search-input id="event" type="text" name="event" :value="request('event')"
                                            autofocus />
                                    </th>
                                    <th> {!! adminDropdown('admin_id', request('admin_id') ?? Auth()->user()->id, [],
                                        true) !!}
                                    </th>


                                    <th>
                                        {!! Form::date(
                                        'created_at',
                                        request('created_at'),
                                        array_merge([
                                        'class' => 'form-control',
                                        'id' => 'created_at',
                                        'onchange' => 'this.form.submit()',
                                        ]),
                                        ) !!}
                                    </th>
                                    <th>
                                        {!! Form::date(
                                        'updated_at',
                                        request('updated_at'),
                                        array_merge([
                                        'class' => 'form-control',
                                        'id' => 'updated_at',
                                        'onchange' => 'this.form.submit()',
                                        ]),
                                        ) !!}
                                    </th>
                                </tr>
                            </form>
                            <tr>
                                <th>#</th>
                                <th>Log Name</th>
                                <th>Description</th>
                                <th>Event</th>
                                <th>User Name</th>
                                <th>created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($data as $list)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $list->log_name }}</td>
                                <td>{{ $list->description }}</td>
                                <td>{{ $list->event }}</td>
                                <td>{{ $list->causer->name ?? "" }}</td>
                                <td>{{ $list->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.' . $module . '.show', $list) }}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Views"
                                            data-bs-original-title="Views"><i class="bi bi-eye-fill"></i></a>

                                        @can('activitylog-delete')
                                        {!! Form::open([
                                        'method' => 'delete',
                                        'route' => ['admin.' . $module . '.destroy', $list->id],
                                        'enctype' => 'multipart/form-data',
                                        'id' => 'form',
                                        'files' => true,
                                        ]) !!}
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
                            <td colspan="7">
                                <p class="text-center  ">Data Not Found</p>
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
