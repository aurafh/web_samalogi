<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username'=>'required',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();   
            Alert::success('Login berhasil, Selamat datang!');
            return redirect()->intended('/dashboard'); 
        }
        Alert::error('Login gagal, silahkan coba lagi!');
        return back();
    }

    public function logout(Request $request){
        auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');         
    }
}
