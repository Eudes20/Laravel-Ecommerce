@php
$name = 'product_category_id';
$fields = [['name' => 'main_category_id', 'type' => 'select', 'option_route' => route('get_main_category_json')], ['name' => 'name', 'type' => 'text'], ['name' => 'icon', 'type' => 'file']];
$action = route('category.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
