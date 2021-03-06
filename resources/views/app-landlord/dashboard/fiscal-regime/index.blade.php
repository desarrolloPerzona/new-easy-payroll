<x-app-landlord>
    @section('title') {{__('Fiscal regimes')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'FiscalRegime'"
        :modelTable="'fiscal_regimes'"
        :modelItems="['name','code']"
        :searchColumns="['name'=>'','code'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-landlord>
