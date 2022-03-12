<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //Registration Controller
    public function Registration(Request $request)
    {
        $validated = $request->validate([
            'lastName' => 'required|alpha',
            'firstName' => 'required|alpha',
            'middleName' => 'required|alpha',
            'contactNumber' => 'required|numeric|starts_with:09|size:11',
            'dateOfBirth' => 'required|date_format:Y-m-d|date',
            'religion' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'monthlyIncome' => 'required|numeric',
            'socialClass' => 'required',
            'householdNumber' => 'required|numeric',
            'municipality' => 'required',
            'sitio' => 'required',
            'sector' => 'required',
            'occupation' => 'required'
        ]);

        if ($validated) {
            
        }
        print_r($request->input());
    }
}
