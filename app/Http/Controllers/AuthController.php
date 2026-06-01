<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if (Auth::attempt($data)) {
            return redirect('/requests');
        }

        return back()->with('error','Неверный пароль или email ');

        }

        public function logout()
        {
            Auth::logout();
            return redirect('/login');
        }
}
