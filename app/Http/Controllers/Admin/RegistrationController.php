<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Registration;
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
            'contactNumber' => 'required|starts_with:09|size:11',
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
            $reg = new Registration();
            $reg->fill([
                'lastName' => $request->input('lastName'),
                'firstName' => $request->input('firstName'),
                'middleName' => $request->input('middleName'),
                'contactNumber' => $request->input('contactNumber'),
                'dateOfBirth' => $request->input('dateOfBirth'),
                'religion' => $request->input('religion'),
                'status' => $request->input('status'),
                'gender' => $request->input('gender'),
                'monthlyIncome' => $request->input('monthlyIncome'),
                'socialClass' => $request->input('socialClass'),
                'householdNumber' => $request->input('householdNumber'),
                'municipality' => $request->input('municipality'),
                'sitio' => $request->input('sitio'),
                'sector' => $request->input('sector'),
                'occupation' => $request->input('occupation'),
                'markAs' => $request->input('markAs'),
                'remarks' => $request->input('remarks'),
            ]);

            $ben_ = $reg->beneficiaries;
            $ben_['ben_familyMembers'] = $request->input('ben_familyMembers');
            $ben_['ben_relation'] = $request->input('ben_relation');
            $ben_['ben_birthDate'] = $request->input('ben_birthDate');
            $ben_['ben_gender'] = $request->input('ben_gender');
            $ben_['ben_occupation'] = $request->input('ben_occupation');
            $ben_['ben_sector'] = $request->input('ben_sector');
            $ben_['ben_healthCondition'] = $request->input('ben_healthCondition');
            $reg->beneficiaries = $ben_;

            if ($reg->save()) {
                return view('auth.registration-form', ['status' => 200, 'message' => 'Done Registration']);
            }
        }
        return view('auth.registration-form', ['status' => 500, 'message' => 'Something went wrong please contact administration']);
    }
}
