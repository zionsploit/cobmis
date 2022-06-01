<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $request->session()->put('user', $request->username);
            return redirect('/dashboard');
        }
        return view('guests.login', ['status' => 'Invalid Credentials']);
    }

    //logout Controller
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    //change password controller
    public function changepassword(Request $request)
    {
        $validated = $request->validate([
            'currentpassword' => 'required|min:8|max:16',
            'newpassword' => 'required|min:8|max:16',
            'confirmnewpassword' => 'required|same:newpassword',
        ]);

        $username = $request->session()->get('user');
        if ($validated) {
            $user = DB::table('users')->where('username', '=', $username)->first();
            if (Hash::check($request->currentpassword, $user->password)) {
                $affected = DB::table('users')->where('username', '=', $username)->update(['password' => Hash::make($request->newpassword)]) ;//User::where('username', '=', 'adminuser')->update(['password' => $request->newpassword])
                if ($affected) {
                    return view('auth.settings')->with('affected', 'Password Change')->with('status', 200);
                }
                return view('auth.settings')->with('affected', 'Password Not Change')->with('status', 200);
            }
            return view('auth.settings')->with('affected', 'Password didnt exists')->with('status', 200);
        }
        return view('auth.settings')->with('affected', 'Invalid Password')->with('status', 200);
    }
}
