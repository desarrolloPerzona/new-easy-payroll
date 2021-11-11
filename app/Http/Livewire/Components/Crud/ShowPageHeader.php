<?php

namespace App\Http\Livewire\Components\Crud;

use Livewire\Component;

class ShowPageHeader extends Component
{
    public $model, $title, $titleUrl, $editUrl, $faIcon;


    public function mount($model, $title, $titleUrl, $editUrl, $faIcon)
    {
        $this->model = $model;
        $this->title = $title;
        $this->titleUrl = $titleUrl;
        $this->editUrl = $editUrl;
        $this->faIcon = $faIcon;
    }

    public function render()
    {
        return view('livewire.components.crud.show-page-header');
    }
}
