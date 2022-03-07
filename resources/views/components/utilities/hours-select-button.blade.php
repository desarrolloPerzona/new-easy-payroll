<select name="{{$name}}" id="{{$id}}" class="rounded border-gray-300 {{$classes}}" {{$attribs}} @if($livewire) wire:model.defer="{{$livewire}}" @endif>
    @if($value)
        <option value="{{$value}}">{{substr($value, 0, 5)}}</option>
    @endif

    @for($i = 0; $i < 24; $i++)
        @if($i <= 9)
            <option value="0{{$i}}:00">0{{$i}}:00</option>
            <option value="0{{$i}}:30">0{{$i}}:30</option>
        @else
            <option value="{{$i}}:00">{{$i}}:00</option>
            <option value="{{$i}}:30">{{$i}}:30</option>
        @endif
    @endfor
</select>
