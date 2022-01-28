<div>
    <div class="flex">
        <div class="flex-1 text-left w-1/2"><label class="my-2">{{__($title)}}</label></div>
        <div class="flex-2 text-left w-1/2"><span class="my-2 font-bold">
                @if($field)<span class="uppercase">{{$field}}</span>@else
                {{-- <a href="{{route($modelRoute,$modelId)}}" class="text-warning"><i class="fa fa-edit mr-2"></i></a>--}}
                    <form action="{{$modelRoute}}" method="post">
                        <input type="text" name="">
                        <button>enviar</button>
                    </form>
            @endif</div>
    </div>
</div>
