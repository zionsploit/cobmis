<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class BeneficiariesController extends Controller
{
    //

    public function Beneficiaries()
    {
        $beneficiaries = Registration::all();
        $data = $beneficiaries->toArray();

        if ($data) {
            return view('auth.beneficiaries')->with('data', $data);
        }
        return view('auth.beneficiaries')->with('data', [null]);
    }
}
