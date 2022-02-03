<div>
    <form @if(empty($selectedOption)) wire:create @else wire:edit @endif method="post">
            @csrf
            <div class="form-group my-2">
                <label for="" class="mb-2">{{__($label)}}</label>
                <select name="{{$name}}" id="" class="form-control">
                    <option value="0">{{__('Select one')}}</option>
                    @foreach($items as $item)
                        <option value="{{$item->id}}" @if($selectedOption == $item->id) selected @endif>{{__($item->name)}}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary my-2" type="submit">
                    @if(empty($selectedOption))create @else edit @endif
                </button>
            </div>
        </form>
</div>
