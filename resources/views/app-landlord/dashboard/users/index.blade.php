<x-app-landlord>
    @section('title') {{__('By Law Benefits')}} @endsection
    <livewire:dashboard.views.model-index-search
        :modelName="'User'"
        :modelTable="'users'"
        :modelItems="['name','last_name','email']"
        :searchColumns="['name'=>'','last_name'=>'','email'=>'']"
        :viewable="false"
        :editable="true"
        :erasable="true"
    />
</x-app-landlord>
