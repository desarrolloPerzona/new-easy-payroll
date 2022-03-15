<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use Livewire\Component;

class WorkingDaysCreateForm extends Component
{
    public function render()
    {
        $workdayTypes = ['diurno', 'nocturno', 'mixto'];
        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        return view('livewire.tenant.working-days.working-days-create-form',
                compact('workdayTypes', 'daysArray'));
    }
}
