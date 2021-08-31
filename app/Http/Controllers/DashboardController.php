<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $trial_ends_at = '';
        $user = Auth::user();


        if ($user->onTrial()) {
            $trial_ends_at = formatDate($user->trial_ends_at);
        }
        // \App\Events\TenantHasSubscribe::dispatch();

        $notifications = $user->unreadNotifications;


        return view('client.index', compact('user', 'trial_ends_at', 'notifications'));
    }
}
