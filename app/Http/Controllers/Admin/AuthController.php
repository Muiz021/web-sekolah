<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->route('dashboard.index');
        }
        return view('admin.login');
    }
    
    public function proses_login(Request $request)
    {
        request()->validate(['username' => 'required', 'password' => 'required',]);
        
        $kredensil = $request->only('username', 'password');
        
        if (Auth::attempt($kredensil)) {
            Auth::user();
            return redirect()->route('dashboard.index');
        }
        
        return redirect('login');
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect()->route('login');
    }
}
