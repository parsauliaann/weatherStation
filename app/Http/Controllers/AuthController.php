<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect()->route('dashboard');
        }

        return back()->with('error', __('Username dan/atau password salah'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
