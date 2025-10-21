<div class="col-md-4">
    {!! Form::label('occasion', ' occasion', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('occasion', null, ['class' => 'form-control', 'id' => 'occasion']) !!}
    @error('occasion')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>




{{-- <div class="col-md-4">
    {!! Form::label('Image', 'Image *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image', @$row->image) !!}
    @if (@$row->image && File::exists('storage/' . $module . '/' . @$row->image))
    {{ Html::image(asset('storage/' . $module . '/' . @$row->image), null, ['class' =>'bg-dark','title' => @$row->image,
    'width' => '150px']) }}
    @endif

    <x-input-error :messages="$errors->get('image')" class="mt-2" />
</div>
 --}}

<div class="col-md-4">
    {!! Form::label('Image', 'Occasion Image *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_new', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_new', @$row->image_new) !!}
    @if (@$row->image_new && File::exists('storage/' . $module . '/' . @$row->image_new))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_new), null, [
            'class' => 'bg-dark',
            'title' => @$row->image_new,
            'width' => '150px',
        ]) }}
    @endif
    <x-input-error :messages="$errors->get('image_new')" class="mt-2" />
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

<div class="col-md-12">
    {!! Form::label('products', 'Associated products * *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}
    {!! Form::select('products[]', $products, $selectedProducts ?? null, [
        'class' => 'form-control select2',
        'multiple' => true,
        'id' => 'products',
    ]) !!}
    @error('products')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
