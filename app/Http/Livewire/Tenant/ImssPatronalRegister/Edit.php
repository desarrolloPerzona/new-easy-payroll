<?php

namespace App\Http\Livewire\Tenant\ImssPatronalRegister;

use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class Edit extends Component
{
    public $branch_id, $name, $risk_premium, $imss_sub_delegation_key, $registerObjet, $business_fiel;

    public function mount(ImssPatronalRegister $register){
        $this->registerObjet = $register;

        $this->branch_id = $register->branch_id;
        $this->name = $register->name;
        $this->risk_premium = $register->risk_premium;
        $this->imss_sub_delegation_key = $register->imss_sub_delegation_key;

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

    public function render()
    {
        $branches = Branch::all();

        return view('livewire.tenant.imss-patronal-register.edit', compact('branches'));
    }

    public function update(){

        $this->validate();

        $register = $this->registerObjet;

        $register->branch_id = $this->branch_id;

        $trimName = trim($this->name);
        if ($trimName != $register->name) {
            $this->validate([
                'name' => 'unique:imss_patronal_registers|min:4|max:50',
            ]);
            $register->name = $trimName;
        }
        $register->risk_premium = $this->risk_premium;
        $register->imss_sub_delegation_key = $this->imss_sub_delegation_key;

        $register->save();

        session()->flash('message', 'edit');

        return redirect()->route('imss-employer-registers.index');
    }
}
