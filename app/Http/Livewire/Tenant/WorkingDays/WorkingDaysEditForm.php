<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use Livewire\Component;

class WorkingDaysEditForm extends Component
{
    public $businessWorkday;

    public function mount($businessWorkday){
        $this->businessWorkday = $businessWorkday;
    }

    public function render()
    {
        $workdayTypes = ['diurno', 'nocturno', 'mixto'];
        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        return view('livewire.tenant.working-days.working-days-edit-form',
                compact('workdayTypes', 'daysArray'));
    }
}
