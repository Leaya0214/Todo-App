<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        return view('backend.admin.dashboard');
    }
    public function show()
    {
        return view('admin.profile');
    }
    public function settings()
    {
        return view('admin.settings');
    }
    public function logout()
    {
        // Logic for logging out the admin user
        return redirect('/admin/login')->with('message', 'Logged out successfully');
    }
}
