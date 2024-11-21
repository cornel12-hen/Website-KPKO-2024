<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SiswaMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('siswa')->check()) {
            Log::info('User is logged in wlee: ' . Auth::user()->username);
            return $next($request);
        }
        else{
            Log::info('User is not logged in');
            return redirect()->route('login')->withErrors(['msg' => 'Harap login terlebih dahulu.']);
        }
    }
}
