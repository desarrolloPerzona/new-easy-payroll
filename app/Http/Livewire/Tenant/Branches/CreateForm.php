<?php

namespace App\Http\Livewire\Tenant\Branches;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;

class CreateForm extends Component
{
    public $business, $business_id, $name, $description, $street, $zip_code, $borough, $municipality, $state;

    public function mount(Business $business){
        $this->business = $business;
        $this->business_id = $business->id;
    }

    public function render()
    {
        return view('livewire.tenant.branches.create-form');
    }

    public function store(){
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

        $this->emit('alert', 'Registro creado exitósamente!');

        session()->flash('message', 'create');

        return redirect()->route('business.index');
    }
}
