<x-admin-layout>

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">{{ $module }}</div>
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
                        class="fadeIn animated bx bx-undo"></i> Back {{ $module }} page </a>
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


                <div class="col-md-12">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

              


                <div class="col-md-4">


                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br />
                        @foreach ($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                {{ $value->name }}</label>
                            <br />
                        @endforeach
                    </div>



                </div>







                @include('admin.partials.save')
                {!! Form::close() !!}
            </div>


        </div>
    </div>



</x-admin-layout>
