@props(['name', 'value', 'class'])
{!! Form::button($slot, [
    'name' => $name,
    'value' => $value,
    'type' => 'submit',
    'class' => $class,
]) !!}
