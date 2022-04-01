<x-app-tenant>
    <div class="container">

        <x-utilities.section-header title="Branches" classes=""/>

        {{--Edit form--}}
        <livewire:tenant.branches.edit-form branch="{{$branch->id}}"/>

    </div>
</x-app-tenant>
