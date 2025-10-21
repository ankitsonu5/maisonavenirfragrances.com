@props(['disabled' => false])
{!! Form::text($attributes->get('name'), null, [
    'class' => 'form-control ',
    'id' => $attributes->get('id'),
    'disabled' => $disabled,
]) !!}
