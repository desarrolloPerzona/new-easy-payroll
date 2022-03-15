<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use Livewire\Component;

class WorkingDaysCreateForm extends Component
{
    public $name, $workday_type;

    protected $rules = [
        'name' => 'required|min:3',
        'workday_type' => 'required'
    ];

    public function render()
    {
        $workdayTypes = ['diurno', 'nocturno', 'mixto'];
        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        return view('livewire.tenant.working-days.working-days-create-form',
                compact('workdayTypes', 'daysArray'));
    }
}
