<div class="col-md-4">
    {!! Form::label('name', ' name', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>




<div class="col-md-4">
    {!! Form::label('Image', 'Image *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image', @$row->image) !!}
    @if (@$row->image && File::exists('storage/' . $module . '/' . @$row->image))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image), null, ['class' => 'bg-dark', 'title' => @$row->image, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image')" class="mt-2" />
</div>


<div class="col-md-4">
    {!! Form::label('status', 'Status *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::select('status', ['1' => 'Enabled', '0' => 'Disabled'], $row->status ?? null, [
        'class' => 'form-control',
    ]) !!}
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-6">
    {!! Form::label('products', 'Products *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::select('products[]', $products, $selectedProducts ?? null, [
        'class' => 'form-control select2',
        'multiple' => true,
        'id' => 'products',
    ]) !!}
    @error('products')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="col-md-6">
    {!! Form::label('description', ' description', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
