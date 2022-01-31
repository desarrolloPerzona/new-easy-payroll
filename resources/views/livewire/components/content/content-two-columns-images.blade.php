<div>

    @push('inline_css')
{{--        Animation to shake image--}}
        <style>
            .shake-animation{
                animation: shake 0.5s;
                animation-iteration-count: infinite;
            }
            @keyframes shake {
                0% { transform: translate(1px, 1px) rotate(0deg); }
                10% { transform: translate(-1px, -2px) rotate(-1deg); }
                20% { transform: translate(-3px, 0px) rotate(1deg); }
                30% { transform: translate(3px, 2px) rotate(0deg); }
                40% { transform: translate(1px, -1px) rotate(1deg); }
                50% { transform: translate(-1px, 2px) rotate(-1deg); }
                60% { transform: translate(-3px, 1px) rotate(0deg); }
                70% { transform: translate(3px, 1px) rotate(-1deg); }
                80% { transform: translate(-1px, -1px) rotate(1deg); }
                90% { transform: translate(1px, 2px) rotate(0deg); }
                100% { transform: translate(1px, -2px) rotate(-1deg); }
            }
        </style>
    @endpush

    <div class="flex">
        <div class="flex-1 text-left w-1/2">
            <label class="my-2">{{__('Logo')}}</label>
        </div>
        <div class="flex-2 text-left w-1/2">
            @if(count($images) == 0)
                <img id="logo_img" class="cursor-pointer" src="{{asset('images/tenant-logo.png')}}" onclick="shake()" alt="" width="150">
            @elseif(count($images) >= 1)
                {{-- conection a imagen--}}
            @endif
        </div>
    </div>

        @push('inline_scripts')
{{--            Script to toggle with shake class--}}
            <script>
                function shake(){
                    let newButton = document.getElementById('logo_img').classList.toggle('shake-animation')
                }
            </script>
        @endpush
</div>
