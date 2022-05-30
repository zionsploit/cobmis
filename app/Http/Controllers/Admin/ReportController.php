<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class ReportController extends Controller
{
    public function Reports()
    {
        $registered = Registration::all();

        if ($registered) {
            $data = $registered->toArray();
        }
        return view('auth.reports')->with('data', $data);
    }

    public function ResidentReports()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('auth.'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
