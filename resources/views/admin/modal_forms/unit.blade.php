@php
$name = 'unit_id';
$fields = [['name' => 'name', 'type' => 'text']];
$action = route('unit.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
