<x-app-landlord>
    @section('title') {{__('Industries')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'Industry'"
        :modelTable="'industries'"
        :modelItems="['name','code']"
        :searchColumns="['name'=>'','code'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-landlord>
