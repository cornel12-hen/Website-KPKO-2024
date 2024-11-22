<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SiswaMiddleware;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\DataKandidatController;
use App\Http\Controllers\Auth\SiswaAuthController;

Route::get('/', function () {
    return view('home2', ['title' => 'Home']);
});

// Route::get('/vote', function () {
//     return view('vote1', ['title' => 'Vote']);
// });

// Route::get('/vote2', function () {
//     return view('apalah', ['title' => 'Vote']);
// });

Route::get('/login', function() {
    return view('login', ['title' => 'Login']);
})->name('login');
// Route::get('/login', [SiswaAuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [SiswaAuthController::class, 'login'])->name('loginpost');
Route::get('/logout', [SiswaAuthController::class, 'logout'])->name('logout');
Route::post('/vote', [VotingController::class, 'store'])->name('storeVote');
Route::get('/befvote', [DataKandidatController::class, 'index'])->name('befvote');
Route::get('/modal', [DataKandidatController::class, 'index'])->name('modal');   

// Route::middleware([SiswaMiddleware::class])->group(function () {
//     Route::get('/vote', function() {
//         return view('vote1', [
//             'title' => 'Vote'
//         ]);
//     })->name('vote');
// });

Route::get('/vote', function() {
    $data = session()->get('vote_data', []);
    return view('vote', [
        'title' => 'Vote',
        'data' => $data,
    ]);
})->middleware(SiswaMiddleware::class)->name('vote');

Route::get('/vote1', function() {
    return view('vote1', ['title' => 'Vote']);
})->name('vote1');

