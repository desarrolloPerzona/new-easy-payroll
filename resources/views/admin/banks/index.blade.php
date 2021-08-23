<x-app-layout>
    @section('title') {{__('Banks')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'Bank'"
        :modelItems="['name','institutional_key']"
        :modelTitles="['Name','Institutional Key']"
        :searchColumns="['name'=>'','institutional_key'=>'']"
    />
</x-app-layout>
