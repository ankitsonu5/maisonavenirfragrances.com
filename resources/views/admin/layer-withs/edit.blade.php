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
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.layer-withs.index') }}" class="btn btn-dark mb-0 px-2">
                    <i class="fadeIn animated bx bx-undo"></i> Back to Layer Withs
                </a>
            </div>

            <div class="p-4">
                {!! Form::model($layerWith, [
                    'method' => 'PATCH',
                    'route' => ['admin.layer-withs.update', $layerWith->id],
                    'enctype' => 'multipart/form-data',
                    'id' => 'form',
                    'files' => true,
                    'class' => 'row g-3',
                ]) !!}

                @include('admin.layer-withs.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-admin-layout>
