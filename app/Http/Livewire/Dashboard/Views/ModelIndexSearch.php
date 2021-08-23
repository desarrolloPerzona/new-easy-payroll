<?php

namespace App\Http\Livewire\Dashboard\Views;

use Livewire\Component;
use Livewire\WithPagination;

class ModelIndexSearch extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    /**
     * SORT
     * @var string
     */
    public $sortColumn;
    public $sortDirection = 'asc';
    public $searchColumns;
    public $modelName;
    public $modelToView;
    public $modelItems;
    public $modelTitles;


    public function mount($modelName,$modelToView, $modelItems, $modelTitles, $searchColumns)
    {
        $this->modelToView = "App\Models\\".$modelName;
        $this->modelItems = collect($modelItems);
        $this->modelTitles = $modelTitles;
        $this->searchColumns = $searchColumns;
        $this->sortColumn = $modelItems[0];
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


}
