<x-admin-layout>
    <!--breadcrumb-->
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

                {{-- @include('admin.partials.serch') --}}
            </div>
        </div>
    </div>
    <!--end breadcrumb-->



    <div class="card">
        <div class="card-body">
            {{-- <div class="d-flex align-items-center"> --}}


            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-12">
                    @can('category-create')
                        <a href="{{ route('admin.' . $module . '.create') }}" class="btn btn-primary mb-0  px-2"> <i
                                class="bx bx-plus"></i> Add {{ $module }} </a>
                    @endcan
                </div>
                <div class="col-lg-9 col-xl-10">

                    <form class="float-lg-end">
                        <div class="row row-cols-lg-auto g-4">
                            <div class="col-12">
                                @can('category-export')
                                    @include('admin.partials.export')
                                @endcan
                            </div>
                            <div class="col-12">
                                {{-- @can('category-import')
                                <a type="button" class="btn btn-light mb-0  px-2" data-bs-toggle="modal"
                                    data-bs-target="#Import"><i class="bi bi-upload"></i> Import</a>
                            @endcan --}}
                            </div>
                        </div>
                    </form>
                </div>


            </div>
            <div class="table-responsive mt-3">

                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Category</th>

                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody data-url="{{ route('admin.' . $module . '.update.order') }}" id="menu-list">
                        @forelse  ($data as $list)
                            <tr data-id="{{ $list->id }}">

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if (@$list->image && File::exists('storage/' . $module . '/' . @$list->image))
                                        {{ Html::image(asset('storage/' . $module . '/' . @$list->image), null, ['title' => @$row->image, 'width' => '50px']) }}
                                    @endif
                                </td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->service->name ?? "N/A" }}</td>
                                <td>{{ $list->category->name  ?? "N/A" }}</td>

                                <td>
                                    <div class="form-check form-switch">
                                        {{ Form::checkbox('status', null, $list->status == 1 ? true : false, [
                                            'class' => ' form-check-input status ',
                                            'id' => 'status_' . $list->id,
                                            'data-id' => $list->id,
                                            'data-url' => route('admin.' . $module . '.update.status', $list),
                                        ]) }}
                                    </div>
                                </td>

                                <td>
                                    @include('admin.partials.action')
                                </td>
                            </tr>
                        @empty
                            </tr>
                            <td colspan="5">
                                <p class="text-center  ">Data Not Found</h3>
                            </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                <div class="">
                    {{ $data->links() }}
                    {{-- <p>Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of
                        {{ $data->total() }} Entries</p> --}}
                </div>

            </div>
        </div>
    </div>
    @include('admin.partials.updateOrder')
</x-admin-layout>
