<?php

namespace App\Http\Livewire\Tenant\Branches;

use App\Models\Tenant\Branch;
use Livewire\Component;

class EditForm extends Component
{
    public $branch, $busines_id, $name, $description, $street, $zip_code, $borough, $municipality, $state;

    protected $rules = [
        'name' => 'required|min:2',
        'description' => 'max:100|min:2',
        'street' => 'max:40|min:2',
        'zip_code' => 'max:6|min:4',
        'borough' => 'max:30|min:2',
        'municipality' => 'min:2|max:40',
        'state' => 'min:2|max:30'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount($branch)
    {
        $this->branch = Branch::find($branch);
        $this->busines_id = $this->branch->business->id;
        $this->name = $this->branch->name;
        $this->description = $this->branch->description;
        $this->street = $this->branch->street;
        $this->zip_code = $this->branch->zip_code;
        $this->borough = $this->branch->borough;
        $this->municipality = $this->branch->municipality;
        $this->state = $this->branch->state;
    }

    public function render()
    {
        return view('livewire.tenant.branches.edit-form');
    }

    public function update(Branch $branch)
    {
        $this->validate();

        $branch->name = $this->name;
        $branch->description = $this->description;
        $branch->street = $this->street;
        $branch->zip_code = $this->zip_code;
        $branch->borough = $this->borough;
        $branch->municipality = $this->municipality;
        $branch->state = $this->state;

        $branch->save();

        session()->flash('message', 'edit');
        return redirect()->route('business.index');
    }
}
