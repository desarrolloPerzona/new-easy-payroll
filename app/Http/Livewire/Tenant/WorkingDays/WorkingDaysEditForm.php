<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessWorkday;
use Livewire\Component;

class WorkingDaysEditForm extends Component
{
    public $businessWorkday;
    public $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    protected $listeners = ['renderMine' => 'render'];

    public function mount($businessWorkday){
        $this->businessWorkday = $businessWorkday;
    }

    public function render()
    {
        $workdayTypes = ['diurno', 'nocturno', 'mixto'];
//        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        return view('livewire.tenant.working-days.working-days-edit-form',
                compact('workdayTypes'));
    }

    public function deleteHour(BusinessWorkday $workday, $day){

        $weekDay = strtolower($this->daysArray[$day]);

        $workday[$weekDay] = false;
        $workday[$weekDay . '_from'] = null;
        $workday[$weekDay . '_to'] = null;

        $workday->save();

        $this->emit('alert', 'Registro actualizado exitosamente!');
        $this->emit('renderMine');

    }

    public function deleteMealHour(BusinessWorkday $workday){

        $workday->meal_time = false;
        $workday->meal_time_from = null;
        $workday->meal_time_to = null;

        $workday->save();

        $this->emit('alert', 'Registro actualizado exitosamente!');
        $this->emit('renderMine');
    }
}
