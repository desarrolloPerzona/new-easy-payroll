<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Breadcrumb extends Component
{
    /**
     * Need to add variables in element
     * Icon an element of FontAwesome: fas fa-clock
     * Parent as the name of the url (without the slash /): business
     * Children as an array of the url (without the slash /): ['create','']
     */


    public $icon, $parent , $children, $itemId;

    public function mount($parent, $children,$itemId){
        $this->parent = $parent;
        $this->children = $children;
        $this->itemId = $itemId;

    }

    public function render()
    {
        return view('livewire.components.breadcrumb');
    }
}
