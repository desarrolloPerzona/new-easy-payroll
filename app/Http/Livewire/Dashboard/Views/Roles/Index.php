<?php

namespace App\Http\Livewire\Dashboard\Views\Roles;

use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Index extends Component
{




    public function mount(){


    }


    public function render()
    {
        $roles = Role::all();

        return view('livewire.dashboard.views.roles.index',compact('roles'));
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role->delete();
    }
}
