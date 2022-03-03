<x-app-landlord>
    @section('title') {{__('Zip codes')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'ZipCode'"
        :modelTable="'zip_codes'"
        :modelItems="['zip_code','borough','municipality','state']"
        :searchColumns="['zip_code'=>'','borough'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="false"
    />
</x-app-landlord>
