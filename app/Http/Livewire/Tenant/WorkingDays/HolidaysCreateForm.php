<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessFestiveDay;
use Livewire\Component;

class HolidaysCreateForm extends Component
{
    public $name, $date, $working, $schedule_all_day, $schedule_from, $schedule_to;

    protected $rules = [
        'name' => 'required|unique:business_festive_days|min:3',
        'date' => 'required',
        'working' => 'required'
    ];

    public function render()
    {
        return view('livewire.tenant.working-days.holidays-create-form');
    }

    public function store(){

        $this->validate();

        $businessFestiveday = new BusinessFestiveDay();
        $businessFestiveday->name = $this->name;
        $businessFestiveday->date = $this->date;

        if ($this->working == 1) {
            $businessFestiveday->working = $this->working;
            if ($this->schedule_all_day == 0) {
                $businessFestiveday->schedule_from = $this->schedule_from;
                $businessFestiveday->schedule_to = $this->schedule_to;
            }
            $businessFestiveday->schedule_all_day = $this->schedule_all_day;
        }

        $businessFestiveday->created_at = now();
        $businessFestiveday->updated_at = now();

        $businessFestiveday->save();

        $this->reset();

        $this->emit('alert', 'Registro creado exitosamente!');
        $this->emit('renderHolidaysTable');
    }
}
