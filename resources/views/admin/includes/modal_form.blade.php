<div class="modal fade" id="{{ $name }}Modal"  tabindex="-1" aria-labelledby="{{ $name }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="{{ $name }}ModalLabel">{{ str_replace('_',' ',str_replace('_id','',$name)) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ $action }}" data-target_select="#select{{ $name }}" class="component_form" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                        <div class="preloader component_preloader"></div>
                        @foreach ($fields as $item)
                            @php
                                $item = (object) $item;
                            @endphp
                            <div class="form-group">
                                <label for="">{{ $item->name }}</label>
                                <div class="">
                                    @if ($item->type == 'text' || $item->type == 'file' || $item->type == 'email')
                                        <input type="{{ $item->type }}" name="{{ $item->name }}" class="form-control"  placeholder="{{ $item->name }}" />
                                    @endif

                                    @if ($item->type == 'textarea')
                                        <textarea name="{{ $item->name }}" class="form-control" cols="30" rows="5" placeholder="{{ $item->name }}"></textarea>
                                    @endif

                                    @if ($item->type == 'select')
                                        <div class="d-flex select_ontime justify-content-between align-items-center">
                                            <select name="{{ $item->name }}"
                                                data-this_field_will_contorl="{{ isset($item->this_field_will_contorl) ? $item->this_field_will_contorl: '' }}"
                                                data-this_field_control_route="{{ isset($item->this_field_control_route) ? $item->this_field_control_route : '' }}"
                                                class="form-control {{isset($item->class) ?$item->class:''}}">
                                                    <option value="">press reload btn</option>
                                            </select>
                                            @if ($item->option_route)
                                                <button type="button" class="btn btn-info load_options" data-url="{{ $item->option_route }}"><i class="fa fa-recycle"></i></button>
                                            @endif
                                        </div>
                                    @endif


                                    <span class="text-danger {{ $item->name }} "></span>
                                </div>
                            </div>
                        @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="component_form_submit btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>