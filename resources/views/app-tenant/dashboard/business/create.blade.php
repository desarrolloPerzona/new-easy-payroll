<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent='"Business"' :children="['Create']" :itemId="''" :icon="'fak fa-empresa-perzona'"/>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <h2 class="py-3">{{__('Business')}}</h2>
            <form action="">
                <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Name')}}</label></div>
                <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

                <livewire:components.content.file-upload-pquina :name="'logo'"
                                                                :max-files="2"
                                                                :max-size="'1MB'"
                                                                :file-type="'application/cer'"
                                                                :allow-multiple="'true'"
                                                                :accept-files="'.cer'"
                                                                :attributes="''"
                                                                :label="'Logo'"
                                                                :upload-route="'uploadFiles'"
                                                                :icon:="'fad fa-search'"
                />
                <div class="form-group">
                    <label class="font-bold" for="name">{{__('Industry')}}</label>
                    <select class="w-full rounded">
                        @foreach($fiscal_industries as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Fiscal regime')}}</label></div>
                <label>
                    <select class="w-full rounded">
                        @foreach($fiscal_regimes as $regimes)
                            <option value="{{$regimes->id}}">{{$regimes->name}}</option>
                        @endforeach
                    </select>
                </label>


                <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('Business name')}}</label></div>
                <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">


                <div class="flex-1 text-left py-2"><label class="font-bold" for="name">{{__('RFC')}}</label></div>
                <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">


                <div class="btn-top-holder my-3 flow-root">
                    <a href="javascript: history.go(-1)" class="btn btn-dark float-right">
                        {{ __('Save') }}
                    </a>
                </div>


            </form>
        </div>
</x-app-tenant>


