<div class="">

    <div class="select_body d-flex justify-content-between align-items-center">
        <select name="{{ $name }}{{ $attributes?'[]' : '' }}" id="select{{ $name }}" class="form-control {{ $class }}" {{ $attributes }}>
            @foreach ($collection as $key=>$item)
                @if (isset($value) && !is_object($value) && !is_array($value))
                    <option {{ $value == $item->id ?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                @endif

                @if(!isset($value) || (isset($value) && $value == ''))
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endif

                @if (isset($value) && is_object($value))
                    @php
                        $value_ids = [];
                        foreach ($value as $key2 => $item2) {
                            array_push($value_ids,$item2->id);
                        }
                    @endphp
                    <option {{ in_array($item->id,$value_ids ) ?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                @endif
            @endforeach
        </select>
        <button class="btn btn-info" data-toggle="modal" data-target="#{{$name}}Modal" type="button" title="add new brand">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <span class="text-danger {{ $name }}"></span>
</div>

