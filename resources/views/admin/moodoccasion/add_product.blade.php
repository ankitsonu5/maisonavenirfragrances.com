<x-admin-layout>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Add Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.' . $module . '.index') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                {{-- Optional search form can be added here --}}
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('admin.' . $module . '.index') }}" class="btn btn-dark mb-0 px-2"><i class="fadeIn animated bx bx-undo"></i> Back {{ $module }} </a>
            </div>
            <div class="p-4">
                <hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h4><strong>Mood:</strong> {{ $row->mood->mood }}</h4>
                    </div>
                    <div class="col-md-6">
                        <h4><strong>Occasion:</strong> {{ $row->occasion->occasion }}</h4>
                    </div>
                </div>
                <hr>

                {!! Form::open([
                    'method' => 'Post',
                    'route' => ['admin.' . $module . '.storeproduct'],
                    'enctype' => 'multipart/form-data',
                    'id' => 'form',
                    'files' => true,
                    'class' => 'row g-3',
                ]) !!}

                <div class="col-md-9">
                    <div class="form-group">
                        {!! Form::label('product_id', 'Select Product', ['class' => 'form-label']) !!}
                        {!! productDropdown('product_id', null, ['class' => 'form-control'], false) !!}
                        <x-input-error :messages="$errors->get('product_id')" class="mt-2" />
                    </div>
                </div>

                <input type="hidden" value="{{ $row->id }}" name="moodoccasion_id">

                <div class="col-md-3 d-flex align-items-end">
                    {!! Form::button('<i class="bi bi-file-earmark-plus"></i> Add Product', [
                        'name' => 'FormButton',
                        'type' => 'submit',
                        'class' => 'btn btn-dark mb-0 px-2',
                    ]) !!}
                </div>

                {!! Form::close() !!}
            </div>

            <div class="mt-5">
                <h3>Added Products</h3>
                <ul class="list-group">
                    @foreach($row->products as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $product->name }}
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.' . $module . '.removeproduct', $row->id, $product->id]]) !!}
                                {!! Form::submit('Remove', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-admin-layout>
