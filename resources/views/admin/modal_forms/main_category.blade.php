@php
$name = 'product_main_category_id';
$fields = [['name' => 'name', 'type' => 'text'], ['name' => 'icon', 'type' => 'file']];
$action = route('main_category.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
