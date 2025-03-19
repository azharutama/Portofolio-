<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }

        

        return back()->with('status', 'Invalid login details');
    }
}
