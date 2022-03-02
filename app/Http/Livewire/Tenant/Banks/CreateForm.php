<?php

namespace App\Http\Livewire\Tenant\Banks;

use App\Models\Tenant\Bank;
use App\Models\Tenant\Business;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CreateForm extends Component
{
    //    Variables from our form
    public $branch, $branch_id, $name, $account_number, $institutional_key, $description, $information_number, $branch_number, $account_clabe;

    protected $rules = [
        'branch_id' => 'required',
        'name' => 'required|min:4|max:50',
        'account_number' => 'required|max:24',
        'institutional_key' => 'required',
        'description' => 'required|max:40',
        'information_number' => 'required|max:12',
        'branch_number' => 'required|max:12',
        'account_clabe' => 'required|max:18',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $businesses = Business::all();
        $appUrl = config('app.url');
        $api_responseBanks = Http::withOptions(['verify' => false])->get($appUrl . '/api/bank-list/');
        $banks = json_decode($api_responseBanks->body());

        return view('livewire.tenant.banks.create-form', compact('businesses', 'banks'));
    }

    public function store()
    {

        $this->validate();

        $bankAccount = new Bank;

        $bankAccount->name = $this->name;
        $bankAccount->institutional_key = $this->institutional_key;
        $bankAccount->branch = $this->branch_id;
        $bankAccount->account_number = $this->account_number;
        $bankAccount->branch_number = $this->branch_number;
        $bankAccount->account_clabe = $this->account_clabe;
        $bankAccount->information_number = $this->information_number;
        $bankAccount->description = $this->description;

        $bankAccount->save();

        session()->flash('message', 'create');

        return redirect()->route('banks.index');
    }
}
