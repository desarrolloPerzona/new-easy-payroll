<?php

namespace App\Http\Livewire\Dashboard\Views;

use Livewire\Component;

class ModelIndexSearch extends Component
{
    public $models;
    public $modelItems = [];
    public $modelTitles = [];


    public function mount($modelToView, $modelItems, $modelTitles)
    {
        $this->models = $modelToView::all();
        /* dd($modelTitles);*/
        $this->modelItems = collect($modelItems);
        $this->modelTitles = collect($modelTitles);
        //$columns = \DB::getSchemaBuilder()->getColumnListing('banks');
        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing('Banks');
        $columns = array($columns);
        dd($columns);

    }

    public function render()
    {

        return view('livewire.dashboard.views.model-index-search');
    }
}
