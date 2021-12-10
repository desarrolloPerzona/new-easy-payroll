<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::where('tenancy_domain',null)->get();
        return view('app-landlord.dashboard.users.index',compact('users'));

    }

}
