<x-app-layout>
    @section('title') {{__('Banks')}}@endsection
    <livewire:dashboard.views.model-index-search :modelToView="'App\Models\Bank'" :modelItems="['item'=>'name','item'=>'institutional_key']" :modelTitles="['title'=>'Name','title'=>'Institutional Key']"  />
</x-app-layout>
