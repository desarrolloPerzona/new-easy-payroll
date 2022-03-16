<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessWorkday;
use Livewire\Component;
use function Livewire\str;

class WorkingDaysCreateForm extends Component
{
    public $name, $workday_type;

    // Days variables
    public $monday, $monday_from, $monday_to,
            $tuesday, $tuesday_from, $tuesday_to,
            $wednesday, $wednesday_from, $wednesday_to,
            $thursday, $thursday_from, $thursday_to,
            $friday, $friday_from, $friday_to,
            $saturday, $saturday_from, $saturday_to,
            $sunday, $sunday_from, $sunday_to;


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

    public function store(){

        $this->validate();

        $workingDay = new BusinessWorkday;

        $workingDay->name = $this->name;
        $workingDay->workday_type = $this->workday_type;

        if($this->monday){
            $workingDay['monday'] = $this->monday;
            $workingDay['monday' . "_from"] = $this->monday_from;
            $workingDay['monday' . "_to"] = $this->monday_to;
        } else{
            $workingDay['monday'] = 0;
        }
        if($this->tuesday){
            $workingDay['tuesday'] = $this->tuesday;
            $workingDay['tuesday' . "_from"] = $this->tuesday_from;
            $workingDay['tuesday' . "_to"] = $this->tuesday_to;
        } else{
            $workingDay['tuesday'] = 0;
        }
        if($this->wednesday){
            $workingDay['wednesday'] = $this->wednesday;
            $workingDay['wednesday' . "_from"] = $this->wednesday_from;
            $workingDay['wednesday' . "_to"] = $this->wednesday_to;
        } else{
            $workingDay['wednesday'] = 0;
        }
        if($this->thursday){
            $workingDay['thursday'] = $this->thursday;
            $workingDay['thursday' . "_from"] = $this->thursday_from;
            $workingDay['thursday' . "_to"] = $this->thursday_to;
        } else{
            $workingDay['thursday'] = 0;
        }
        if($this->friday){
            $workingDay['friday'] = $this->friday;
            $workingDay['friday' . "_from"] = $this->friday_from;
            $workingDay['friday' . "_to"] = $this->friday_to;
        } else{
            $workingDay['friday'] = 0;
        }
        if($this->saturday){
            $workingDay['saturday'] = $this->saturday;
            $workingDay['saturday' . "_from"] = $this->saturday_from;
            $workingDay['saturday' . "_to"] = $this->saturday_to;
        } else{
            $workingDay['saturday'] = 0;
        }
        if($this->sunday){
            $workingDay['sunday'] = $this->sunday;
            $workingDay['sunday' . "_from"] = $this->sunday_from;
            $workingDay['sunday' . "_to"] = $this->sunday_to;
        } else{
            $workingDay['sunday'] = 0;
        }

        $workingDay->save();

        $this->reset();

        $this->emit('alert', 'Registro creado exitosamente!');
        $this->emit('renderHolidaysTable');
    }
}
