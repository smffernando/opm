<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use Redirect, Response;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    public function register(Request $request)
    {
        $data = request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'uname' => ['required', 'string', 'min:6'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required','min:8', 'confirmed'],
            'nic' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:255'],
        ]);

        Customer::create($data);

        return Redirect('/')->withSuccess('Login Successfully');
    }
    // {
    //     $this->validatation($request);
    //     Customer::create($request->all());
    //     return redirect('/')->with('Status', 'Login Successfully');
    // }

    // public function validatation($request)
    // {
    //     return $this->validate($request, [
    //         'fname' => ['required', 'string', 'max:255'],
    //         'lname' => ['required', 'string', 'max:255'],
    //         // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'uname' => ['required', 'string', 'min:6'],
    //         // 'address' => ['required', 'string', 'max:255'],
    //         // 'password' => [
    //         //     'required|confirmed', 'string', 'min:8', 'regex:/[a-z]/',
    //         //     'regex:/[A-Z]/',
    //         //     'regex:/[@$!%*#?&]/',
    //         // ],
    //         // 'nic' => ['required|regex:/^\d{9}V$/', 'string', 'max:10'],
    //         // 'tel' => ['required|regex:/(01)[0-9]{9}/'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'uname' => ['required', 'string', 'min:6'],
    //         'address' => ['required', 'string', 'max:255'],
    //         'password' => 'required|confirmed|min:6',
    //         'nic' => ['required', 'string', 'max:255'],
    //         'tel' => ['required', 'string', 'max:255'],
    //     ]);
    // }
}
