@php
$name = 'size_id';
$fields = [['name' => 'name', 'type' => 'text']];
$action = route('size.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
