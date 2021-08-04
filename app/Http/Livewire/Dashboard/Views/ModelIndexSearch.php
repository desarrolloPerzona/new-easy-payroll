<?php

namespace App\Http\Livewire\Dashboard\Views;

use Livewire\Component;
use Livewire\WithPagination;

class ModelIndexSearch extends Component
{
    use WithPagination;

    /*protected $paginationTheme = 'bootstrap';*/

    public $modelToView;
    public $modelItems;
    public $modelTitles;


    public function mount($modelToView, $modelItems, $modelTitles)
    {

        $this->modelToView= $modelToView;
        $this->modelItems = collect($modelItems);
        $this->modelTitles = $modelTitles;


    }

    public function render()
    {

        return view('livewire.dashboard.views.model-index-search', [
            'model' => $this->modelToView::paginate(10),
        ]);
    }
}
