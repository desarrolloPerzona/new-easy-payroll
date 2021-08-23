<x-app-layout>
    @section('title') {{__('Industries')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'Industry'"
        :modelItems="['name','code']"
        :modelTitles="['Name','Code']"
        :searchColumns="['name'=>'','code'=>'']"
    />
</x-app-layout>
