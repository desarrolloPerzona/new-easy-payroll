<?php

namespace App\Http\Livewire\Tenant\ImmsPatronalRegister;

use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class Create extends Component
{
    public $imss_sub_delegation_key, $risk_premium, $name, $branch_id;

    public function render()
    {
        $branches = Branch::all();
        return view('livewire.tenant.imms-patronal-register.create', compact('branches'));
    }

    protected $rules = [
        'name' => 'required|min:4|max:50',
        'branch_id' => 'required',
        'risk_premium' => 'required|max:5',
        'imss_sub_delegation_key' => 'required|min:3|max:30'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save() {
        $this->validate();

        $register = new ImssPatronalRegister;

        $register->name = $this->name;
        $register->risk_premium = $this->risk_premium;
        $register->imss_sub_delegation_key = $this->imss_sub_delegation_key;
        $register->branch_id = $this->branch_id;

//        Proob data
        $register->fiel_id = 1;

        $register->save();

        session()->flash('message', 'create');

        return redirect()->route('imss-employer-registers.index');
    }
}
