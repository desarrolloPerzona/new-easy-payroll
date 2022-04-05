<?php

namespace App\Http\Livewire\Tenant\Business;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Business;
use Livewire\Component;

class ShowTable extends Component
{
    public $typeOption;

    protected $listeners = ['delete', 'deleteSecond' => 'deleteBranch'];

    public function render()
    {
        $businesses = Business::all();

        if($this->typeOption == 0){
            $businesses = Business::all();
        } else if($this->typeOption == 1){
            $businesses = Business::onlyTrashed()->get();
        } else if($this->typeOption == 2){
            $businesses = Business::withTrashed()->get();
        }

        return view('livewire.tenant.business.show-table', compact('businesses'));
    }

    public function delete(Business $business){
        $business->delete();
    }

    public function deleteBranch(Branch $branch){
        $branch->delete();
    }

    public function restore($business_id){
        Business::withTrashed()->where('id', $business_id)->restore();
        $this->typeOption = 0;
        $this->emit('alert', 'Registro restablecido exitosamente!');
    }

}
