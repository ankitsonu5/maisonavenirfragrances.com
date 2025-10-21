<div class="col-md-4">
    {!! Form::label('code', 'code *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) !!}
    @error('code')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>



<div class="col-md-4">
    {!! Form::label('discount', 'discount *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::number('discount', null, ['class' => 'form-control', 'id' => 'discount']) !!}
    @error('discount')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="col-md-4">
    {!! Form::label('expires_at', 'expires_at *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::date('expires_at', null, ['class' => 'form-control', 'id' => 'expires_at']) !!}
    @error('expires_at')
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
