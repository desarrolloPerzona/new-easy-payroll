<?php

namespace App\Http\Livewire\Tenant\Business;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBusinessForm extends Component
{
    use WithFileUploads;

    public $name, $rfc, $business_name, $industry, $logo_url, $street, $borough, $zip_code, $municipality, $state, $stp_password;

    protected $rules = [
        'name' => 'required|min:2|max:100',
        'rfc' => 'required|min:5|max:13',
        'business_name' => 'required|min:2|max:100',
        'industry' => 'required',
        'logo_url' => 'image'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.tenant.business.create-business-form');
    }

    public function store()
    {

        $this->validate();

        $logo = $this->logo_url->store('avatars', 'public');

        $business = new Business;

        $business->name = $this->name;
        $business->rfc = $this->rfc;
        $business->business_name = $this->business_name;
        $business->logo_url = $logo;
        $business->industry = $this->industry;
        $business->street = $this->street;
        $business->borough = $this->borough;
        $business->zip_code = $this->zip_code;
        $business->municipality = $this->municipality;
        $business->state = $this->state;

        $business->save();

        $branch = new Branch;

        $branch->name = $this->name;
        $branch->business_id = $business->id;

        $branch->save();

        session()->flash('message', 'create');

        return redirect()->route('business.index');
    }
}
