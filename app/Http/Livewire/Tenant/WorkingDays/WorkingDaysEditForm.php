<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessWorkday;
use Livewire\Component;

class WorkingDaysEditForm extends Component
{
    public $businessWorkday, $name, $workday_type;
    public $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    public $monday, $monday_from, $monday_to,
            $tuesday, $tuesday_from, $tuesday_to,
            $wednesday, $wednesday_from, $wednesday_to,
            $thursday, $thursday_from, $thursday_to,
            $friday, $friday_from, $friday_to,
            $saturday, $saturday_from, $saturday_to,
            $sunday, $sunday_from, $sunday_to;



    protected $listeners = ['renderMine' => 'render'];

    protected $rules = [
        'name' => 'required|min:3|max:60'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($businessWorkday){
        $this->businessWorkday = $businessWorkday;
        $this->name = $businessWorkday->name;
        $this->workday_type = $businessWorkday->workday_type;
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
    public function update(BusinessWorkday $workday){
        $this->validate();

        $workday->name = $this->name;
        $workday->workday_type = $this->workday_type;

        if($this->monday){
            $workday['monday'] = $this->monday;
            $workday['monday' . "_from"] = $this->monday_from;
            $workday['monday' . "_to"] = $this->monday_to;
        }
        if($this->tuesday){
            $workday['tuesday'] = $this->tuesday;
            $workday['tuesday' . "_from"] = $this->tuesday_from;
            $workday['tuesday' . "_to"] = $this->tuesday_to;
        }
        if($this->wednesday){
            $workday['wednesday'] = $this->wednesday;
            $workday['wednesday' . "_from"] = $this->wednesday_from;
            $workday['wednesday' . "_to"] = $this->wednesday_to;
        }
        if($this->thursday){
            $workday['thursday'] = $this->thursday;
            $workday['thursday' . "_from"] = $this->thursday_from;
            $workday['thursday' . "_to"] = $this->thursday_to;
        }
        if($this->friday){
            $workday['friday'] = $this->friday;
            $workday['friday' . "_from"] = $this->friday_from;
            $workday['friday' . "_to"] = $this->friday_to;
        }
        if($this->saturday){
            $workday['saturday'] = $this->saturday;
            $workday['saturday' . "_from"] = $this->saturday_from;
            $workday['saturday' . "_to"] = $this->saturday_to;
        }
        if($this->sunday){
            $workday['sunday'] = $this->sunday;
            $workday['sunday' . "_from"] = $this->sunday_from;
            $workday['sunday' . "_to"] = $this->sunday_to;
        }

        // Meal time fields
//        if ($this->meal_time) {
//            $workday->meal_time = $this->meal_time;
//            $workday->meal_time_from = $this->meal_time_from;
//            $workday->meal_time_to = $this->meal_time_to;
//        } else {
//            $workday->meal_time = 0;
//        }

        $workday->save();

        $this->emit('alert', 'Registro actualizado exitosamente!');
        $this->emit('renderMine');
        $this->emit('turnOffCheckButtons');
    }
}
