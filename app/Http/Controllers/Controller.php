<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //registration Controller
    public function registration(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|alpha',
            'middleName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'username' => 'required|min:6|max:16',
            'password' => 'required|min:8|max:16',
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validated && User::where('username', '=', $request->username)->first() === null) {
            $user = new User();
            $user->firstName = $request->firstName;
            $user->middleName = $request->middleName;
            $user->lastName = $request->lastName;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->remember_token = $request->_token;

            if ($user->save()) {
                return view('guests.register', ['status' => 'Successfully Registered']);
            }
        }

        return view('guests.register', ['status' => 'Username is already registered']);
    }

    //login Controller
    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|min:6|max:16',
            'password' => 'required|min:8|max:16'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return view('guests.login', ['status' => 'Invalid Credentials']);
    }

    //logou Controller
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
