<?php

namespace App\Http\Livewire\Components\Content;

use App\Models\Tenant\Business;
use Illuminate\Http\Request;
use Livewire\Component;

class ContentTwoColumnsText extends Component
{
    public $title, $field, $modelId, $modelRoute, $name;

    public function mount($title,$field,$modelRoute,$modelId, $name){

        $this->title = $title;
        $this->field = $field;
        $this->modelId = $modelId;
        $this->modelRoute = $modelRoute;
        $this->name = $name;

    }
    public function render()
    {
        return view('livewire.components.content.content-two-columns-text');
    }
}
