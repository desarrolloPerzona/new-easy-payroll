<?php

namespace App\Http\Livewire\Tenant\Banks;

use App\Models\Tenant\Bank;
use App\Models\Tenant\Business;
use Livewire\Component;

class ShowTable extends Component
{
    public $message;

    public function render()
    {
        $businesses = Business::all();
        if ($this->message){
            $bankAccounts = Bank::where('branch', $this->message)->get();
        } else{
            $bankAccounts = Bank::all();
        }

        return view('livewire.tenant.banks.show-table', compact('businesses', 'bankAccounts'));
    }
}
