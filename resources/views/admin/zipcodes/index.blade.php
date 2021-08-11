<x-app-layout>
    @section('title') {{__('Zip codes')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'ZipCode'"
        :modelToView="'App\Models\ZipCode'"
        :modelItems="['zip_code','borough','municipality','state']"
        :modelTitles="['Zip code','Borough','Municipality','State']"
        :searchColumns="['zip_code'=>'','borough'=>'']"
    />
</x-app-layout>
