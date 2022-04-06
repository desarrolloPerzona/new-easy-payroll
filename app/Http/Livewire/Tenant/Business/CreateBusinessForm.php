<?php

namespace App\Http\Livewire\Tenant\Business;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;

class CreateBusinessForm extends Component
{
    public $name, $rfc, $business_name, $industry, $street, $borough, $zip_code, $municipality, $state;

    protected $rules = [
        'name' => 'required|min:2|max:100',
        'rfc' => 'required|min:5|max:20',
        'business_name' => 'required|min:2|max:100',
        'industry' => 'required',
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

        $business = new Business;

        $business->name = $this->name;
        $business->rfc = $this->rfc;
        $business->business_name = $this->business_name;
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
