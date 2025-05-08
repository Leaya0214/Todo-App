<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (auth()->attempt($request->only('email', 'password'))) {
            // Redirect to the intended page or home
            return redirect()->intended('/home');
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/login')->with('message', 'Logged out successfully');
    }

}
