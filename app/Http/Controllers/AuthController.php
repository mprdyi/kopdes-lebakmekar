<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash, Session;

class AuthController extends Controller
{

    public function login(){

        return view('login');
    }

    //validasi
    public function authenticate(Request $Request){
        $credientials = $Request->only('email', 'password');
        if(Auth::attempt($credientials)){
            return redirect()->route('index');
        }else{
            return redirect('login')->with('error_message', 'Username dan Password Salah');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
