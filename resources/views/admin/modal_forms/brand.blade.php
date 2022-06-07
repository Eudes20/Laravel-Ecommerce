@php
$name = 'brand';
$fields = [['name' => 'name', 'type' => 'text'], ['name' => 'icon', 'type' => 'file']];
$action = route('brand.store');
@endphp

@include("admin.includes.modal_form", [
    'name' => $name,
    'fields' => $fields,
    'action' => $action
])