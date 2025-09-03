<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  //login page
  public function showLoginForm()
  {
    return view('content.authentications.auth-login-basic');
  }

  //login proses
   public function login(Request $request)
    {
          $credentials = $request->only('email', 'password');

        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('/dashboard');
        }

         return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);

    }

  //logout
  public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
  }
}
