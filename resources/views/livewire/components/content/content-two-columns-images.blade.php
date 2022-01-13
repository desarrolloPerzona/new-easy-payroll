<div>
    <div class="flex">
        <div class="flex-1 text-left w-1/2"><label class="my-2">{{__('Logo')}}</label></div>
        <div class="flex-2 text-left w-1/2">
            @if(count($images) == 0)
                <img src="assets/images/image-polaroid.svg" alt="" width="150">
            @elseif(count($images) >= 1)
                mas de una imagen
            @endif
        </div>
    </div>
</div>
