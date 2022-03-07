<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessFestiveDay;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class HolidaysTable extends Component
{
    public $name, $date, $working, $schedule_all_day, $schedule_from, $schedule_to;

    protected $rules = [
        'name' => 'required|unique:business_festive_days|min:3'
    ];

    protected $listeners = ['delete' => 'deleteRecord'];

    public function render()
    {
        $appUrl = config('app.url');
        $currentYear = date('Y');
        $monthsArray = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        //Get festive official days from API
        $responseFestiveDays = Http::withOptions(['verify' => false])->get($appUrl .'/api/official-festive-days');
        $festiveDays = json_decode($responseFestiveDays->body());

        $festiveBusinessesDays = BusinessFestiveDay::all();

        return view('livewire.tenant.working-days.holidays-table',
               compact('monthsArray', 'festiveDays', 'currentYear', 'festiveBusinessesDays'));
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

        $this->emit('alert', 'Registro eliminado exitosamente!');
    }

    public function deleteRecord(BusinessFestiveDay $festiveDay){
        $festiveDay->delete();
    }
}
