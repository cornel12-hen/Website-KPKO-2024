<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login1', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'token' => 'required',
        ]);

        $credentials = ['username' => $request->input('username'), 'password' => $request->input('token')];

                      if (Auth::guard('siswa')->attempt($credentials)) {
                        return redirect()->route('befvote')->with('success', 'Login berhasil!');
                    } else {
                        return redirect()->back()->withErrors(['msg' => 'Username atau token salah!']);
                    }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}

