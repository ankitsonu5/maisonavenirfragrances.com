<div class="col-md-6">
    {!! Form::label('name', 'Collection Name', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'collectionname']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
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
