<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function Index() {
        return view("register", [
            "title" => "Register"
        ]);
    }

    public function Register(Request $request) {
        $validated = $request->validate([
            "username" => "required|max:100|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|min:8|regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/"
        ],[
            "username.required" => "Username is required",
            "email.required" => "Email is required",
            "password.required" => "Password is required"
        ]);

        User::create($validated);

        return redirect('/login')->with('success', 'Registered succesfully please login now.');
    }

    public function Login() {
        return view("login");
    }

    public function Authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email or password mismatch',
        ])->onlyInput('email');
    }

    public function Logout(Request $request) {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
