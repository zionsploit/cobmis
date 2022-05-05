<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;

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

    public function ViewBeneficiaries($id)
    {
        $beneficiaries = Registration::where('id', intval($id))->first()->toArray();
        if ($beneficiaries) {
            return view('auth.view-beneficiaries')->with('data', $beneficiaries);
        }
        return view('auth.view-beneficiaries');
    }
}
