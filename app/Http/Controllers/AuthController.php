<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function loginForm()
	{
		return view('auth.login');
	}

	public function registerForm()
	{
		return view('auth.register');
	}

    public function login(Request $request)
    {
    	$credentials = $request->only('email', 'password');

    	if (Auth::attempt($credentials)) {
    		return redirect()->intended('/courses');
    	}

    	return redirect()->back();
    }

    public function register(Request $request)
    {
    	$request->all();
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect('/login');
    }
}
