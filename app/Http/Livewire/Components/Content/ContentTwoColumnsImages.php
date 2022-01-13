<?php

namespace App\Http\Livewire\Components\Content;

use Illuminate\Support\Collection;
use Livewire\Component;

class ContentTwoColumnsImages extends Component
{
    public  $images;

    public function render()
    {
        return view('livewire.components.content.content-two-columns-images');
    }
}
