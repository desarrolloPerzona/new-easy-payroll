<?php

namespace App\Http\Livewire\Dashboard\Views;

use Livewire\Component;
use Livewire\WithPagination;
use Redirect;

class ModelIndexSearch extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


// SET VARIABLES
    public $sortColumn, $sortDirection = 'asc', $searchColumns, $modelName, $modelToView, $modelItems, $modelTitles, $validationFields, $modelToEdit, $erasable, $viewable, $editable;

// INITIALIZE VARIABLES
    /**
     * @var \Illuminate\Support\Collection
     */
    private $modelItemToEdit;

    public function mount($modelName, $modelItems, $searchColumns)
    {
        $this->modelToView = "App\Models\\" . $modelName;
        $this->modelItems = collect($modelItems);
        $this->modelTitles = $this->replaceStrToLowerCollect($this->modelItems);
        $this->searchColumns = $searchColumns;
        $this->sortColumn = $modelItems[0];
        $this->modelItemToEdit = collect();
    }

//
    public function sortByColumn($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->reset('sortDirection');
            $this->sortColumn = $column;
        }
    }

    public function rules(): array
    {
        $rules = [];

        foreach ($this->modelItems as $item) {
            $rules[$item] = 'required';
        }

        return $rules;
    }


    public function replaceStrToLowerCollect($collect)
    {
        $collect = $collect->map(function ($item, $key) {
            return str_replace('_', ' ', strtolower($item));
        });

        return $collect;

    }

    public function updating($value, $name)
    {
        $this->resetPage();
    }


    public function view()
    {

    }

    public function save()
    {

        $this->validate();

    }


    public function edit($id)
    {

        $this->modelToEdit = $this->modelToView::find($id);

    }

    public function destroy($id, $item)
    {

        $modelItem = $this->modelToView::find($id);

        if ($modelItem) {
            $modelItem->delete();
            session()->flash('success', $item . ' ' . __('Item Deleted'));
            $this->emit('alert_remove');
        }
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
            'model' => $models->paginate(15),
        ]);
    }

}
