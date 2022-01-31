<?php

namespace App\Http\Livewire\Components\Content;

use App\Models\Tenant\Business;
use Illuminate\Http\Request;
use Livewire\Component;

class ContentTwoColumnsText extends Component
{
    public $title, $field, $modelId, $modelRoute;

    public function mount($title,$field,$modelRoute,$modelId){

        $this->title = $title;
        $this->field = $field;
        $this->modelId = $modelId;
        $this->modelRoute = $modelRoute;

    }
    public function render()
    {
        return view('livewire.components.content.content-two-columns-text');
    }

    public function saveFields(Request $request){

        $business = Business::find($this->modelId);
//        $business->

    }
}
