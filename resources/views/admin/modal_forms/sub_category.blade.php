@php
$name = 'product_sub_category_id';
$fields = [
    [
        'name' => 'main_category_id',
        'type' => 'select',
        'option_route' => route('get_main_category_json'),
        'class' => 'component_modal_main_category parent_select',
        'this_field_will_contorl' => 'component_modal_category',
        'this_field_control_route' => route('get_all_cateogory_selected_by_main_category', ''),
        // 'this_field_control_route' => '',
    ],
    [
        'name' => 'category_id',
        'class' => 'component_modal_category',
        'type' => 'select',
        'option_route' => '',
    ],
    ['name' => 'name', 'type' => 'text'],
    ['name' => 'icon', 'type' => 'file'],
];
$action = route('sub_category.store');
@endphp

@include('admin.includes.modal_form', [
    'name' => $name,
    'fields' => $fields,
    'action' => $action,
])
