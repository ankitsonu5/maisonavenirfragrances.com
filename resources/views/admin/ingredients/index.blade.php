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
                    @can('collection-create')
                        <a href="{{ route('admin.' . $module . '.create') }}" class="btn btn-primary mb-0  px-2"> <i
                                class="bx bx-plus"></i> Add {{ $module }} </a>
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
                            <th>Total Views</th>
                            <th>Ingredients  Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="menu-list">
                        @forelse  ($data as $list)
                            <tr data-id="{{ $list->id }}">

                                <td>{{ $loop->iteration }}</td>


                                <td>{{ $list->name }}</td>
                                <td>{{ $list->click }}</td>
                                <td> {{ Html::image(asset('storage/' . $module . '/' . @$list->image), null, ['class' => 'bg-dark', 'title' => @$list->image, 'width' => '50px']) }}
                                </td>
                                {{-- <td> <snap style="color:{{ $list->colorcode  }}" > {{ $list->colorcode  }} </snap> </td> --}}
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

</x-admin-layout>
