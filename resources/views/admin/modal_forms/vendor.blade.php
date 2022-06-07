@php
$name = 'vendor_id';
$fields = [['name' => 'name', 'type' => 'text'], ['name' => 'email', 'type' => 'email'], ['name' => 'mobile_no', 'type' => 'text'], ['name' => 'image', 'type' => 'file'], ['name' => 'address', 'type' => 'textarea'], ['name' => 'description', 'type' => 'textarea']];
$action = route('vendor.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
