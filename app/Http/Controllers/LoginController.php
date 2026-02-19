<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(){
        return view("/login");
    }
    public function login(Request $request){
        $loginData = $request->validate([
            "email"=> ['required', 'email'],
            "password"=> ['required'],
        ]);

        $remember = $request->has('remember');

        if(Auth::attempt($loginData, $remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        
        return back()->withErrors([
            'email' => 'Nieprawidłowy email lub hasło.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }

    public function showRegister(){
        return view("/register");
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect(route('home'));
    }
}
