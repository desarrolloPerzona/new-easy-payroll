<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent='"Business"' :children="['Create']" :itemId="''" :icon="'fak fa-empresa-perzona'"/>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto ">
            <h2 class="py-3">{{__('Business')}}</h2>
            <form action="{{route('business.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">{{__('name')}}</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="business_name">{{__('Business name')}}</label>
                    <input class="form-control" type="text" id="business_name" name="business_name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="rfc">{{__('RFC')}}</label>
                    <input class="form-control" type="text" id="rfc" name="rfc">
                </div>
                    <livewire:components.content.file-upload-pquina :name="'logo_url'"
                                                                    :max-files="1"
                                                                    :max-size="'3MB'"
                                                                    :file-type="'image/jpeg'"
                                                                    :allow-multiple="'true'"
                                                                    :accept-files="''"
                                                                    :attributes="''"
                                                                    :label="'Logo'"
                                                                    :upload-route="'uploadFiles'"
                                                                    :icon:="'fad fa-search'"
                    />
                <div class="form-group">
                    <label class="form-label" for="industry">{{__('Industry')}}</label>
                    <select class="form-select mb-2" name="industry">
                        <option value="0">{{__('Select one')}}</option>
                        @foreach($fiscal_industries as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="fiscal_regime">{{__('Fiscal regime')}}</label>
                    <select class="form-select" id="fiscal_regime" name="fiscal_regime">
                        <option value="0">{{__('Select one')}}</option>
                        @foreach($fiscal_regimes as $regimes)
                            <option value="{{$regimes->id}}">{{$regimes->name}}</option>
                        @endforeach
                    </select>
                </div>


              {{--  <div class="form-group">
                    <label class="form-label" for="name">{{__('Business name')}}</label>
                    <input class="form-control" type="text" id="name" name="Name">
                </div>--}}

                <div class="btn-top-holder my-3 flow-root">
                    <button class="btn btn-primary" type="submit">  {{ __('Save') }}</button>
                </div>

            </form>
        </div>
    </div>
</x-app-tenant>


