<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessFestiveDay;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class HolidaysTable extends Component
{

    protected $listeners = ['delete' => 'deleteRecord', 'renderHolidaysTable' =>'render'];

    public function render()
    {
        $appUrl = config('app.url');
        $currentYear = date('Y');
        $monthsArray = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        //Get festive official days from API
        $responseFestiveDays = Http::withOptions(['verify' => false])->get($appUrl .'/api/official-festive-days');
        $festiveDays = json_decode($responseFestiveDays->body());

        $festiveBusinessesDays = BusinessFestiveDay::orderBy('id', 'DESC')->get();

        return view('livewire.tenant.working-days.holidays-table',
               compact('monthsArray', 'festiveDays', 'currentYear', 'festiveBusinessesDays'));
    }

    public function deleteRecord(BusinessFestiveDay $festiveDay){
        $festiveDay->delete();
    }
}
