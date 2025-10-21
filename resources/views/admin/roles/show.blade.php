<x-admin-layout>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">{{ $module }}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.' . $module . '.index') }}"><i
                                class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                {{-- <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="bi bi-search"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="search">
                </form> --}}
            </div>
        </div>
    </div>
    <!--end breadcrumb-->




    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.' . $module . '.index') }}" class="btn btn-dark mb-0  px-2"><i
                        class="fadeIn animated bx bx-undo"></i> Back {{ $module }} page </a>
            </div>



            <div class="p-4 ">



                <div class="text-center">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <h2 class="text-center">{{ $module }} Show </h2>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <center>

                                <tr class="">
                                    <td scope="row"><b>Name<b></td>
                                    <td>{{ $role->name }}</td>

                                </tr>

                                <tr class="">
                                    <td scope="row"><b>Permissions<b></td>
                                    <td>
                                        @if (!empty($rolePermissions))
                                            @foreach ($rolePermissions as $v)
                                                <label class="label label-success">{{ $v->name }},</label>
                                            @endforeach
                                        @endif
                                    </td>

                                </tr>


                            </center>


                        </tbody>
                    </table>
                </div>



            </div>
        </div>


</x-admin-layout>
