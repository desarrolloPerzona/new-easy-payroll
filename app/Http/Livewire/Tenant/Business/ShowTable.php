<?php

namespace App\Http\Livewire\Tenant\Business;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;

class ShowTable extends Component
{
    protected $listeners = ['delete', 'deleteSecond' => 'deleteBranch'];

    public function render()
    {
        $businesses = Business::all();
        return view('livewire.tenant.business.show-table', compact('businesses'));
    }

    public function delete(Business $business){
        $business->delete();
    }

    public function deleteBranch(Branch $branch){
        $branch->delete();
    }
}
