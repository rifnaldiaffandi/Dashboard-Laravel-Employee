<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   
    protected function redirectTo()
    {
        return route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = User::where('email', $email)->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Email tidak ditemukan');
    }

    if (!Hash::check($password, $user->password)) {
        return redirect()->back()->with('error', 'Password salah');
    }

    Auth::login($user);

    return redirect()->route('dashboard');
}
}