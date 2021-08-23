<x-app-layout>
    @section('title') {{__('Fiscal regimes')}}@endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'FiscalRegime'"
        :modelItems="['name','code']"
        :modelTitles="['Name','Code']"
        :searchColumns="['name'=>'','code'=>'']"
    />
</x-app-layout>
