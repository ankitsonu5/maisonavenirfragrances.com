<x-admin-layout>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Mood Occasion</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.' . $module . '.index') }}"><i
                                class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Creat</li>
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
                        class="fadeIn animated bx bx-undo"></i> Back Mood Occasion  </a>
            </div>



            <div class="p-4 ">

                {!! Form::open([
                    'method' => 'Post',
                    'route' => ['admin.' . $module . '.store'],
                    'enctype' => 'multipart/form-data',
                    'id' => 'form',
                    'files' => true,
                    'class' => 'row g-3 ',
                ]) !!}
                @include('admin.' . $module . '.form')
                @include('admin.partials.save')
                {!! Form::close() !!}
            </div>


        </div>
    </div>




</x-admin-layout>
