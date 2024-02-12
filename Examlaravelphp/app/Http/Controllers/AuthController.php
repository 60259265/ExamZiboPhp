<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLoginForm(){
            return view('authentification.login');
    }
    public function login(LoginRequest $request){
        $credentials = $request->only('email','password');
        if( Auth::attempt($credentials)){
            return redirect()->route('contact.index');
        }
       return back()->withErrors(['loginError' => "Email ou mot de passe incorrect."]);

    }

    public function getRegisterForm(){
        return view('authentification.register');
    }

    public function register(RegisterRequest $request){
          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
          ]);

          return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

