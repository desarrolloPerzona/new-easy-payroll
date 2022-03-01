<?php

namespace App\Http\Livewire\Tenant\Banks;

use App\Models\Tenant\Bank;
use App\Models\Tenant\Business;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class EditTable extends Component
{
    public $userId;

    public function mount($userId){
        $this->userId = $userId->id;
    }

    public function render()
    {
        $bankAccount = Bank::find($this->userId);

        $businesses = Business::all();
        $appUrl = config('app.url');
        $api_responseBanks = Http::withOptions(['verify' => false])->get($appUrl . '/api/bank-list/');
        $banks = json_decode($api_responseBanks->body());

        return view('livewire.tenant.banks.edit-table', compact('businesses', 'banks', 'bankAccount'));
    }
}
