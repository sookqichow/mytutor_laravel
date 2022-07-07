<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function landing()
    {
        return view('landing');
    }
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function mainpage()
    {
        return view('mainpage');
    }

    public function postRegistration(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tutors',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $check->save();

        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');;
    }  

    public function create(array $data)
    {
        return Tutor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']) ,
            'phone' => $data['phone'],
            'address' => $data['address'],
            'state' => $data['state'],
       
        ]);
    }

    public function postLogin(Request $request)             
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
        }

        return redirect("mainpage")->withSuccess('You have invalid credentials');
    }

}
