<?php

namespace App\Http\Livewire\Tenant\Business;

use App\Models\Tenant\Business;
use Livewire\Component;

class ShowTable extends Component
{
    public function render()
    {
        $businesses = Business::all();
        return view('livewire.tenant.business.show-table', compact('businesses'));
    }
}
