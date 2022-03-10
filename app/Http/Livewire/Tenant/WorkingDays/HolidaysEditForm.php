<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessFestiveDay;
use Livewire\Component;

class HolidaysEditForm extends Component
{

    public $name, $date, $working, $schedule_all_day, $schedule_from, $schedule_to;

    protected $rules = [
        'name' => 'required|min:3',
        'date' => 'required',
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

    function updateHoliday()
    {
        $this->validate();

        $newHoliday = BusinessFestiveDay::find($this->holiday);

        if ($this->name != $newHoliday->name) {
            $this->validate([
                'name' => 'unique:business_festive_days|required|min:3'
            ]);
            $newHoliday->name = $this->name;
        }

        $newHoliday->date = $this->date;
        if ($this->working == 1) {
            $this->validate([
                'schedule_all_day' => 'required'
            ]);
            $newHoliday->working = 1;
            if ($this->schedule_all_day == 0) {
                $newHoliday->schedule_from = $this->schedule_from;
                $newHoliday->schedule_to = $this->schedule_to;
            } else{
                $newHoliday->schedule_from = null;
                $newHoliday->schedule_to = null;
            }
            $newHoliday->schedule_all_day = $this->schedule_all_day;
        } else{
            $newHoliday->working = 0;
            $newHoliday->schedule_all_day = 0;
            $newHoliday->schedule_from = null;
            $newHoliday->schedule_to = null;
        }

        $newHoliday->save();

        session()->flash('message', 'edit');
        return redirect()->route('working-day-holiday.index');
    }

}
