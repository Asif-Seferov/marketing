<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login.login');
    }

    public function login_check(LoginRequest $request){
        if($request->isMethod('POST')){
            $email = $request->email;
            $password = $request->password;
            $remember_me = $request->has('remember_me') ? true : false;
            if(auth()->attempt(['email' => $email, 'password' => $password], $remember_me)){
                if($request->has('remember_me')){
                    $email_value = Cookie::queue('email', $email, 1); 
                    $password_value = Cookie::queue('password', $password, 1);
                }
            }
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->route('admin.index');
            }
            return back()->withErrors([
                'email' => 'Daxil etdiyiniz istifadeci adi ve ya email yanlisdir',
            ]);
           
           
        }else{
            return view('admin.login.login');
        }
    }

    public function log_out(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
