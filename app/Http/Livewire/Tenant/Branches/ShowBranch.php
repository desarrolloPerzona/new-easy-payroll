<?php

namespace App\Http\Livewire\Tenant\Branches;

use App\Models\Tenant\Branch;
use Livewire\Component;

class ShowBranch extends Component
{
    public $branch;

    public function mount(Branch $branch){
        $this->branch = $branch;
    }

    public function render()
    {
        return view('livewire.tenant.branches.show-branch');
    }
}
