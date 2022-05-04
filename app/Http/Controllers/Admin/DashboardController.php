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
            return view('auth.dashboard')->with('data', $data);
        }

        return view('auth.dashboard');
    }

    public function SitioDashboard($sitio)
    {
        if ($sitio == 'all') {
            $sentroData = strtoupper(str_replace('-', ' ', $sitio));
            $registered = Registration::all();
            if ($registered) {
                $data = $registered->toArray();
                return view('auth.sitio')->with('data', $data)->with('sentro', 'PREVIEW ALL');
            }
            return view('auth.sitio');
        }

        $sentroData = strtoupper(str_replace('-', ' ', $sitio));
        $registered = Registration::where('sitio', $sentroData)->get();
        if ($registered) {
            $data = $registered->toArray();
            return view('auth.sitio')->with('data', $data)->with('sentro', $sentroData);
        }
        return view('auth.sitio');
    }

    public function ClassDashboard($class)
    {
        $classData = str_replace('-', ' ', $class);
        $registered = Registration::where('socialClass', 'LIKE', "%$classData%")->get();

        if ($registered) {
            $data = $registered->toArray();
            return view('auth.status-class')->with('data', $data)->with('socialClass', $classData);
        }

        return view('auth.status-class');
    }
}
