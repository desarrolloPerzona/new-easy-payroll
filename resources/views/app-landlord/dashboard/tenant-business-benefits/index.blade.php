<x-app-landlord>
    @section('title') {{__('Tenant Business Benefits')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'TenantBusinessBenefits'"
        :modelItems="['name','code']"
        :searchColumns="['name'=>'','code'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-landlord>
