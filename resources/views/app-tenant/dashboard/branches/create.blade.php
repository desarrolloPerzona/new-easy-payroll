<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.section-header title="New branch" classes="mb-3"/>

        <livewire:tenant.branches.create-form business="{{$business->id}}"/>

    </div>
</x-app-tenant>



