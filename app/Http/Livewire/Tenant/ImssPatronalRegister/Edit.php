<?php

namespace App\Http\Livewire\Tenant\ImssPatronalRegister;

use App\Models\Tenant\Branch;
use Livewire\Component;

class Edit extends Component
{
    public $imss_sub_delegation_key, $risk_premium, $name, $branch_id;

    protected $rules = [
        'name' => 'required|min:4|max:50',
        'branch_id' => 'required',
        'risk_premium' => 'required|max:5',
        'imss_sub_delegation_key' => 'required|min:3|max:30'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $branches = Branch::all();

        return view('livewire.tenant.imss-patronal-register.edit', compact('branches'));
    }

    public function update(){

        $this->validate();

        session()->flash('message', 'edit');

        return redirect()->route('imss-employer-registers.index');
    }
}
