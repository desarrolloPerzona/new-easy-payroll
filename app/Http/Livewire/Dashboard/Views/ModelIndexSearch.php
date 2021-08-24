<?php

namespace App\Http\Livewire\Dashboard\Views;

use Livewire\Component;
use Livewire\WithPagination;

class ModelIndexSearch extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $sortColumn, $sortDirection = 'asc', $searchColumns, $modelName, $modelToView, $modelItems, $modelTitles;
    public $updateMode = false;
    public $showModal = false;
    public $modelItemToEdit;
    public $name;
    public $itemId;



    public function mount($modelName, $modelItems, $modelTitles, $searchColumns)
    {
        $this->modelToView = "App\Models\\" . $modelName;
        $this->modelItems = collect($modelItems);
        $this->modelTitles = $modelTitles;
        $this->searchColumns = $searchColumns;
        $this->sortColumn = $modelItems[0];
        $this->modelItemToEdit = collect();


    }

    public function sortByColumn($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->reset('sortDirection');
            $this->sortColumn = $column;
        }
    }

    public function updating($value, $name)
    {
        $this->resetPage();
    }


    public function render()
    {
        $models = $this->modelToView::orderBy($this->sortColumn, $this->sortDirection);

        foreach ($this->searchColumns as $column => $value) {
            if (!empty($value)) {
                $models->where($column, 'LIKE', $value . '%');
            }
        }

        return view('livewire.dashboard.views.model-index-search', [
            'model' => $models->paginate(10),
        ]);
    }


    public function store()
    {

        /*$validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);*/


    }


    public function edit($id)
    {
        $this->showModal = true;

        $this->modelItemToEdit = $this->modelToView::where('id', $id)->first();



    }


}
