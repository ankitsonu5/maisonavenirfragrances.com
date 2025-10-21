@props(['disabled' => false])
{!! Form::textarea($attributes->get('name'), null, [
    'class' => 'form-control editor ',
    'id' => $attributes->get('id'),
    'disabled' => $disabled,
]) !!}
