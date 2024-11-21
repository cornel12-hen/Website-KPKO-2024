<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VotingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nomor_urut' => 'required|exists:kandidats,nomor_urut',
        ]);

        $user = Auth::guard('siswa')->user();
        $username = $user ? $user->username : null;
        $check = Siswa::where('username', $username)->firstOrFail();

        if($check){
            if($check->is_voted){
                return redirect()->route('login')->with('error', 'Mohon maaf, tapi kamu sudah melakukan voting!');
            }
            else{
                $check->is_voted = true;
                $check->save();
            }
        }

        Hasil::create([
            'nomor_urut' => $request->input('nomor_urut'),
        ]);

        Auth::guard('siswa')->logout();

        return redirect()->route('login')->with('success', 'Terima kasih sudah menggunakan hak suaramu!');
    }
}
