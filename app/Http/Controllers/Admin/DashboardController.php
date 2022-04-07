<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function Dashboard()
    {
        $registered = Registration::all();
        if ($registered) {
            $data = $registered->toArray();
            error_log(count(array_filter($data, function ($val) {
                return $val['sitio'] === 'SENTRONG IBABA';
            }, 0)));
            return view('auth.dashboard')->with('data', $data);
        }

        return view('auth.dashboard');
    }
}
