<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;

class ContentTwoColumnsText extends Component
{
    public string $title;
    public string $field;

    public function mount($title,$field){

        $this->title = $title;
        $this->field = $field;

    }
    public function render()
    {
        return view('livewire.components.content.content-two-columns-text');
    }
}
