<div class="col-md-4">


    {!! Form::label('name', ' Name *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}
    {!! Form::text('name', null, [
        'class' => ' form-control ',
        'id' => 'name',
    ]) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="col-md-4">
    {!! Form::label('status', 'status *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}
    {!! Form::select('status', ['1' => 'Enabled', '0' => 'Disabled'], $row->status, [
        'class' => '  form-control  ',
    ]) !!}
</div>
