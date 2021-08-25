<x-app-layout>
    @section('title') {{__('Zip codes')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'ZipCode'"
        :modelItems="['zip_code','borough','municipality','state']"
        :searchColumns="['zip_code'=>'','borough'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="false"
    />
</x-app-layout>
