<div>
    <form action="">
        <div class="form-group">
            <label for="" class="mb-2">{{__($label)}}</label>
            <select name="" id="" class="form-control">
                <option value="0">{{__('Select one')}}</option>
                @foreach($items as $item)
                    <option value="{{$item->name}}" @if($selectedOption === $item->name) selected @endif>{{__($item->name)}}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
