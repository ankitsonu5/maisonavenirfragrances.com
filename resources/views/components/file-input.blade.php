@props(['disabled' => false])
{!! Form::input($attributes->get('name'), null, [
    'class' => 'form-control editor ',
    'id' => $attributes->get('id'),
    'disabled' => $disabled,
]) !!}

{!! Form::hidden('old_image', $imagePath) !!}
