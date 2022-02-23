<div>
    <select name="{{$name}}" id="{{$id}}" class="rounded {{$classes}}">
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
</div>
