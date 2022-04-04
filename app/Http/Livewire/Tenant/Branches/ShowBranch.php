<?php

namespace App\Http\Livewire\Tenant\Branches;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;

class ShowBranch extends Component
{
    public $branch, $business_id, $business, $branches;

    protected $listeners = ['delete'];

    public function mount(Branch $branch){
        $this->branch = $branch;
        $this->business_id = $this->branch->business->id;
        $this->business = Business::find($this->business_id);
        $this->branches = $this->business->branches;
    }

    public function render()
    {
        return view('livewire.tenant.branches.show-branch');
    }

    public function delete(Branch $branch){
        $branch->delete();

        session()->flash('message', 'delete');

        return redirect()->route('business.index');
    }
}
