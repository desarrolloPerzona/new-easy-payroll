<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'imss-employer-registers'" :children="[]" item-id="{{route('imss-employer-registers.index')}}" :icon="'fak fa-empresa-perzona mr-2'"/>
        <div class="btn-top-holder my-3 flex-1">
            <a href="{{route('imss-employer-registers.create')}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New employer register') }}
            </a>
        </div>
        <livewire:tenant.imms-patronal-register.show-table/>
    </div>
</x-app-tenant>

