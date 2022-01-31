<div>
    <div class="flex">
        @if($field)
            <div class="flex-1 text-left w-1/2">
                <label class="my-2">{{__($title)}}</label>
            </div>
            <div class="flex-2 text-left w-1/2">
                <div class="my-2 font-bold">
                    <span class="uppercase">{{$field}}</span>
                </div>
            </div>
        @else
            @csrf
            @method('PATCH')
            <div class="flex-1">
                <form action="{{route($modelRoute, [$modelId, $name]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="{{$name}}" class="mb-2">{{$title}}</label>
                        <div class="input-group mb-3">
                            <input type="text" name="{{$name}}" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"/>
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-cloud-upload mr-2"></i>{{__('Upload')}}</button>
                        </div>
                    </div>

                </form>
            </div>
        @endif

    </div>
</div>
