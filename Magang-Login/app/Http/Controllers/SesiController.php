<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login'); 
    }
    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib diisi!',
            'password.required' => 'Password wajib diisi!',
        ]);
    
        $infologin = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        
        if(Auth::attempt($infologin)){
            return redirect()->route('dashboard.index');
        }else{
            return redirect('')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }
}
