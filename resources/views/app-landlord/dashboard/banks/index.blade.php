<x-app-landlord>
    @section('title') {{__('Banks')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'Bank'"
        :modelTable="'banks'"
        :modelItems="['name','institutional_key']"
        :searchColumns="['name'=>'','institutional_key'=>'']"
        :erasable="true"
        :editable="true"
        :viewable="true"
    />
</x-app-landlord>
