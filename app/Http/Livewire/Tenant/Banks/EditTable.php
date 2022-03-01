<?php

namespace App\Http\Livewire\Tenant\Banks;

use App\Models\Tenant\Bank;
use App\Models\Tenant\Business;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class EditTable extends Component
{
    //    Variables from our form
    public $branch, $branch_id, $name, $account_number, $institutional_key, $description, $information_number, $branch_number, $account_clabe;

    public function mount($userId)
    {
        $this->accountBank = Bank::find($userId);
        $this->userId = $userId->id;

        $this->name = $userId->name;
        $this->branch_id = $userId->branch;
        $this->branch = $userId->business->name;
        $this->account_number = $userId->account_number;
        $this->institutional_key = $userId->institutional_key;
        $this->description = $userId->description;
        $this->information_number = $userId->information_number;
        $this->branch_number = $userId->branch_number;
        $this->account_clabe = $userId->account_clabe;
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

    public function update()
    {
        $bankAccount = Bank::find($this->userId);

        $bankAccount->name = $this->name;
        $bankAccount->branch = $this->branch_id;
        $bankAccount->account_number = $this->account_number;
        $bankAccount->institutional_key = $this->institutional_key;
        $bankAccount->description = $this->description;
        $bankAccount->information_number = $this->information_number;
        $bankAccount->branch_number = $this->branch_number;
        $bankAccount->account_clabe = $this->account_clabe;

        $bankAccount->save();

        return redirect()->route('banks.index')->with('message', 'edit');
    }
}
