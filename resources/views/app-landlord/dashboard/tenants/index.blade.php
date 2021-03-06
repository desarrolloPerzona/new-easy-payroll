<x-app-landlord>
    @section('title') {{__('Tenants')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'Tenant'"
        :modelTable="'tenants'"
        :modelItems="['id','name','email']"
        :searchColumns="['name'=>'']"
        :erasable="true"
        :editable="true"
        :viewable="true"
    />
</x-app-landlord>
