<?php

namespace App\Http\Livewire\Tenant\Dashboard\ImssPatronalRegister;

use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImssPatronalRegisterCreate extends Component
{
    use WithFileUploads;

    public $imss_sub_delegation_key,
        $risk_premium,
        $name,
        $branch_id,
        $use_cert,
        $cert_imss_cert,
        $cert_imss_user,
        $cert_imss_password,
        $branch,
        $business_fiel;


    public function business_fiel()
    {
        if ($this->branch_id != null) {
            $this->branch = Branch::find($this->branch_id);
            $this->business_fiel = $this->branch->business->sat_fiel_password;
        }
    }

    public function save()
    {

        $this->validate([
            'name' => 'unique:imss_patronal_registers|min:4|max:50',
            'risk_premium' => 'required|max:5',
            'imss_sub_delegation_key' => 'required|min:3|max:30',
            'branch_id' => 'required'
        ]);

        $register = new ImssPatronalRegister;

        $register->name = $this->name;
        $register->risk_premium = $this->risk_premium;
        $register->imss_sub_delegation_key = $this->imss_sub_delegation_key;



        if ($this->use_cert == 'imss') {

            $this->validate([
                'cert_imss_cert' => 'required',
                'cert_imss_user' => 'required',
                'cert_imss_password' => 'required',
            ]);


            $register->cert_imss_user = $this->cert_imss_user;
            $register->cert_imss_password = $this->cert_imss_password;
            $register->use_fiel = 0;



        } else if ($this->use_cert == 'fiel') {

            $register->use_fiel = 1;
        }

        session()->flash('message', 'create');

        $register->save();
        $register->branch()->attach($this->branch->id);


        if($this->cert_imss_cert){
            $this->cert_imss_cert->store('BRANCH-'.strtoupper(slugify($this->branch->name)).'/IMSS-PATRONAL-REGISTER-ID-'.$register->id,'s3');
        }


        return redirect()->route('imss-employer-registers.index');


    }


    public function render()
    {
        $branches = Branch::all();
        return view('livewire.tenant.dashboard.imss-patronal-register.imss-patronal-register-create', compact('branches'));
    }
}
