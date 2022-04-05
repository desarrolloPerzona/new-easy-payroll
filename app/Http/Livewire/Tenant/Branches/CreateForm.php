<?php

namespace App\Http\Livewire\Tenant\Branches;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;

class CreateForm extends Component
{
    public $business, $business_id, $name, $description, $street, $zip_code, $borough, $municipality, $state;

    protected $rules = [
        'name' => 'required|min:2',
        'description' => 'max:100|min:2',
        'street' => 'max:40|min:2',
        'zip_code' => 'min:4|max:5',
        'borough' => 'max:30|min:2',
        'municipality' => 'min:2|max:40',
        'state' => 'min:2|max:30'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount(Business $business){
        $this->business = $business;
        $this->business_id = $business->id;
    }

    public function render()
    {
        return view('livewire.tenant.branches.create-form');
    }

    public function store(){

        $this->validate();

        $branch = new Branch;

        $branch->name = $this->name;
        $branch->description = $this->description;
        $branch->street = $this->street;
        $branch->zip_code = $this->zip_code;
        $branch->borough = $this->borough;
        $branch->municipality = $this->municipality;
        $branch->state = $this->state;
        $branch->business_id = $this->business_id;

        $branch->save();

        session()->flash('message', 'create');

        return redirect()->route('business.index');
    }
}
