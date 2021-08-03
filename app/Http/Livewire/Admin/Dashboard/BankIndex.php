<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Bank;
use Livewire\Component;
use Livewire\WithPagination;

class BankIndex extends Component
{

    use WithPagination;



    public function render()
    {
        return view('livewire.admin.dashboard.bank-index',[
            'banks' => Bank::paginate(10),
        ]);
    }
}
