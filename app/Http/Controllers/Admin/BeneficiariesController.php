<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        return view('auth.beneficiaries')->with('data', []);
    }

    public function ViewBeneficiaries($id)
    {
        $beneficiaries = Registration::where('id', intval($id))->first()->toArray();
        if ($beneficiaries) {
            return view('auth.view-beneficiaries')->with('data', $beneficiaries);
        }
        return view('auth.view-beneficiaries')->with('data', []);
    }

    public function ViewModifyBeneficiaries($id)
    {
        $beneficiaries = Registration::where('id', intval($id))->first()->toArray();
        if ($beneficiaries) {
            return view('auth.modify-beneficiaries')->with('data', $beneficiaries)->with('status', 100);
        }
        return view('auth.modify-beneficiaries')->with('data', []);
    }

    public function UpdateModifyBeneficiaries(Request $request, $id)
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
            $updateregisted = Registration::find($id);
            $updateregisted->lastName =  $request->input('lastName');
            $updateregisted->firstName =  $request->input('firstName');
            $updateregisted->middleName =  $request->input('middleName');
            $updateregisted->contactNumber =  $request->input('contactNumber');
            $updateregisted->dateOfBirth =  $request->input('dateOfBirth');
            $updateregisted->religion =  $request->input('religion');
            $updateregisted->status =  $request->input('status');
            $updateregisted->gender =  $request->input('gender');
            $updateregisted->monthlyIncome =  $request->input('monthlyIncome');
            $updateregisted->socialClass =  $request->input('socialClass');
            $updateregisted->householdNumber =  $request->input('householdNumber');
            $updateregisted->municipality =  $request->input('municipality');
            $updateregisted->sitio =  $request->input('sitio');
            $updateregisted->sector =  $request->input('sector');
            $updateregisted->occupation =  $request->input('occupation');
            $updateregisted->markAs =  $request->input('markAs');
            $updateregisted->remarks =  $request->input('remarks');

            if ($updateregisted->save()) {
                return redirect("modify-beneficiares/$id");
            }
            return view('auth.modify-beneficiaries')->with('data', []);
        }
    }

    public function DeleteBeneficiaries($id) {
        $deleteregisted = Registration::where('id', $id)->delete();
        if($deleteregisted)
        {
            return redirect(str_replace(url('/'), '', url()->previous()));
        }
    }
}
