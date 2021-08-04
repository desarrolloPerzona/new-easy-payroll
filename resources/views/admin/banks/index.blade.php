<x-app-layout>
    @section('title') {{__('Banks')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelToView="'App\Models\Bank'"
        :modelItems="['name','institutional_key']"
        :modelTitles="['Name','Institutional Key']"
    />
</x-app-layout>
