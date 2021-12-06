<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Business positions') }}</span>
        </h2>

        <div class="flex">
            <div class="btn-top-holder my-3 flex-1">
                <a href="{{route('employer-register.create',1)}}" class="btn btn-dark">
                    <i class="fas fa-plus-circle"></i>
                    {{ __('New business position') }}
                </a>
            </div>
            <div class="flex-1 my-3 text-right">
                <label class="font-bold my-2 mr-3" for="name">{{__('Business')}}</label>
                <label>
                    <select class="w-full rounded dark:bg-dark dark:text-white">
                        <option value="001">Perzona</option>
                        <option value="001">DSSD</option>
                    </select>
                </label>
            </div>

        </div>

    </div>
</x-app-tenant>



