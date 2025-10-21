<div class="row">
    <div class="col-md-6">
        {!! Form::label('product_id', 'Primary Product *', ['class' => 'col-form-label text-capitalize label-align']) !!}
        {!! Form::select('product_id', $products->pluck('name', 'id'), null, [
            'class' => 'form-control select2',
            'id' => 'product_id',
            'placeholder' => 'Choose a Primary Product',
        ]) !!}
        @error('product_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        {!! Form::label('layer_with_one', 'Layer 1
', ['class' => 'col-form-label text-capitalize label-align']) !!}
        {!! Form::select('layer_with_one', $products->pluck('name', 'id'), null, [
            'class' => 'form-control select2',
            'id' => 'layer_with_one',
            'placeholder' => 'Choose First Layering Product',
        ]) !!}
        @error('layer_with_one')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        {!! Form::label('layer_with_two', 'Layer 2', ['class' => 'col-form-label text-capitalize label-align']) !!}
        {!! Form::select('layer_with_two', $products->pluck('name', 'id'), null, [
            'class' => 'form-control select2',
            'id' => 'layer_with_two',
            'placeholder' => 'Choose Second Layering Product',
        ]) !!}
        @error('layer_with_two')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- <div class="col-md-4">
        {!! Form::label('status', 'Status *', ['class' => 'col-form-label text-capitalize label-align']) !!}
        {!! Form::select('status', ['1' => 'Enabled', '0' => 'Disabled'], $layerWith->status ?? '1', [
            'class' => 'form-control',
        ]) !!}
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}

    @include('admin.partials.save')
</div>
