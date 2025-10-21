<div class="col-md-6">
{!! serviceDropdown('service_id', old('service_id'), [], false) !!}
</div>
<div class="col-md-6">
{!! categoryDropdown('categorie_id', old('categorie_id'), [], false) !!}
</div>


<div class="col-md-4">
    {!! Form::label('name', 'Name *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>



<div class="col-md-4">
    {!! Form::label('price', 'price *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('price', null, ['class' => 'form-control', 'id' => 'price']) !!}
    @error('price')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('time', 'time *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('time', null, ['class' => 'form-control', 'id' => 'time']) !!}
    @error('time')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>



<div class="col-md-12">
    {!! Form::label('description', 'Description *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('Image', 'Image *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image', @$row->image) !!}
    @if (@$row->image && File::exists('storage/' . $module . '/' . @$row->image))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image), null, ['title' => @$row->image, 'width' => '150px']) }}
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
