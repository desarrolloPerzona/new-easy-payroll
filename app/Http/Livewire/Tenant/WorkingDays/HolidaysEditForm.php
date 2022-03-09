<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessFestiveDay;
use Livewire\Component;

class HolidaysEditForm extends Component
{

    public $name, $date, $working, $schedule_all_day, $schedule_from, $schedule_to;

    protected $rules = [
        'name' => 'unique:business_festive_days|required|min:3',
        'date' => 'required'
    ];

    public function mount($holiday)
    {
        $this->holiday = $holiday->id;

        $this->name = $holiday->name;
        $this->date = $holiday->date;
        $this->working = $holiday->working;
        $this->schedule_all_day = $holiday->schedule_all_day;
        $this->schedule_from = $holiday->schedule_from;
        $this->schedule_to = $holiday->schedule_to;
    }

    public function render()
    {
        $businessFestiveDay = BusinessFestiveDay::find($this->holiday);
        return view('livewire.tenant.working-days.holidays-edit-form', compact('businessFestiveDay'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

}
