<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'IMSS Employer Registers'" :children="[]" item-id="{{route('imss-employer-registers.index')}}" :icon="'fak fa-empresa-perzona mr-2'"/>
        <livewire:tenant.imms-patronal-register.create/>
    </div>
</x-app-tenant>
