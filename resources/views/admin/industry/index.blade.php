<x-app-layout>
    @section('title') {{__('Industries')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'Industry'"
        :modelItems="['name','code']"
        :searchColumns="['name'=>'','code'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-layout>
