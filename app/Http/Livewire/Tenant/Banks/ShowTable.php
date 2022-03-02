<?php

namespace App\Http\Livewire\Tenant\Banks;

use App\Models\Tenant\Bank;
use App\Models\Tenant\Business;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShowTable extends Component
{
    public $message;

    protected $listeners = ['delete' => 'deleteRecord'];

    public function render()
    {
        $appUrl = config('app.url');
        $api_responseBanks = Http::withOptions(['verify' => false])->get($appUrl . '/api/bank-list/');
        $banksList = json_decode($api_responseBanks->body());


        $businesses = Business::all();
        if ($this->message){
            $bankAccounts = Bank::where('branch', $this->message)->get();
        } else{
            $bankAccounts = Bank::all();
        }

        return view('livewire.tenant.banks.show-table', compact('businesses', 'bankAccounts', 'banksList'));
    }

    public function deleteRecord(Bank $bankAccount){
        $bankAccount->delete();
    }

}
