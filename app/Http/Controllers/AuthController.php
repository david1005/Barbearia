<?php

namespace App\Http\Controllers;

use FFI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()=== true){
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
       
    }
    public function admLogin()
    {
        return view('admin.admLogin');
    }

    public function login(Request $request)
    {
       

        $credencial = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth:: attempt($credencial)){
            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados não conferem.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }

}
