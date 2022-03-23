<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.header-section title="Employer register" classes="mb-3" maxSize=""/>

        <div class="btn-top-holder my-3 flex-1">
            <a href="{{route('imss-employer-registers.create')}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New employer register') }}
            </a>
        </div>
        <livewire:tenant.imms-patronal-register.show-table/>
    </div>
</x-app-tenant>

