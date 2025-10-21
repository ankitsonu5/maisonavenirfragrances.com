
<div class="col-md-4">


   {!! Form::label('name', ' Name *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}

        {!! Form::text('name', null, [
            'class' => ' form-control ',
            'rows' => '3',
            'id'=>'name'
        ]) !!}

    @error('name')
    <span class="text-danger">{{ $message }}</span>
      @enderror
</div>


<div class="col-md-4">

   {!! Form::label('email', 'email  *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}

        {!! Form::text('email', null, [
            'class' => ' form-control ',
            'rows' => '3',
            'id'=>'email'
        ]) !!}

    @error('email')
    <span class="text-danger">{{ $message }}</span>
      @enderror
</div>



<div class="col-md-4">

   {!! Form::label('designation', 'Designation  *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}

        {!! Form::text('designation', null, [
            'class' => ' form-control ',
            'rows' => '3',
            'id'=>'designation'
        ]) !!}

    @error('designation')
    <span class="text-danger">{{ $message }}</span>
      @enderror
</div>


<div class="col-md-4">

    {!! Form::label('password', 'Password  *', [
         'class' => 'col-form-label text-capitalize label-align',
     ]) !!}

         {!! Form::password('password', null, [
             'class' => ' form-control ',
             'rows' => '3',
             'id'=>'email'
         ]) !!}

     @error('password')
     <span class="text-danger">{{ $message }}</span>
       @enderror
 </div>



 <div class="col-md-4">

    {!! Form::label('confirm-password', 'confirm password  *', [
         'class' => 'col-form-label text-capitalize label-align',
     ]) !!}

         {!! Form::password('confirm-password', null, [
             'class' => ' form-control ',
             'rows' => '3',
             'id'=>'email'
         ]) !!}

     @error('confirm-password')
     <span class="text-danger">{{ $message }}</span>
       @enderror
 </div>





