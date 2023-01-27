<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function viewLogin () {
        return view('auth.login');
    }

    public function viewRegister () {
        return view('auth.register');
    }

    public function register(Request $request) {
        // if ($request->password != $request->password1)
        //     return redirect()->route('register')->with('status',"Las contrasenas no coinciden");

        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('auth-home');
        // return redirect()->route('login')->with('status',"Registro de Usuario exitoso. Ingrese Datos para entrar");
    }

    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            return redirect('auth-home');

        return redirect()->route('login')->with('status','Datos de email y/o password invalidos');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('home-guest');
    }

    public function authHome() {
        return view('home-auth');
    }
}
