@php
$name = 'color_id';
$fields = [['name' => 'name', 'type' => 'text']];
$action = route('color.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
