<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('user.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->safe(['email', 'password']);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('car_list');
        }

        return back()->with(['login_error'=>'Invalid Account Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
    }

}
