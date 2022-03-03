<x-app-landlord>
    @section('title') {{__('By Law Benefits')}} @endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'ByLawBenefit'"
        :modelTable="'by_law_benefits'"
        :modelItems="['antiquity_from','antiquity_to','bonus_days','vacation_days','vacation_prime','year']"
        :searchColumns="['antiquity_from'=>'','antiquity_to'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-landlord>
