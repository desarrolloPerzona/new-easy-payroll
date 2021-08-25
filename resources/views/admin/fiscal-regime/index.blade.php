<x-app-layout>
    @section('title') {{__('Fiscal regimes')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'FiscalRegime'"
        :modelItems="['name','code']"
        :searchColumns="['name'=>'','code'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-layout>
