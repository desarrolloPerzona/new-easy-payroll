<?php

namespace App\Http\Livewire\Tenant\WorkingDays;

use App\Models\Tenant\BusinessWorkday;
use Livewire\Component;

class WorkingDaysTable extends Component
{
    protected $listeners = ['deleteSecond' => 'deleteRecord', 'renderHolidaysTable' => 'render'];

    public function render()
    {
        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        $workDays = BusinessWorkday::all();

        return view('livewire.tenant.working-days.working-days-table',
                    compact('daysArray', 'workDays'));
    }

    function deleteRecord(BusinessWorkday $workday){
        $workday->delete();
    }
}
