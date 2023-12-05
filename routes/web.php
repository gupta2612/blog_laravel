<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::post('/users', [UserAuth::class, 'loginUser']);

Route::get('/login', function () {
    if (session()->has('username')) {
        return redirect('profile');
    }
    return view('/users');
});

Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username', null);
    }
    return redirect('/login');
});

Route::view('/profile', 'profile');



